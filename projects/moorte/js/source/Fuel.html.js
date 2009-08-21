/**
 * Script:
 *   Fuel.html.js - HTML language file for Lighter.js
 *
 * License:
 *   MIT-style license.
 * 
 * Author:
 *   Jos� Prado
 *
 * Copyright:
 *   Copyright (�) 2009 [Jose Prado](http://pradador.com/).
 *
 * Changelog:
 * 2009/03/21 (1.0.0)
 *   - Initial Release
 *
 * Known Issues:
 *   - Uses Lazy match to keep from matching attribute like pieces in non-markup.
 * 
 */
Fuel.html = new Class ({
	
	Extends: Fuel,
	language: 'html',
	
	initialize: function(lighter, flame, options) {
	
		// Ensure Fuel uses lazy match.
		options.matchType = "lazy";
		
		// Common HTML patterns
		this.patterns = new Hash({
			'comments':    {pattern: /(?:\&lt;|<)!--[\s\S]*?--(?:\&gt;|>)/gim,          alias: 'co1'},
			'cdata':       {pattern: /(?:\&lt;|<)!\[CDATA\[[\s\S]*?\]\](?:\&gt;|>)/gim, alias: 'st1'},
			'closingTags': {pattern: /(?:\&lt;|<)\/[A-Z][A-Z0-9]*?(?:\&gt;|>)/gi,       alias: 'kw1'},
			'doctype':     {pattern: /(?:\&lt;|<)!DOCTYPE[\s\S]+?(?:\&gt;|>)/gim,       alias: 'st2'}
		});
		
		// Tags + attributes matching and preprocessing.
		var tagPattern = /((?:\&lt;|<)[A-Z][A-Z0-9]*)(.*?)(\/?(?:\&gt;|>))/gi,
		    attPattern = /\b([\w-]+)([ \t]*)(=)([ \t]*)(['"][^'"]+['"]|[^'" \t]+)/gi,
		    matches    = [],
		    match      = null,
		    attMatch   = null,
		    index      = 0;
		    
		// Create array of matches containing opening tags, attributes, values, and separators.
		while ((match = tagPattern.exec(lighter.code)) != null) {
			matches.push(new Wick(match[1], 'kw1', match.index));
			while((attMatch = attPattern.exec(match[2])) != null) {
				index = match.index + match[1].length + attMatch.index;
				matches.push(new Wick(attMatch[1], 'kw2', index)); // Attributes
				index += attMatch[1].length + attMatch[2].length;
				matches.push(new Wick(attMatch[3], 'kw1', index)); // Separators (=)
				index += attMatch[3].length + attMatch[4].length;
				matches.push(new Wick(attMatch[5], 'kw3', index)); // Values
			}
			matches.push(new Wick(match[3], 'kw1', match.index + match[1].length + match[2].length));
		}
		
		this.parent(lighter, flame, options, matches);
	}
	
});