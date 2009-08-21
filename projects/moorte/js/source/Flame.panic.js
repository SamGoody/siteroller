/**
 * Script:
 *   Flame.panic.js - Coda-like Theme for Lighter.js
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
 *   Panic's Coda default style [Coda](http://panic.com/coda/).
 *
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 * 
 */
Flame.panic = new Class({
	
	Extends: Flame,
	shortName: 'panic',
	
	styles: new Hash({
		'keywords':   new Hash({'color': '#9F0050'}),
		'comments':   new Hash({'color': '#00721F', 'font-style': 'italic'}),
		'strings':    new Hash({'color': '#8A00FF'}),
		'functions':  new Hash({'color': '#00326C'}),
		'numbers':    new Hash({'color': '#1600FF'}),
		'regex':      new Hash({'color': '#8A00FF'})
	}),
	
	initialize: function(lighter, fuel) {this.parent(lighter, fuel);}
	
});
