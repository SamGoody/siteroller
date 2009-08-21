window.addEvent('domready',init);

function init(){
	var collectionCount = 0, flag=false;
	
	var sb = new Sortables('collection0', {
		clone:true,
		revert: true,
		onStart: function(el) { 
			el.swapClass('moving','dropped');
		},
		onComplete: function(el) {
			el.swapClass('dropped','moving');
			el.getSiblings('.blank')[0].inject(el.getParent());
		}
	});
	
	$$('#elements input').each( function(el){
		var selection = function(el2){
			if(el.get('checked')){			
				var e = new Element('li', {id:'btn'+el.get('num'),styles:{'background-position':'0 '+(-20*el.get('num'))+'px' }});
				$('collection'+ collectionCount).adopt(e);
				sb.addItems(e);
				e.getSiblings('.blank')[0].inject(e.getParent());
			} else $('btn'+el.get('num')).dispose();
		}
		el.addEvent('click', selection);
		if(el.get('checked'))selection();
	});
	
	groupNum=1;
	$('add').addEvent('click', function(e){
		e.stop();
		$$('.MooRTE')[0].clone().inject($('collections')).getElement('.collection').set('id','collection'+ ++collectionCount);
		sb.addLists($('collection'+ collectionCount));
		new Element('input',{name:'group['+groupNum+']', value:'tab' + groupNum++}).inject($('menuLabels'));
	})	
	
	$('skin').set('value', 'Word03').addEvent('change', function(){
		
		var ac = ['Word03','rteGrey','Tango'];
		var cols = $('collections'), newClass = this.get('value'), oldClass = $$('.MooRTE')[0].getFirst().get('class');
		
		cols.removeClass('c'+ac.indexOf(oldClass)).addClass('c'+ac.indexOf(newClass)).getElements('div.'+oldClass).each(function(el){
			el.removeClass(oldClass).addClass(newClass);
		});
		
		//var Style = $$('head #defaultStyles')[0];
		//var newStyle = Style.get('html').split(oldClass).join(newClass);
		//Style.set('html', newStyle);
		
	})
	
	$('elements_form').addEvent('submit',function(event){
		//event.stop();
		//console.log('abcd');
		var cols = '';	//'5|';
		$$('#collections ul').each(function(el){
			var col = '';
			el.getElements('li').each(function(e){
				var c = (e.get('id')||'btn').split('btn')[1];
				col +=  c ? c + '|' : '';
			})
			cols += col ? col + '-' : '';
		});
		//alert(cols);
		//alert(cols.slice(0,-2));
		$('groups').set('value', cols.slice(0,-2));
		
	})
	
	$('elements_form').set('tween', {duration:2000});
	$$('#buildBtn, #buildDivider').addEvent('click', function(){	
		$('efHeight').setStyle('height',784);
		$('simpleDown').tween('height', 0);
		
		$('elements_form').tween('height', 800);
	})
	
	var ef =  new Fx.Tween('elements_form', {property: 'height', duration:1000});
	var efH = new Fx.Tween('elements_form', {property: 'height', duration:1000});
	var sd =  new Fx.Tween('elements_form', {property: 'height', duration:1000});

	$('clickDivider').addEvent('click', function(){	
		ef.start(0).chain( //Notice that "this" refers to the calling object (in this case, the myFx object).
			function(){ $('efHeight').setStyle('height',0);  $('simpleDown').tween('height', 275);}
		); 
	})
		
	function clearEmpty(){
		var them = $$('div.MooRTE');
		them.shift();
		var total = them.length - 1;
		them.each(function(el,i){
			//console.log(l, i,el, el.getElements('li'), el.getElements('li').length);
			if(total && el.getElements('li').length < 2){
				el.destroy();
				$('menuLabels').getLast().destroy();
				total--;
			}
		})
	}
	$('remove').addEvent('click',clearEmpty);
	$('order').addEvent('change',function(e){
		this.get('value')=='tabbed' ? $('menuLabels').removeClass('n') : $('menuLabels').addClass('n');
	})
};
