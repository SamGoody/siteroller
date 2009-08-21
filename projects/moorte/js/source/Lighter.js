/**
 * Script:
 *   Lighter.js - Syntax Highlighter written in MooTools.
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
var Lighter = new Class(
{	
	Implements: [Options],
	name: 'Lighter',
	options: {
		altLines: '', // Pseudo-selector enabled.
		container: null,
		editable: false,
		flame: 'standard',
		fuel:  'standard',
		id: null,
		indent: -1,
		jsStyles: true,
		matchType: "standard",
		mode: "pre",
		path: "./",
		strict: false
	},
	
	/***************************
	 * Lighter Initialization
	 **************************/
	initialize: function(codeblock, options) {
		this.setOptions(options);
		options        = this.options;
		this.id        = options.id || this.name + '_' + $time();
		this.codeblock = $(codeblock)
		this.code = codeblock.get('html').chop().replace(/&lt;/gim, '<').replace(/&gt;/gim, '>').replace(/&amp;/gim, '&');
		this.container = $(this.options.container);
		
		// Indent code if user option is set.
		if (options.indent > -1) this.code = this.code.tabToSpaces(options.indent);
		
		// Set builder options.
		this.builder = new Hash({
			'pre':    this.createLighter.bind(this),
			'ol':     this.createLighterWithLines.pass([['ol'], ['li']], this),
			'div':    this.createLighterWithLines.pass([['div'], ['div', 'span'], true, 'span'], this),
			'table':  this.createLighterWithLines.pass([['table', 'tbody'], ['tr', 'td'], true, 'td'], this)
		});
		
		// Extract fuel/flame names. Precedence: className > options > 'standard'.
		var ff = this.codeblock.get('class').split(':');
		if (!ff[0]) ff[0] = this.options.fuel;
		if (!ff[1]) ff[1] = this.options.flame;
		
		// Load flame to start chain of loads.
		this.loadFlameSrc(ff);
	},
	/* Try to insert script into document. If successful or script is already included, 
	   call loadFlame(). Otherwise, revert to standard flame and call loadFlame(). */
	loadFlameSrc: function(ff) {
		if (!$chk(Flame[ff[1]])) {
			var flameScript = new Element('script', {
				src: this.options.path+'Flames/Flame.'+ff[1]+'.js',
				type: 'text/javascript'
			}).addEvents({
				load: function() {
					this.loadFlame(ff);
				}.bind(this),
				error: function() {
					ff[1] = 'standard';
					this.loadFlame(ff)
				}.bind(this)
			}).inject(document.head);
		} else {
			this.loadFlame(ff);
		}
	},
	loadFlame: function(ff) {
		this.flame = new Flame[ff[1]](this);
		this.loadFuelSrc(ff);
	},
	/* Same as loadFlameSrc */
	loadFuelSrc: function(ff) {
		if (!$chk(Fuel[ff[0]])) {
			var fuelScript = new Element('script', {
				src: this.options.path+'Fuels/Fuel.'+ff[0]+'.js',
				type: 'text/javascript'
			}).addEvents({
				load: function() {
	    		this.loadFuel(ff);
				}.bind(this),
				error: function() {
					ff[0] = 'standard';
					this.loadFuel(ff);
				}.bind(this)
			}).inject(document.head);
		} else {
			this.loadFuel(ff);
		}
	},
	loadFuel: function(ff) {
		this.fuel = new Fuel[ff[0]](this, this.flame, {
			matchType: this.options.matchType,
			strict: this.options.strict
		});
		this.light();
	},
	light: function() {
		// Build highlighted code object.
		this.element = this.toElement();
		
		// Insert lighter in the right spot.
		if (this.container) {
			this.container.empty();
			this.element.inject(this.container);
		} else {
			this.codeblock.setStyle('display', 'none');
			this.element.inject(this.codeblock, 'after');
		}
  },
	
	/***************************
	 * Lighter creation methods
	 **************************/
	createLighter: function() {
		var lighter = new Element('pre', {'class': this.flame.shortName + this.name}),
		    pointer = 0;
		    
		// If no matches were found, insert code plain text.
		if (!$defined(this.fuel.wicks[0])) {
			lighter.appendText(this.code);
		} else {
		
			// Step through each match and add unmatched + matched bits to lighter.
			this.fuel.wicks.each(function(match) {
				lighter.appendText(this.code.substring(pointer, match.index));
				
				this.insertAndKeepEl(lighter, match.text, match.type);
				pointer = match.index + match.text.length;
			}, this);
			
			// Add last unmatched code segment if it exists.
			if (pointer < this.code.length) {
				lighter.appendText(this.code.substring(pointer, this.code.length));
			}
		}
		
		//lighter.set('text', lighter.get('html'));
		return lighter;
	},
	createLighterWithLines: function(parent, child, addLines, numType) {
		var lighter = new Element(parent[0], {'class': this.flame.shortName + this.name, 'id': this.id}),
		    newLine = new Element(child[0]),
		    lineNum = 1,
		    pointer = 0,
		    text = null;
		// Small hack to ensure tables have no ugly styles.
		if (parent[0] == "table") lighter.set("cellpadding", 0).set("cellspacing", 0).set("border", 0);
		
		/* If lines need to be wrapped in an inner parent, create that element
		   with this test. (E.g, tbody in a table) */
		if (parent[1]) lighter = new Element(parent[1]).inject(lighter);
		
		/* If code needs to be wrapped in an inner child, create that element
		   with this test. (E.g, tr to contain td) */
		if (child[1])  newLine = new Element(child[1]).inject(newLine);
		newLine.addClass(this.flame.shortName + 'line');
		if (addLines) lineNum = this.insertLineNum(newLine, lineNum, numType);

		// Step through each match and add matched/unmatched bits to lighter.
		this.fuel.wicks.each(function(match) {
		
			// Create and insert un-matched source code bits.
			if (pointer != match.index) {
				text = this.code.substring(pointer, match.index).split('\n');
				for (var i = 0; i < text.length; i++) {
					if (i < text.length - 1) {
						if (text[i] == '') text[i] = ' ';
						newLine = this.insertAndMakeEl(newLine, lighter, text[i], child);
						if (addLines) lineNum = this.insertLineNum(newLine, lineNum, numType);
					} else {
						this.insertAndKeepEl(newLine, text[i]);
					}
				}
			}
			
			// Create and insert matched symbol.
			text = match.text.split('\n');
			for (i = 0; i < text.length; i++) {
				if (i < text.length - 1) {
					newLine = this.insertAndMakeEl(newLine, lighter, text[i], child, match.type);
					if (addLines) lineNum = this.insertLineNum(newLine, lineNum, numType);
				} else {
					this.insertAndKeepEl(newLine, text[i], match.type);
				}
			}
			
			pointer = match.end;
		}, this);
		
		// Add last unmatched code segment if it exists.
		if (pointer <= this.code.length) {
			text = this.code.substring(pointer, this.code.length).split('\n');
			for (var i = 0; i < text.length; i++) {
				newLine = this.insertAndMakeEl(newLine, lighter, text[i], child);
				if (addLines) lineNum = this.insertLineNum(newLine, lineNum, numType);
			}
		}
		
		// Add alternate line styles based on pseudo-selector.
		if (this.options.altLines !== '') {
			if (this.options.altLines == 'hover') {
				lighter.getElements('.'+this.flame.shortName+'line').addEvents({
						'mouseover': function() {this.toggleClass('alt');},
						'mouseout':  function() {this.toggleClass('alt');}
				});
			} else {
				if (child[1]) {
					lighter.getChildren(':'+this.options.altLines).getElement('.'+this.flame.shortName+'line').addClass('alt');
				} else {
					lighter.getChildren(':'+this.options.altLines).addClass('alt');
				}
			}
		}
		
		// Add first/last line classes to correct element based on mode.
		if (child[1]) {
			lighter.getFirst().getChildren().addClass(this.flame.shortName+'first');
			lighter.getLast().getChildren().addClass(this.flame.shortName+'last');
		} else {
			lighter.getFirst().addClass(this.flame.shortName+'first');
			lighter.getLast().addClass(this.flame.shortName+'last');
		}
		
		// Ensure we return the real parent, not just an inner element like a tbody.
		if (parent[1]) lighter = lighter.getParent();
		return lighter;
	},
	/** Helper function to insert new code segment into existing line. */
	insertAndKeepEl: function(el, text, alias) {
		if (text.length > 0) {
			var span = new Element('span');
			span.set('text', text);
			if (alias) {span.addClass(this.flame.aliases[alias]);}
			span.inject(el);
		}
	},
	/** Helper function to insert new code segment into existing line and create new line. */
	insertAndMakeEl: function(el, group, text, child, alias) {
		this.insertAndKeepEl(el, text, alias);
		if (child[1]) el = el.getParent();
		el.inject(group);
		
		var newLine = new Element(child[0]);
		if (child[1]) newLine = new Element(child[1]).inject(newLine);
		newLine.addClass(this.flame.shortName+'line');
		return newLine;
	},
	/** Helper funciton to insert line number into line. */
	insertLineNum: function(el, lineNum, elType) {
		var newNum = new Element(elType, {
			'text':  lineNum++,
			'class': this.flame.shortName+ 'num'
		});
		newNum.inject(el.getParent(), 'top');
		
		return lineNum;
	},
	
	/******************
	 * Element Methods
	 ******************/
	toElement: function() {
		if (!this.element) {
			this.element = this.builder[this.options.mode]();
			if (this.options.editable) {this.element.set('contenteditable', 'true');}
		}
		
		return this.element;
	},
	replaces: function(element){
    element = $(element, true);
    element.parentNode.replaceChild(this.toElement(), element);
    
    return this;
  }

});

/** Element Native extensions */
Element.implement({light: function(options){return new Lighter(this, options);}});

/** String Native extensions */
String.implement({
	chop: function() {return this.replace(/(^\s*\n|\n\s*$)/gi, '');},
	tabToSpaces: function(spaces) {
		for (var i = 0, indent = ''; i < spaces; i++) {indent += ' ';}
		return this.replace(/\t/g, indent);
	}
});

