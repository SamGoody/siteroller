/**
 * Script:
 *   Flame.mocha.js - Mocha Theme for Lighter.js
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
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 * 
 */
Flame.mocha = new Class({
	
	Extends: Flame,
	shortName: 'mocha',

	styles: new Hash({
		de1: new Hash({'color': '#CF6A4C'}), // Beginning delimiter
		de2: new Hash({'color': '#CF6A4C'}), // End delimiter
		kw1: new Hash({'color': '#CDA869'}), // Keywords 1
		kw2: new Hash({'color': '#CACD69'}), // Keywords 2
		kw3: new Hash({'color': '#afc4db'}), // Keywords 3
		kw4: new Hash({'color': '#CF6A4C'}), // Keywords 4
		co1: new Hash({'color': '#5F5A60', 'font-style': 'italic'}), // Comments 1
		co2: new Hash({'color': '#5F5A60', 'font-style': 'italic'}), // Comments 2
		st0: new Hash({'color': '#8F9D6A'}), // Strings 1
		st1: new Hash({'color': '#8F9D6A'}), // Strings 2
		st2: new Hash({'color': '#DDF2A4'}), // Strings 3
		nu0: new Hash({'color': '#5B97B5'}), // Numbers
		me0: new Hash({'color': '#C5AF75'}), // Methods and Functions
		br0: new Hash({'color': '#777'}), // Brackets
		sy0: new Hash({'color': '#777'}), // Symbols
		es0: new Hash({'color': '#777'}), // Escape characters
		re0: new Hash({'color': '#B55B8B'})  // Regular Expressions
	}),
	common: new Hash({
		'color': '#f8f8f8',
		'font-family': 'Monaco, Courier, monospace',
		'font-size': '12px'
	}),
	layout: new Hash({
		'numColor':  new Hash({'background-color': "#BBCCD5"}),
		'lineColor': new Hash({'background-color': '#111'}),
		'numStyles': new Hash({
			'color': '#000',
			'font-size': '10px'
		}),
		'lineStyles': new Hash({
			'border-left': '2px solid #939393'
		}),
		'alt':    new Hash({'background-color': '#222'}),
		'top':    new Hash({'padding-top': '10px'}),
		'right':  new Hash({'padding-right': '5px'}),
		'bottom': new Hash({'padding-bottom': '10px'}),
		'left':   new Hash({'padding-left': '15px'}),
		'codeStyles': new Hash({
			'font-size': '12px',
			'color': '#f8f8f8'
		})
	}),
	
	initialize: function(lighter, fuel) {this.parent(lighter, fuel);}
	
});