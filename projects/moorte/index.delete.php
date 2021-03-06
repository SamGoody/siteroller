<!doctype html>
<html>

<head>
	<title>Mootools Rich Text Editor</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="author" content="SamGoody, Siteroller">
	<meta name="copyright" content="copyright 2009 www.siteroller.net">
	<meta name="description" content="MooRTE, a super lightweight and complete Rich Text Editor">
	<meta name="keywords" content="mootools,MooRTE,javascript,TinyMCE,javascript RTE framework,RTE,MooInline">
	<meta name="robots" content="all">
	
	<!--
		<script type="text/javascript" src="js/moo.122.js"></script>
		<script type="text/javascript" src="../../siteroller/classes/moorte/source/mooore.URI.js"></script>
		<script type="text/javascript" src="../../siteroller/classes/loader/loader.js"></script>
	-->
	<link href="l2.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel='stylesheet' href="../../siteroller/classes/moorte/source/moorte.css"/>
	
	<script src='http://ajax.googleapis.com/ajax/libs/mootools/1.2.3/mootools-yui-compressed.js'></script>
	<script type="text/javascript" src="../../siteroller/classes/jslibs/moore.1231.js"></script>
	<script type="text/javascript" src="../../siteroller/classes/moorte/source/moorte.js"></script>
	
	<link type="text/css" rel="stylesheet" href="js/syntaxhighlighter/styles/shCore.css" />
	<link type="text/css" rel="stylesheet" href="js/syntaxhighlighter/styles/shThemeDefault.css" />
	<script type="text/javascript" src="js/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="js/syntaxhighlighter/scripts/shBrushXml.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.all();
	</script>
</head>
<body>
	<div id="stage">
		<div id="header">
			<div id="TRcorner"></div>
			<div id="headMenu">
				<div id="logo" style="font:11pt 'Comic Sans MS';">
					<strong style="font:bold 14pt Georgia;">Siteroller:</strong> 
					Websites made <em>really</em> easy!!
				</div>
				
				<span style="width:445px; position:relative; height:30px; vertical-align:bottom; line-height:10px; padding-top:20px;">
					<img src="images/MenuTab.gif" id="menuBG" style="right:232px;" />
					<a href="#">Home</a><a href="#">All Projects</a><a href="index.htm" class="selected">MooRTE</a><a href="download.php">Download</a><a href="faq.htm">FAQ</a><a href="contact.html">Contact</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px;">
				<img src="images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
				<!--
				<img src="images/bg_header.jpg" style="margin-left:8px"/><hr style="text-align:left; !position:absolute;" class="headDivider"></hr>
				-->
			</div>
		</div>
		
		<div id="body" style="border-top:solid 1px #DFD7CB;">
			
			<div id="CmdMenu">
				<h4>MooRTE Docs</h4>
				<a href="MoorteDocs.htm">MooRTE</a>
				<a href="ElementsDocs.htm">MooRTE.Elements</a>
				<a href="StorageDocs.htm">MooRTE Storage</a>
				<a href="#" xhref="UtilitiesDocs.htm" title="coming soon">MooRTE.Utilities</a>
			</div>
			
			<div id="main" class="main2">
				<h1>MooRTE: <span style="font:18px Arial">(v0.5b)</span> The Mootools Rich Text Editor!  </h1>
				<p>The TinyMCE replacement that is tinier, more flexible, and just plain awesome...<br/> Classic Moo!</p>

				<ul>
					<li><b>Tiny</b> - Under 16KB compressed & gzipped, under 500 lines.</li>
					<li><b>Customisable</b> - Each instance can have its own layout and buttons.</li> 
					<li><b>Multiple Toolbars</b> - One bar for all, or all for one...</li>
					<li><b>Floating, fixed or inline</b> - Should the editor be in the page-flow, or above it?</li>
					<li><b>Skinnable</b> - comes with a few ugly themes, add your own.</li>
					<li><b>Flexible</b> - easily extended to include any button or element you can dream of.</li>
					<li><b>No i-frames!</b> - Smaller, cleaner, trendsetting.  Loads of benfeits..</li>
					<li><b>Inline editor</b> - Natively handles true inline editing</li>
					<li><b>Modular</b> - In true Moo fashion, get your custom build, and shed the extra 2KB</li>
					<li><b>More</b> - But your getting impatient.  Keep your eyes open, there's more all around...</li>
				</ul>
				<p>Ready?</p>
				<p style="text-align:center"><a href="download.php" style="width:186px; height:93px; display:inline-block; background-image:url('images/cooltext424367947.png'); "></a></p>
				
				<p>Now for some examples, 'cause we all like action!  
					<br/> All demos have tabs on the side to see the code as it would appear on a webpage.
					<br/> Take a look at the docs (links on left bar) for the whole rundown.
				</p>
				
<!-- Example #1 -->		<p><br/><b>Example 1: Simple editor</b></p>
				<div style="position:relative; height:275px; width:100%">
					<img src="images/demo3.gif" style="position:absolute; left:-46px; top:0; cursor:pointer;" id="button_1a" class="buttons_1"/>
					<img src="images/code3.gif" style="position:absolute; left:-46px; top:90px; cursor:pointer;" id="button_1b" class="buttons_1"/>
					<img src="images/commented3.gif" style="position:absolute; left:-46px; top:180px; cursor:pointer;" id="button_1c" class="buttons_1"/>
					
	<!-- #1a -->	<div style="position:absolute; height:275px;" id="eg1a" class="eg1">
						<div id="eg1aEdit">
							<br/>
							<blockquote><b>
								While Mootools is a beloved friend,<br/>
								it is but a means unto an end,<br/>
								This spirit has been penned to verse,<br/>
								In Nash's style; useless but terse.<br/><br/>
								</b>
							</blockquote>
							<blockquote style="font-size:14px"><b>	
								<a href="http://www.westegg.com/nash/cow.html">The Cow:</a></br>
								The cow is of the bovine ilk;<br/>
								One end is <u>moo</u>, the other, milk. <br/>
								</b>
							</blockquote>
							<br/>
							&nbsp;&nbsp;I couldn't have said it better myself ;)
							<br/><br/>
						</div>
					</div>
					
	<!-- #1b -->			<div style="position:absolute; left:0; width:100%; overflow:scroll; height:275px;" id="eg1b" class="eg1 rteHide">
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;!doctype>
								&lt;html>
									&lt;head>
										&lt;title>Contact&lt;/title>
										&lt;link  href='moorte.css' rel='stylesheet'/>
										&lt;script src='http://bit.ly/mootools123'>&lt;/script>
										&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
										&lt;script src='moorte.js'>&lt;/script>
										&lt;script>
											window.addEvent('load',function(){
												// Am using a general build.  Custom builds only need: $('editor').moorte();
												$('editor').moorte({
													skin:'Tango',
													buttons:'div.Toolbar:[bold,italic,underline,strikethrough]'
												});
											})
										&lt;/script>
									&lt;/head>
									&lt;body>
										&lt;div id="editor">
											...One end is Moo, the other Milk!
										&lt;/div>
									&lt;/body>
								&lt;/html>
							</pre>
						</div>
					</div>
				
	<!-- #1c -->			<div style="position:absolute; left:0; width:100%; overflow:scroll; height:275px;" id="eg1c" class="eg1 rteHide">
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;!-- Mootools requires a doctype - any doctype: -->
								&lt;!doctype>
								
								&lt;html>
									&lt;head>
									&lt;title>Contact&lt;/title>
									
									&lt;!-- Include the MooRTE stylesheet -->
									&lt;link  href='moorte.css' rel='stylesheet'/>
									
									&lt;!-- Include Mootools (this link, or download your own.) -->
									&lt;script src='http://bit.ly/mootools123'>&lt;/script>
		
									&lt;!-- Include Mootools More (We hope to have this automatic soon.) -->
									&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
									
									&lt;!-- Include MooRTE -->
									&lt;script src='moorte.js'>&lt;/script>
									
									&lt;script>
									
										//Wait for the page to load before trying to convert any of its elements. 
										window.addEvent('load',function(){
										
											// Am using a general build.  Custom builds only need: $('editor').moorte();
											
											//apply the editor to the element with the id of 'editor'
											$('editor').moorte({
												
												// We want the "Tango" skin.  This works by adding said class to the RTE.  If we want to apply custom classes, we can apply them here as well.
												skin:'Tango',
												
												// Any string of elements can be passed in, including your own custom ones.  See http://siteroller.net/projects/moorte/faq.php#customButtons
												buttons:'div.Toolbar:[bold,italic,underline,strikethrough]'
											});
										})
									&lt;/script>
									&lt;/head>
									&lt;body>
										
										&lt;!-- There needs to be an element with the name you used. ;) -->
										&lt;div id="editor">
											...One end is Moo, the other Milk!
										&lt;/div>
									&lt;/body>
								&lt;/html>
								
								&lt;!-- all done! -->
							</pre>
						</div>
					</div>		
				</div>
				<script>
					$('eg1aEdit').moorte({skin:'Tango',buttons:'div.Toolbar:[bold,italic,underline,strikethrough]'});
					$$('.buttons_1').addEvent('click', function(el){ $$('.eg1').addClass('rteHide');  var l = this.get('id').slice(-2); $('eg'+l).removeClass('rteHide'); });
					MooRTE.pluginpath = "../../siteroller/classes/";
				</script>
				
<!-- Example #2 -->	<p><br/><br/>Not enough buttons?</p> 
				<p><b>Example 2: Advanced tabbed editor</b></p>
				<p>
					Here's the full blown setup with all the buttons currently available to the public (a whole bunch more are bubbling up at Wonka's place as we speak):
					<br/> Look at that tabbed interface and tell me that your not jealous ;) &nbsp; &nbsp; [Luckily its free..] 
				</p>
				<div style="position:relative; height:275px; ">
					<img src="images/demo3.gif" style="position:absolute; left:-46px; top:0; cursor:pointer;" id="button_2a" class="buttons_2"/>
					<img src="images/code3.gif" style="position:absolute; left:-46px; top:90px; cursor:pointer;" id="button_2b" class="buttons_2"/>
					<img src="images/commented3.gif" style="position:absolute; left:-46px; top:180px; cursor:pointer;" id="button_2c" class="buttons_2"/>

	<!-- #2a -->	<div style="xposition:absolute; left:0;" id="eg2a" class="eg2">
						<div id="largeEditor" style="padding:20px;">
							Dear Sirs, <br/><br/>
							I just wanted to point out that your article on Python incorrectly states the number of extensions the language actually has.<br/>
							I quote here from an authoratative study on the subject by Ogden Nash:<br/>
							<blockquote><b>
								The python has, and I fib no fibs;<br/>
								318 pairs of ribs.</br>
								In stating this, I place reliance;<br/>
								On a seance with one who died for science.<br/>
								This figure is sworn to, and attested;<br/>
								He counted them while being digested.<br/>
							</b></blockquote>
							Please see to it that the matter is corrected.
						</div>
					</div>
					
	<!-- #2b -->	<div style="position:absolute; left:0; width:100%; overflow:scroll; height:275px;" id="eg2b" class="eg2  rteHide">					
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;!doctype>
								&lt;html>
									&lt;head>
										&lt;title>Contact&lt;/title>
										&lt;link  href='moorte.css' rel='stylesheet'/>
										&lt;script src='http://bit.ly/mootools123'>&lt;/script>
										&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
										&lt;script src='moorte.js'>&lt;/script>
										&lt;script>
											window.addEvent('load',function(){
												// Custom builds only need $('editor').moorte();
												$('editor').moorte({buttons:'div.Menu:[Main,Insert,File]'});
											})
										&lt;/script>
									&lt;/head>
									&lt;body>
										&lt;div id="editor">
											...One end is Moo, the other Milk!
										&lt;/div>
									&lt;/body>
								&lt;/html>
							</pre>
						</div>
					</div>
					
	<!-- #2c -->			<div style="position:absolute; left:0; width:100%; overflow:scroll; height:275px;" id="eg2c" class="eg2  rteHide">
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;!-- Mootools requires a doctype - any doctype: -->
								&lt;!doctype>
								
								&lt;html>
									&lt;head>
									&lt;title>Contact&lt;/title>
									
									&lt;!-- Include the MooRTE stylesheet -->
									&lt;link  href='moorte.css' rel='stylesheet'/>
									
									&lt;!-- Include Mootools (this link, or download your own.) -->
									&lt;script src='http://bit.ly/mootools123'>&lt;/script>
		
									&lt;!-- Include Mootools More (We hope to have this automatic soon.) -->
									&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
									
									&lt;!-- Include MooRTE -->
									&lt;script src='moorte.js'>&lt;/script>
									
									&lt;script>
									
										//Wait for the page to load before trying to convert any of its elements. 
										window.addEvent('load',function(){
										
											// Am using a general build.  Custom builds only need: $('editor').moorte();
											
											//apply the editor to the element with the id of 'editor'
											$('editor').moorte({
												
												//Any string of elements can be passed in, including your own custom ones.  
												//See http://siteroller.net/projects/moorte/faq.php#customButtons
												//Groups (tabs) such as 'Main' can be built or created at runtime.
												buttons:'div.Menu:[Main,Insert,File]'
											});
										})
									&lt;/script>
									&lt;/head>
									&lt;body>
										
										&lt;!-- There needs to be an element with the name you used. ;) -->
										&lt;div id="editor">
											...One end is Moo, the other Milk!
										&lt;/div>
									&lt;/body>
								&lt;/html>
								
								&lt;!-- all done! -->
							</pre>
						</div>
					</div>		
				</div>
				
				<p>
					All defaults are set for you through the builder, though you can overide them at any time.
				</p>
				<br/><br/>
				<script>
					//$('smallEditor').moorte({skin:'fam',buttons:'div.Toolbar:bold,italic,underline,strikethrough'});
					$('largeEditor').moorte({buttons:'div.Menu:[Main,Insert,File]'});
					$$('.buttons_2').addEvent('click', function(el){ $$('.eg2').addClass('rteHide'); var l = this.get('id').slice(-2); $('eg'+l).removeClass('rteHide'); });
				</script>
				
<!-- Example #3 -->	<p><b>Example 3: Inline Editing (Go ahead, click!).  Grey skin, floating RTE</b></p>
				<p>The two elements below, when selected, will get a RTE above them.<br/>
					The RTE is floating and does not affect the DOM.
				</P>
				
				<div style="position:relative; height:275px; ">
					<img src="images/demo3.gif" style="position:absolute; left:-46px; top:0; cursor:pointer;" id="button_3a" class="buttons_3"/>
					<img src="images/code3.gif" style="position:absolute; left:-46px; top:90px; cursor:pointer;" id="button_3b" class="buttons_3"/>
					<img src="images/commented3.gif" style="position:absolute; left:-46px; top:180px; cursor:pointer;" id="button_3c" class="buttons_3"/>
				
	<!-- #3a -->			<div style="xposition:absolute; left:0; height:275px; overflow:auto" id="eg3a" class="eg3">
						<div class="editable">
							Twas the Night Before Implementation, and all through the house, not a program was working, not even a browse.<br/>
							The programmers hung by their tubes in despair, with hopes that a miracle soon would be there.<br/>
							The users were nestled all snug in their beds, while visions of enhancements danced in their heads.<br/>
							When out of the elevator arose such a clatter, I sprang from my desk to see what was the matter.<br/>
							And what to my wandering eyes should appear but a super programmer (with a six pack of beer).<br/>
							His resume glowed with experience so rare, he turned out great code with a bit pushers flair.<br/>
							More rapid than engines, his programs they came, and he whistled and shouted and called them by name:<br/>
							"On Update! On Add! On Inquiry! On Delete! On Batch Job! On Closing! On Functions Complete!"
						</div><br/>
						<div class="editable">
							His eyes were glazed over, fingers nimble and lean, from weekends and nights spent in front of a screen.
							A wink of his eye and a twist of his head soon gave me to know that I had nothing to dread.
							He spoke not a word, but went straight to his work,	turning specs into code, then turned with a jerk,
							and laying his finger upon the "enter" key, the system came up and worked perfectly.
							The updates updated, the deletes they deleted, the inquires inquired and the closings completed.
							He tested each program and tested each call, with nary an UAE, all had gone well.
							The system was finished, the tests were concluded, the users last changes were even included.
							And the user exclaimed with a snarl and a taunt, "Its just what I asked for, BUT ITS NOT WHAT I WANT!" 
						</div>
					</div>
					
	<!-- #3b -->			<div style="position:absolute; top:0; height:275px; overflow:scroll" id="eg3b" class="eg3 rteHide">
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;html>
									&lt;head>
										&lt;title>Bottom of page&lt;/title>
										&lt;link  href='moorte.css' rel='stylesheet'/>
										&lt;script src='http://bit.ly/mootools123'>&lt;/script>
										&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
										&lt;script src='moorte.js'>&lt;/script>
										&lt;script>
											window.addEvent('load',function(){
												new MooRTE({elements:'.editable', location:'inline', floating:true, skin:'rteGrey'});
											})
										&lt;/script>
									&lt;/head>
									&lt;body>
										&lt;div class="editable">
											This text is editable!
										&lt;/div>
										&lt;div class="editable">
											This text is editable!
										&lt;/div>
									&lt;/body>
								&lt;/html>
							</pre>
						</div>
					</div>
					
	<!-- #3c -->			<div style="position:absolute; top:0; height:275px; overflow:scroll" id="eg3c" class="eg3 rteHide">
						<div style="width:100%; overflow:hidden">
							<pre id="jsCode" class="brush:js; html-script:true;">
								&lt;html>
									&lt;head>
										&lt;title>Contact&lt;/title>
										// Include the MooRTE stylesheet
										&lt;link  href='moorte.css' rel='stylesheet'/>
										// Include Mootools
										&lt;script src='mootools.122.js'>&lt;/script>
										// Include MooRTE
										&lt;script src='moorte.js'>&lt;/script>
										&lt;script>
											// The element has not yet defined. This delays the call till the page has loaded.
											window.addEvent('load',function(){
												// Create a new MooRTE class.  The options chosen say:
												new MooRTE({
													// elements:'.editable' - all elements that have the class of 'editable' should be.
													elements:'.editable',
													// location:'inline' - When selected, the RTE should hover above the element.
													location:'inline',
													// floating:true - The RTE should not be part of the DOM.
													floating:true,
													// skin:'rteGrey' - The skin should be the ugly grey one.
													skin:'rteGrey'
												});
											})
										&lt;/script>
									&lt;/head>
									&lt;body>
										// One editable element
										&lt;div class="editable">
											This text is editable!
										&lt;/div>
										// Another editable element
										&lt;div class="editable">
											This text is editable!
										&lt;/div>
									&lt;/body>
								&lt;/html>
							</pre>
						</div>
					</div>
					
					<!--
						The above example did the following steps:
						<ol>
							<li>(Line 4) </li>
							<li>(Line 5) </li>
							<li>(Line 6) Include Mootools -more (if needed, depending on your build) </li>
							<li>(Line 7) </li>
							<li>Tell Javascript that after the page has completed setting itself up (the DOM is ready) it should add a Rich Text Editor to the page</li>
							<li>The passed in options specify that all elements with the class of editable should become editable when selected, and that the editor should be floating, inline, and with the Grey skin.</li>
							<li>If the MooRTE class was built in the download builder, these options would not need to be specified at runtime.</li>
							<li>Add two elements with a class of editable to the page.</li>
						</ol>
					
						<p> There are more options, and all of the above options can be combined to give you lots of flexibility.  Check out <a href="">the docs</a> for the whole deal!</p>
					-->
					
					
					
				</div>
				<script>
					//$('smallEditor').moorte({skin:'fam',buttons:'div.Toolbar:bold,italic,underline,strikethrough'});
						// 
					$$('.buttons_3').addEvent('click', function(el){ $$('.eg3').addClass('rteHide'); var l = this.get('id').slice(-2); $('eg'+l).removeClass('rteHide'); });
				</script>
					
<!-- Example #4 -->	<p><b>Example 4: Using the toolbar for more than one element</b></p>
				<p>Webpage (iFrame) with one toolbar on the BOTTOM, that controls multiple elements. 
				<br/>Only some of the elements have been extended.</p>
				<div style="position:relative; height:500px; border:3px inset">
					<img src="images/demo3.gif" style="position:absolute; left:-46px; top:0; cursor:pointer;" id="button_4a" class="buttons_4"/>
					<img src="images/code3.gif" style="position:absolute; left:-46px; top:90px; cursor:pointer;" id="button_4b" class="buttons_4"/>
					<img src="images/commented3.gif" style="position:absolute; left:-46px; top:180px; cursor:pointer;"id="button_4c" class="buttons_4"/>
				
					<iframe src ="iframedemo.htm" width="100%" height="500px; padding:20px;" id="eg4a" class="eg4">
		<!-- #4a -->			<div style="position:absolute; left:0; width:100%; height:500px;padding:20px;" id="eg4a_2" class="eg4_2">
							<div class="editable">
								The name FORTRAN itself means: 
								<blockquote>
									a) FORmula TRANslation <br/>
									b) FORTy RANdom features in one language  <br/>
									c) FORget your computer-science TRAiNing  <br/>
									d) FOR The Right ANswers  <br/>
									e) Fortran Only Resembles Text Remotely At Night  <br/>
									f) Nothing, it is one of those made-up marketing names like MUMPS
								</blockquote>
							</div>
							<br/>
							
							<img class="editable" src="images/random_number.png" alt="RFC 1149.5 specifies 4 as the standard IEEE-vetted random number."/>
							<br/>
							<p>
								The following Joke is NOT editable (sorry):<br/>
								Q: Why do programmers always mix up Halloween and Christmas?<br/>
								A: Because Oct 31 == Dec 25!
							</p>
							<p class="editable">
								But this one is:<br/>
								Q: how many programmers does it take to change a light bulb?<br/>
								A: none, that's a hardware problem
							</p>

							<!--
							<div>
								A man flying in a hot air balloon suddenly realizes he�s lost. He reduces height and spots a man down below. He lowers the balloon further and shouts to get directions, "Excuse me, can you tell me where I am?"<br/>
								The man below says: "Yes, you're in a hot air balloon, hovering 30 feet above this field."<br/>
								"You must work in Information Technology," says the balloonist.<br/>
								"I do" replies the man. "How did you know?"<br/>
								"Well," says the balloonist, "everything you have told me is technically correct, but It's of no use to anyone."<br/>
								The man below replies, "You must work in management."<br/>
								"I do" replies the balloonist, "But how'd you know?"<br/>
								"Well", says the man, "you don�t know where you are, or where you�re going, you expect me to be able to help. You�re in the same position you were before we met, but now it�s my fault."<br/>
							</div>
							-->
						</div>
					</iframe>
					
					<script>
							
							/*
							var washer = new IFrame({id:'washer', 'width':'100%', 'height':275}).inject($('eg4a')).contentWindow.document;
							washer.open();
							washer.write('<html><body id="washer">'+'</body></html>');
							washer.close();
							washer = $(washer.body);
							var poem = "The name FORTRAN itself means: <blockquote>\
								a) FORmula TRANslation <br/>\
								b) FORTy RANdom features in one language  <br/>\
								c) FORget your computer-science TRAiNing  <br/>\
								d) FOR The Right ANswers  <br/>\
								e) Fortran Only Resembles Text Remotely At Night  <br/>\
								f) Nothing, it is one of those made-up marketing names like MUMPS</blockquote>"

							var it = new Element('div', {'html':poem, 'id':'cukoo'}).inject(washer);
							washer.getElement('#cukoo').moorte({elements:'div'});
							*/
						</script>
					
					
	<!-- #4b -->			<div style="position:absolute; left:0; width:100%; height:500px;" id="eg4b" class="eg4 rteHide">
						<pre id="jsCode" class="brush:js; html-script:true;">
							&lt;!doctype>
							&lt;html>
								&lt;head>
									&lt;title>Contact</title>
									&lt;script src='http://bit.ly/mootools123'>&lt;/script>
									&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
									&lt;script src='moorte.js'>&lt;/script>
									&lt;link  href='moorte.css' rel='stylesheet'/>
									&lt;script>
										window.addEvent('load',function(){
											new MooRTE({elements:'.editable',location:'pageBottom'});
										})
									&lt;/script>
								&lt;/head>
								&lt;body>
									&lt;div class="editable">
										The name FORTRAN itself means: 
									&lt;/div>
									&lt;div class="editable">
										This text is editable!
									&lt;/div>
									&lt;div>
										This is not editable!
									&lt;/div>
								&lt;/body>
							&lt;/html>
						</pre>
					</div>
					
	<!-- #4c -->			<div style="position:absolute; left:0; width:100%; height:500px; overflow:scroll;" id="eg4c" class="eg4 rteHide">
						<pre id="jsCode" class="brush:js; html-script:true;">
							&lt;!-- Mootools requires a doctype -->
							&lt;!doctype>
							&lt;html>
								&lt;head>
									&lt;title>The Bottom&lt;/title>
									
									&lt;!-- Include the MooRTE stylesheet -->
									&lt;link  href='moorte.css' rel='stylesheet'/>
									
									&lt;!-- Include Mootools (this link, or download your own.) -->
									&lt;script src='http://bit.ly/mootools123'>&lt;/script>
		
									&lt;!-- Include Mootools More (We hope to have this automatic soon.) -->
									&lt;script src='mootools-1.2.3.1-more.js'>&lt;/script>
									
									&lt;!-- Include MooRTE -->
									&lt;script src='moorte.js'>&lt;/script>
									
									&lt;script>
										//Wait for the page to load before trying to convert any of its elements. 
										window.addEvent('load',function(){
										//Must be called generically , as it is being applied to multiple elements.
											new MooRTE({
												//will be applied to anything with an 'editable' class 
												elements:'.editable',
												//Will be position:fixed to the page bottom.
												location:'pageBottom'
											});
										})
									&lt;/script>
								&lt;/head>
								&lt;body>
									&lt;div class="editable">
										The name FORTRAN itself means: 
									&lt;/div>
									&lt;div class="editable">
										This text is editable!
									&lt;/div>
									&lt;!-- below has no 'editable' class -->
									&lt;div>
										This is not editable!
									&lt;/div>
								&lt;/body>
							&lt;/html>
						</pre>
					</div>
					
					<script>
						//$('smallEditor').moorte({skin:'fam',buttons:'div.Toolbar:bold,italic,underline,strikethrough'});
						//var a = new MooRTE({elements:'#eg4a *.editable',location:'pageTop',skin:'Word03 adjustRTE'});
						//$$('.adjustRTE')[0].getParent().removeClass('rtePageTop').inject($('eg4a')).setStyles({position:'absolute', bottom:0});
						$$('.buttons_4').addEvent('click', function(el){ $$('.eg4').addClass('rteHide'); var l = this.get('id').slice(-2); $('eg'+l).removeClass('rteHide'); });
						window.scroll(0,0)
					</script>
				</div>
				
				<p>
					Found a bug?  Log it on the GitHub issue Tracker!<br/>
					Wanna Join?  We need good programmers to help make this into what it could be!<br/>
				</p>
				
				
				<!--
				<ol><li>Include mootools.js, moorte.js & moorte.css in the head</li><li>Call element.moorte()</li></ol>
				<p>Here's the typical 'head':</p>
				<pre id="jsCode" class="brush:js">
					&lt;head>
						&lt;title>Contact&lt;/title>
						&lt;link  href='moorte.css' rel='stylesheet'/>
						&lt;script src='mootools.122.js'>&lt;/script>
						&lt;script src='moorte.js'>&lt;/script>
						&lt;script>
							window.event('load',function(){
								$('editor').moorte();
							})
						&lt;/script>
					&lt;/head>
				</pre>
				
				<p>The following examples highlight some of the options.  Click on "Code" to see the entire code to make such a webpage</p> 
				
				<pre id="jsCode" class="brush:js">
				// If you downloaded a customised class:
				$('smallEditor').moorte();
				
				// Otherwise:
				$('smallEditor').moorte({
				&nbsp;	skin:'Tango',
					buttons:'div.Toolbar:[bold,italic,underline,strikethrough]'
				}); </pre>
				
				<br/>
				
				<p>Ready to download?  <a href="">Here you go</a>.  Want the whole docs? <a href="">No Problem</a>.<br/>
				
				Want more examples in extrutiating detail?  Keep reading. </p> 
				
				-->
				<!--
				<p>In order to use this in a page, you must include Mootools version 1.2.2 (untested with lower).
				For some of the plugins, you will also need Mootools -more.  The links for those are available on the download page.</p>
				-->
				<!--
				<br/>
				<p><b>Example 1: Whole webpage with editor, using defaults</b></p>
				A webpage with only one element that will be converted into an editor, will look as follows (See it in action <a href="">here</a>):
				
				
				The explanation:
				<ol>
					<li>(Line 4) Include the MooRTE stylesheet</li>
					<li>(Line 5) Include Mootools</li>
					<li>(Line 6) Include Mootools -more (if needed, depending on your build) </li>
					<li>(Line 7) Include MooRTE</li>
					<li>(Line 8-12) Tell Javascript that after the page has completed setting itself up (the DOM is ready) it should convert the element to a Rich Text Editor</li>
					<li>(Line 15-17) On the webpage, add an element with the same name as declared above to be converted.</li>
				</ol>
				<br/><br/>
				
				A webpage with a toolbar across the top that can be used to modify either or both of the two chosen elements on the page:
				
				
				
				The above example did the following steps:
				<ol>
					<li>(Line 4) Include the MooRTE stylesheet</li>
					<li>(Line 5) Include Mootools</li>
					<li>(Line 6) Include Mootools -more (if needed, depending on your build) </li>
					<li>(Line 7) Include MooRTE</li>
					<li>Tell Javascript that after the page has completed setting itself up (the DOM is ready) it should add a Rich Text Editor to the page</li>
					<li>The passed in options specify that all elements with the class of editable should become editable, and that the editor should be on the top of the webpage.</li>
					<li>If the MooRTE class was built in the download builder, these options would not need to be specified at runtime.</li>
					<li>Add two elements with a class of editable to the page.</li>
				</ol>
				<br/><br/>
				-->
				
			</div>
			
			<?php  
				$gu_siteid="bn2ahxv";
				$gu_param = "st=".$gu_siteid."&ref=".urlencode($_SERVER['HTTP_REFERER'])."&vip=".$_SERVER['REMOTE_ADDR']."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&cur=".urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&b=2";
				@readfile("http://counter.goingup.com/phptrack.php?".$gu_param); 
			?>
		</div>
	</div>
</body>
<script>new MooRTE({elements:'#eg3a div.editable', skin:'rteGrey', location:'inline', floating:true});</script>
</html>

<!-- oranges,grapefruit,lemons -->