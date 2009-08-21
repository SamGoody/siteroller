	'test'         :{onClick:function(){console.log(arguments)}, args:this},
	'l0'           :{'text':'enter the url', element:'span' },
	'l1'           :{'type':'text',  'onClick':MooRTE.Utilities.storeRange }, 
	'l2'           :{'type':'submit', events:{'mousedown':function(e){e.stopPropagation();}, 'onClick':function(e){ MooRTE.Utilities.setRange(); MooRTE.Utilities.exec('createlink',this.getPrevious().get('value')); e.stop()}}, 'value':'add link' },
	'nolink'       :{'text':'please select the text to be made into a link'},
	'unlink'       :{img:'6'},
	'remoteURL'    :{onClick:['imgSelect','imgInput','insertimage']},
	'imgSelect'    :{element:'span', text:'URL of image' },
	'imgInput'     :{type:'text' },
	'insertimage'  :{onClick:function(args, classRef){ 
						classRef.exec([this.getParent().getElement('input[type=text]').get('text')]) 
					}},
	'save'         :{ img:'11', src:'$root/moorte/plugins/save/saveFile.php', onClick:function(){
						var content = $H({ 'page': window.location.pathname });
						this.getParent('.MooRTE').retrieve('fields').each(function(el){
							content['content_'+(el.get('id')||'')] = MooRTE.Utilities.clean(el);
						});
						new Request({url:MooRTE.Elements.save.src}).send(content.toQueryString());
					}},
	'Html/Text'    :{ img:'26', onClick:['DisplayHTML']}, 
	'DisplayHTML'  :{ element:'textarea', 'class':'displayHtml', unselectable:'off', init:function(){ 
						var el=this.getParent('.MooRTE').retrieve('fields'), p = el.getParent(); 
						var size = (p.hasClass('rteTextArea') ? p : el).getSize(); 
						this.set({'styles':{width:size.x, height:size.y}, 'text':el.innerHTML.trim()})
					}},
	'colorpicker'  :{ 'element':'img', 'src':'images/colorPicker.jpg', 'class':'colorPicker', onClick:function(){
						//c[i] = ((hue - brightness) * saturation + brightness) * 255;  hue=angle of ColorWheel.  saturation =percent of radius, brightness = scrollWheel.
						var c, radius = this.getSize().x/2, x = mouse.x - radius, y = mouse.y - radius, brightness = hue.y / hue.getSize().y, hue = Math.atan2(x,y)/Math.PI * 3 - 2, saturation = Math.sqrt(x*x+y*y) / radius;
						for(i=0;i<3;i++) c[i] = ((((h=Math.abs(++hue)) < 1 ? 1 : h > 2 ? 0 : -(h-2)) - brightness) * saturation + brightness) * 255;  
						c[1] = -(c[2] - 255*saturation);
						var hex = c.rgbToHex();
					}},
	'fuUploadBar'  :{ title:'Upload Image', img:15, onClick:'Toolbar:[fuBrowse,fuUpload,fuClear,fuStatus,fuList]'},
	'fuBrowse'     :{ id:"fuBrowse", element:'span', text:'Browse Files', title:''},
	'fuUpload'     :{ id:"fuUpload", onClick:'', element:'span', text:'Upload Files', title:''},
	'fuClear'      :{ id:"fuClear", element:'span', text:'Clear List' ,title:''},	
	'fuStatus'     :{ element:'span', id:'fuStatus', contains:'[fu1,fu2,fu3,fu4,fu5]'},
	'fu1'          :{ element:'strong', 'class':'overall-title'},
	'fu2'          :{ element:'strong', 'class':'current-title'},
	'fu3'          :{ element:'div',    'class':'current-text' },
	'fu4'          :{ element:'img',    'class':'progress overall-progress', src:'moorte/plugins/fancyUpload/assets/progress-bar/bar.gif' },
	'fu5'          :{ element:'img',    'class':'progress current-progress', src:'moorte/plugins/fancyUpload/assets/progress-bar/bar.gif' },
	'fuList'       :{ id:'fuList', style:'display:none', onInit:function(){
						var path = new URI($$('script[src*=moorte.js]')[0].get('src')).get('directory')+'plugins/fancyUpload/fancyUpload';
						Asset.javascript(path+'.js');
						Asset.css(path+'.css');
					}},
	'fuPhotoUpload':{ id:'demo-photoupload', element:'input', type:'file', name:'photoupload' },
	'loading..'    :{ 'class':'rteLoading', 	element:'span', text:'loading...',title:''},
	//'popupURL'     :{ img:'8', onClick:MooRTE.Utilities.popupURL },
	'popupURL'     :{ img:'8', onLoad:['assetLoader', 'Popup','plugins/Popup/','Popup.js','Popup.css'], onClick:function(){
							MooRTE.Utilities.storeRange();
							var pop = $('pop');
							if(pop) pop.removeClass('popHide');
							else{
								var html = "<span>Text of Link:</span><input type='text' id='popTXT'/><br/>\
									<span>Link to:</span><input type='text' id='popURL'/><br/>\
									<div class='radio'> <input type='radio' name='pURL' value='web' checked/>Web<input type='radio' name='pURL' value='email'/>Email</div>\
									<div class='btns'><input id='purlOK' type='submit' value='OK'/><input id='purlCancel' type='submit' value='Cancel'/></div>";
								
								pop = new Popup('popupURL', html, 'Edit Link');
								pop.getElement('#purlOK').addEvent('click', function(e){
									MooRTE.Utilities.setRange();		//MooRTE.activeBar.retrieve('ranges').set();
									var value = pop.getElementById('popURL').get('value');
									MooRTE.Utilities.exec(value ? 'createlink' : 'unlink', value); 
									$('pop').addClass('popHide'); e.stop();
									e.stop(); 
								})
								pop.getElement('#purlCancel').addEvent('click', function(e){
									$('pop').addClass('popHide'); e.stop();
								})
							}
							$('popTXT').set('value',MooRTE.ranges.a1);
						} 
					},
	
	//untested:
	'decreasefontsize':{img:'29'},
	'increasefontsize':{img:'29'},
	'inserthorizontalrule':{img:'30'},
	'removeformat' :{img:'26', title:'Clear Formatting'},
	'selectall'    :{img:'27', title:'Select All (Ctrl + A)'},
	
	//unused:
	'Defaults'     :{onLoad:{Toolbar:['Main','File','Link','Lists','Indents','|','Html/Text','fuUploadBar']}},	//group - defaults
	'JustifyBar'   :{img:'18', onClick:'Flyout:[justifyleft,justifycenter,justifyright,justifyfull]' },
	'l2old'        :{'type':'submit', 'onClick':function(){ MooRTE.Utilities.setRange(); MooRTE.Utilities.exec('createlink',this.getPrevious().get('value'))}, 'value':'add link' },
	'popup'        :{onClick:['popup',"<span>Username:</span><input type='text' name='user' class='validate-alphanum'/><br/><span>Password:</span><input type='password' name='pass'\
						class='validate-alphanum'/><div id='rem'><input type='checkbox'/>Remember me!</div><div id='log'><input type='submit' value='log in'/></div>"]}
	});