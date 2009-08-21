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

window.addEvent('domready',function() {
	var togglers = new dwCheckboxes({ elements: $$('.toggle'), mode: 'toggle' });
	var checked = new dwCheckboxes({ elements: $$('.checked'), mode: 'check' });
	var unchecked = new dwCheckboxes({ elements: $$('.unchecked'), mode: 'uncheck' });

	$('chkbx').addEvent('click', function() {
		if($('chkbx').get('rel') == 'yes')
		{
			do_check = false;
			$('chkbx').set('src','../moorte/images/uncheck.jpg').set('rel','no');
		}
		else
		{
			do_check = true;
			$('chkbx').set('src','../moorte/images/check.jpg').set('rel','yes');
		}
		$$('.check-me').each(function(el) { el.checked = do_check; });
	});

	// If checkbox is ticked, activate the index fields to allow real-time modification.
	//var chkme = $('bold');
	//if( chkme.checked ) {
	//	$$('.odd').toggleClass('bg');
	//}

	// If checkbox is ticked, activate the index fields to allow real-time modification.
	//var odd = $$('.odd');
    //chkme.addEvent('click', function() {
	//	odd.toggleClass('bg');
    //});
});