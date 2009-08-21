/**
 * Script:
 *   Flame.twilight.js - Twilight Theme for Lighter.js
 *
 * License:
 *   MIT-style license.
 * 
 * Author:
 *   José Prado
 *
 * Copyright:
 *   Copyright (©) 2009 [Jose Prado](http://pradador.com/).
 *
 * Inspiration:
 *   TextMate's Twilight Theme [TextMate](http://macromates.com/).
 *
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 * 
 */
Flame.twilight = new Class({
	
	Extends: Flame,
	shortName: 'twilight',

	styles: new Hash({
		de1: new Hash({'color': '#fff'}), // Beginning delimiter
		de2: new Hash({'color': '#fff'}), // End delimiter
		kw1: new Hash({'color': '#CDA869'}), // Keywords 1
		kw2: new Hash({'color': '#F9EE98'}), // Keywords 2
		kw3: new Hash({'color': '#6F87A8'}), // Keywords 3
		kw4: new Hash({'color': '#E96546'}), // Keywords 4
		co1: new Hash({'color': '#5F5A60'}), // Comments 1
		co2: new Hash({'color': '#5F5A60'}), // Comments 2
		st0: new Hash({'color': '#8F9657'}), // Strings 1
		st1: new Hash({'color': '#8F9657'}), // Strings 2
		st2: new Hash({'color': '#8F9657'}), // Strings 3
		nu0: new Hash({'color': '#CF6745'}), // Numbers
		me0: new Hash({'color': '#fff'}), // Methods and Functions
		br0: new Hash({'color': '#fff'}), // Brackets
		sy0: new Hash({'color': '#fff'}), // Symbols
		es0: new Hash({'color': '#fff'}), // Escape characters
		re0: new Hash({'color': '#E57A27'})  // Regular Expressions
	}),
	
	common: new Hash({
		'border': '1px solid #222',
		'color': '#f8f8f8',
		'font-family': 'Monaco, Courier, monospace',
		'font-size': '12px',
		'line-height': '1.6em'
	}),
	layout: new Hash({
		'numColor':  new Hash({'background-color': "#f2f2f2"}),
		'lineColor': new Hash({'background-color': '#141414'}),
		'numStyles': new Hash({
			'color': '#000',
			'font-size': '10px'
		}),
		'lineStyles': new Hash({
			'border-left': '1px solid #939393'
		}),
		'codeStyles': new Hash({
			'font-size': '12px',
			'color': '#f8f8f8'
		}),
		'alt':    new Hash({'background-color': '#202021'}),
		'top':    new Hash({'padding-top': '10px'}),
		'right':  new Hash({'padding-right': '5px'}),
		'bottom': new Hash({'padding-bottom': '10px'}),
		'left':   new Hash({'padding-left': '15px'})
	}),
	
	initialize: function(lighter, fuel) {this.parent(lighter, fuel);}
	
});