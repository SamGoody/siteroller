var dwCheckboxes = new Class({
	//implements
	Implements: [Options],

	//options
	options: {
		elements: 'input[type=checkbox]',	//checkboxes to use
		mode: 'toggle'								//toggle|check|uncheck
	},
			
	//initialization
	initialize: function(options) {
		//set options
		this.setOptions(options);
		//prevent drag start in IE
		document.ondragstart = function () { return false; }
		//ensure that the elements are a Element
		this.options.elements = $$(this.options.elements);
		//manage the checkbox actions
		this.manage();
	},
			
	//a method that does whatever should be done
	manage: function() {
		var active = 0;
		this.options.elements.each(function(el) {
			el.addEvents({
				'mousedown': function(e) {
					e.stop();
					active = 1;
					el.checked = !el.checked;
    			},
				'mouseenter': function(e) {
					if(active === 1) {
						el.checked = ('toggle' == this.options.mode ? !el.checked : 'check' == this.options.mode);
					}
				}.bind(this),
				'click': function(e) {
					el.checked = !el.checked;
					active = 0; 
				}
			});
		}.bind(this));
		window.addEvent('mouseup',function() { active = 0; });
	}
});

//when the DOM is ready to go
window.addEvent('domready',function() {
	var togglers = new dwCheckboxes({ elements: $$('.toggle'), mode: 'toggle' });
	var checked = new dwCheckboxes({ elements: $$('.checked'), mode: 'check' });
	var unchecked = new dwCheckboxes({ elements: $$('.unchecked'), mode: 'uncheck' });

	$('ucuc').addEvent('click', function() {
		if($('ucuc').get('rel') == 'yes')
		{
			do_check = false;
			$('ucuc').set('src','../moorte/images/uncheck.jpg').set('rel','no');
		}
		else
		{
			do_check = true;
			$('ucuc').set('src','../moorte/images/check.jpg').set('rel','yes');
		}
		$$('.check-me').each(function(el) { el.checked = do_check; });
	});

	//add table shading
	$$('table.list-table tr').each(function(el,i) {
				
		//do regular shading
		var _class = i % 2 ? 'even' : 'odd'; el.addClass(_class);
				
		//do mouseover
		el.addEvent('mouseenter',function() { if(!el.hasClass('highlight')) { el.addClass('mo').removeClass(_class); } });
				
		//do mouseout
		el.addEvent('mouseleave',function() { if(!el.hasClass('highlight')) { el.removeClass('mo').addClass(_class); } });
				
		//do click
		el.addEvent('click',function() {
			//click off
			if(el.hasClass('highlight'))
			{
				el.removeClass('highlight').addClass(_class);
			}
			//clock on
			else
			{
				el.removeClass(_class).removeClass('mo').addClass('highlight');
			}
		});
				
		//highlight
		if(el.getProperty('alt') != null &&  el.getProperty('alt') == '')
		{
			el.removeClass(_class).addClass('highlight');
		}
	});
});