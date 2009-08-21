/**
 * Script:
 *   Flame.git.js - Git-like Theme for Lighter.js
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
 *   GitHub.com's style [GitHub](http://github.com/).
 * 
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 * 
 */
Flame.git = new Class({
	
	Extends: Flame,
	shortName: 'git',
	
	styles: new Hash({
		de1: new Hash({'color': '#CF6A4C'}), // Beginning delimiter
		de2: new Hash({'color': '#CF6A4C'}), // End delimiter
		kw1: new Hash({'color': '#000', 'font-weight': 'bold'}), // Keywords 1
		kw2: new Hash({'color': '#0086b3'}), // Keywords 2
		kw3: new Hash({'color': '#445588', 'font-weight': 'bold'}), // Keywords 3
		kw4: new Hash({'color': '#990073'}), // Keywords 4
		co1: new Hash({'color': '#999988', 'font-style': 'italic'}), // Comments 1
		co2: new Hash({'color': '#999988', 'font-style': 'italic'}), // Comments 2
		st0: new Hash({'color': '#dd1144'}), // Strings 1
		st1: new Hash({'color': '#dd1144'}), // Strings 2
		st2: new Hash({'color': '#dd1144'}), // Strings 3
		nu0: new Hash({'color': '#009999'}), // Numbers
		me0: new Hash({'color': '#0086b3'}), // Methods and Functions
		br0: new Hash({'color': '#777'}), // Brackets
		sy0: new Hash({'color': '#777'}), // Symbols
		es0: new Hash({'color': '#777'}), // Escape characters
		re0: new Hash({'color': '#009926'})  // Regular Expressions
	}),
	common: new Hash({
		'border-bottom': '1px solid #eee',
		'border-top': '1px solid #eee',
		'color': '#939393',
		'font-family': 'Courier, monospace',
		'line-height': '1.6em'
	}),
	layout: new Hash({
		'numColor':  new Hash({'background-color': "#f2f2f2"}),
		'lineColor': new Hash({'background-color': '#fff'}),
		'numStyles': new Hash({
			'color': '#aaa',
			'font-size': '10px'
		}),
		'lineStyles': new Hash({
			'border-left': '1px solid #939393'
		}),
		'alt':    new Hash({'background-color': '#ffffcc'}),
		'top':    new Hash({'padding-top': '10px'}),
		'right':  new Hash({'padding-right': '5px'}),
		'bottom': new Hash({'padding-bottom': '10px'}),
		'left':   new Hash({'padding-left': '15px'}),
		'codeStyles': new Hash({
			'font-size': '12px',
			'color': '#000'
		})
	}),
	
	initialize: function(lighter, fuel) {this.parent(lighter, fuel);}
	
});
