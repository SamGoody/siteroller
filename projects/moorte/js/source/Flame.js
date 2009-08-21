/**
 * Script:
 *   Flame.js - Theme Engine for Lighter.js
 *
 * License:
 *   MIT-style license.
 * 
 * Author:
 *   Jos? Prado
 *
 * Copyright:
 *   Copyright (?) 2009 [Jose Prado](http://pradador.com/).
 *
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 *
 */
var Flame = new Class({
	
	shortName: 'lt',
	aliases:   new Hash(),
	common:    new Hash(),
	layout:    new Hash(),
	styles:    new Hash(),
	
	defaultCommon: new Hash({
		'font-family': 'Monaco, Courier, Monospace',
		'font-size': '12px',
		'overflow': 'auto',
		'white-space': 'pre-wrap',
 		'word-wrap': 'break-word'
	}),
	defaultLayout: new Hash({
		'numBgColor':    new Hash(),
		'lineBgColor':   new Hash(),
		'lineNumStyles': new Hash(),
		'lineStyles':    new Hash(),
		'altLineStyles': new Hash(),
		'top':           new Hash(),
		'right':         new Hash(),
		'bottom':        new Hash(),
		'left':          new Hash(),
		'codeStyles':    new Hash()
	}),
	fixes: new Hash({
		'div': new Hash({
			'div':  new Hash({'clear': 'left','overflow': 'auto'}),
			'num':  new Hash({'display': 'block','float': 'left','text-align': 'center','width': '30px'}),
			'line': new Hash({'display': 'block','margin-left': '30px'})
		}),
		'table': new Hash({
			'num': new Hash({'text-align': 'center','width': '30px'})
		}),
		'ol': new Hash({
			'ol': new Hash({'margin-top': '0', 'margin-bottom': '0', 'margin-left': '0','padding-left': '0'}),
			'li': new Hash({'margin-left': '40px'})
		})
	}),
	
	initialize: function(lighter, fuel) {
		// Setup Lighter/Fuel/Flame trio.
		this.lighter  = lighter;
		this.fuel     = fuel;
		
		// Combine basic font/white-space styles.
		this.common.combine(this.defaultCommon);
		this.layout.combine(this.defaultLayout);
		
		// Map general styles to their aliases.
		this.styles.each(function(style, key) {
			this.addAlias(key);
		}, this);
		
		// Insert stylesheet if in jsStyles mode
		if (this.lighter.options.jsStyles) this.injectTag();
	},
	addAlias: function(key, alias) {this.aliases[key] = alias || key;},
	
	injectTag: function() {
		this.styleTag = new Element("style").setProperty('type','text/css').inject(document.head);
		this.styleText = "";
		
		var type    = this.lighter.options.mode,
		    pfx     = type+'.'+this.shortName+this.lighter.name, // div.ltLighter
		    pfx2    = pfx+' .'+this.shortName, // div.ltLighter .lt
		    numCSS  = this.layout['lineNumStyles'].extend(this.layout.numBgColor),
		    lineCSS = this.layout['lineStyles'].extend(this.layout.lineBgColor),
		    padCSS  = this.layout.left.extend(this.layout.right);
		    
		// General white-space/font styles.
		this.addCSS(pfx, this.common);
		this.addCSS(pfx, new Hash({'white-space': '-moz-pre-wrap'}));
		this.addCSS(pfx, new Hash({'white-space': '-pre-wrap'}));
		this.addCSS(pfx, new Hash({'white-space': '-o-pre-wrap'}));
		
		// Case specific styles for a common general style.
		switch (type) {
			case "pre":
				padCSS = padCSS.extend(this.layout.top).extend(this.layout.bottom);
				this.addCSS(pfx, this.layout.lineBgColor.extend(padCSS));
			  this.addCSS(pfx+' span',  this.layout['codeStyles']);
				break;
			case "ol":
				this.addCSS(pfx,          numCSS.extend(this.fixes['ol']['ol']));
				this.addCSS(pfx+' li',    lineCSS.extend(padCSS).extend(this.fixes['ol']['li']));
				this.addCSS(pfx2+'first', this.layout['top']);
				this.addCSS(pfx2+'last',  this.layout['bottom']);
				this.addCSS(pfx+' .alt',  this.layout['altLineStyles']);
			  this.addCSS(pfx+' span',  this.layout['codeStyles']);
			  break;
			case "div":
				this.addCSS(pfx2+'num',   numCSS.extend(this.fixes.div.num));
				this.addCSS(pfx2+'line',  lineCSS.extend(padCSS).extend(this.fixes.div.line));
				this.addCSS(pfx+' div',   this.fixes['div']['div'].extend(this.layout.numBgColor));
				this.addCSS(pfx2+'first', this.layout['top']);
				this.addCSS(pfx2+'last',  this.layout['bottom']);
				this.addCSS(pfx+' .alt',  this.layout['altLineStyles']);
			  this.addCSS(pfx+' span',  this.layout['codeStyles']);
			  break;
			case "table":
				this.addCSS(pfx2+'num',   numCSS.extend(this.fixes['table']['num']));
				this.addCSS(pfx2+'line',  lineCSS.extend(padCSS));
				this.addCSS(pfx2+'first', this.layout['top']);
				this.addCSS(pfx2+'last',  this.layout['bottom']);
				this.addCSS(pfx+' .alt',  this.layout['altLineStyles']);
			  this.addCSS(pfx+' span',  this.layout['codeStyles']);
			  break;
		}
		
		this.styles.each(function(stylesHash, styleName) {this.addCSS(pfx+' .'+styleName, stylesHash);}, this);
		
		/* Insert complete styles text into our style element. */
		if (Browser.Engine.trident) {
			this.styleTag.styleSheet.cssText += this.styleText;
		} else {
			this.styleTag.appendText(this.styleText);
		}
	},
	/** Inspiration from horseweapon @ http://forum.mootools.net/viewtopic.php?id=6635 */
	addCSS: function(styleName, stylesHash) {
		var newStyle = "\n" + styleName + " {\n";
		if (stylesHash) {
			stylesHash.each(function(value, attribute) {newStyle += "\t" + attribute + ": " + value + ";\n";});
		}
		newStyle += "}\n";
		this.styleText += newStyle;
	}
	
});

Flame.standard = new Class({

	Extends: Flame,
	styles: new Hash({
		de1: new Hash({}), // Beginning delimiter
		de2: new Hash({}), // End delimiter
		kw1: new Hash({'color': '#1b609a'}), // Keywords 1
		kw2: new Hash({'color': '#9a6f1b'}), // Keywords 2
		kw3: new Hash({'color': '#784e0c'}), // Keywords 3
		kw4: new Hash({'color': '#9a6f1b'}), // Keywords 4
		co1: new Hash({'color': '#888888'}), // Comments 1
		co2: new Hash({'color': '#888888'}), // Comments 2
		st0: new Hash({'color': '#489a1b'}), // Strings 1
		st1: new Hash({'color': '#489a1b'}), // Strings 2
		st2: new Hash({'color': '#489a1b'}), // Strings 3
		nu0: new Hash({'color': '#70483d'}), // Numbers
		me0: new Hash({'color': '#666666'}), // Methods and Functions
		br0: new Hash({'color': '#444444'}), // Brackets
		sy0: new Hash({'color': '#444444'}), // Symbols
		es0: new Hash({'color': '#444444'}), // Escape characters
		re0: new Hash({'color': '#784e0c'})  // Regular Expressions
	}),
	
	layout: new Hash({
		'numBgColor':  new Hash({'background-color': '#f2f2f2'}),
		'lineBgColor': new Hash({'background-color': '#fff'}),
		'lineNumStyles': new Hash({
			'color': '#939393',
			'font-size': '10px',
			'list-style': 'decimal-leading-zero'
		}),
		'lineStyles': new Hash({
			'border-top': '1px solid #fff',
			'border-bottom': '1px solid #fff',
			'border-left': '1px solid #939393',
			'padding': '0 3px 0 10px'
		}),
		'altLineStyles': new Hash({
			'border-top': '1px solid #eee',
			'border-bottom': '1px solid #eee',
			'background-color': '#F4F8FC'
		}),
		'top':    new Hash({'padding-top': '5px'}),
		'right':  new Hash({'padding-right': '5px'}),
		'bottom': new Hash({'padding-bottom': '5px'}),
		'left':   new Hash({'padding-left': '15px'}),
		'codeStyles': new Hash({
			'color': 'black',
			'font-size': '12px'
		})
	}),
	
	initialize: function(lighter, fuel) {this.parent(lighter, fuel);}
	
});
