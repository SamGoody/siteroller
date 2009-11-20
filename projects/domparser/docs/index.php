<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<!doctype html>
<html> 

<head>
	<title>Mootools Rich Text Editor - MooRTE Docs</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="author" content="SamGoody, Siteroller">
	<meta name="copyright" content="copyright 2009 www.siteroller.net">
	<meta name="description" content="DOMParser, a lightweight CSS3 selector engine for php">
	<meta name="keywords" content="DOMParser,PHP,CSS3 Selector,PHP DOM">
	<meta name="robots" content="all">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.4/mootools-yui-compressed.js"></script>
	
	<link type="text/css" rel="stylesheet" href="../../../js/lighter.2/Flame.mocha.css" />
	<link type="text/css" rel="stylesheet" href="../../../js/lighter.2/Flame.git.css" />
	<script type="text/javascript" src="../../../js/lighter.2/Lighter.js"></script>
	<script type="text/javascript" src="../../../js/lighter.2/Fuel.php.js"></script>
	
	<script type="text/javascript" src="../../../js/moore1242.smoothscroll.php"></script>
	<script type="text/javascript">
		window.addEvent('domready',function(){
			$$('pre').light({ altLines: 'hover' });
			new Fx.SmoothScroll();
		})
	</script>
	
	<style type="text/css">
		/* General */
		span, .td{display:inline-block}
		div.td{_display:inline}
		.td{vertical-align:top}
		
		/* Adjust the size to desired columns. tr+'num of columns'  */
		.td0{width:150px}
		.td1{width:100% }
		.td2{width:150px}
		.tr2 .td1        {margin-right:-150px}
		.tr2 .td1 .tdWrap{margin-right: 150px}
		.tr3 .td1        {margin-right:-300px}
		.tr3 .td1 .tdWrap{margin-right: 300px}		
		
		/* For equal length (remove x to use, messes up anchors):*/
		x.tr{ overflow:hidden } 
		x.td{ padding-bottom:1000px; margin-bottom:-1000px; }
		
		/* Sitewide */
		body{ background:#2E1302 url('../../../images/bg.jpg') repeat-x; margin:0; padding:26px 120px; }
		hr{ background-color:#DFD7CB; border:0; border-bottom:#fff solid 1px; margin:8px; }
		#stage { max-width:900px; min-width:790px; margin:0 auto; _width:790px; background-color:#EFEBE5; -moz-border-radius:10px; }
		#header{ background:#F8F6F3 url('../../../images/header_left.gif') no-repeat; }
		#TRcorner{ background:url('../../../images/header_right.gif') no-repeat right top; height:24px; }
		#logo{float:left; padding-left:40px; background-image:url(logo.gif)}
		#headMenu{width:100%; text-align:right; margin-bottom:19px; height:40px; line-height:30px; position:relative; }
		#headMenu a{color:#745E50; text-decoration:none; font:0.75em Arial; display:inline-block; margin-right:29px; vertical-align:bottom; position:relative}
		#headMenu a.selected{ color:#fff;}
		#menuBG{width:57px; height:32px; position:absolute; right:296px; top:8px;}
		hr.headDivider{ margin:0; margin-top:8px; width:100% }
		#body{ min-height:200px; position:relative; display:relative;}
		#footer{text-align:center; xbackground: url('../../../images/header_left.gif') no-repeat; height:40px;}
		a{text-align:right; color:#210; text-decoration:underline; border:0; font: Small-Caps bold 14px/1.5 Helvetica;}
		
		/* This page */
		.tdWrap{ border:inset #ffd; border-width:0 2px; padding:15px; font-family:'times new roman' }
		#conventions{width:80%; background-color:#bbb; margin:10px auto;}
		h3{margin-top:48px;}
		.td2 ul{ list-style-type: none; padding-left:15px; margin-top:8px;}
	</style>
</head>

<body id="docs">	
	<div id="stage">
		
		<div id="header">
			<div id="TRcorner"></div>
			<div id="headMenu">
				<div id="logo" style="font:11pt 'Comic Sans MS';">
					<strong style="font:bold 14pt Georgia;">Siteroller:</strong> 
					Websites made <em>really</em> easy!!
				</div>
				
				<span style="width:445px; position:relative; height:30px; vertical-align:bottom; line-height:10px; padding-top:20px;">
					<img src="../../../images/MenuTab.gif" id="menuBG" style="right:239px;width:75px" />
					<a href="../../../index.php">Home</a><a href="../../">Projects</a><a class="selected" href="../">DOMParser</a><a href="../../services.php">Services</a><a href="../../blog">Blog</a><a href="../../contact.php">The Team</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px;">
				<img src="../../moorte/images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
			</div>
		</div>
		
		<div id="body" class="tr tr3" style="border-top:solid 1px #DFD7CB;">
			<div class="td td0" id="pgsMenu">
				<h4>DOMParser Docs</h4>
				<ul>
					<li><a href="#">Main</a></li>
				</ul>
			</div><!--
	Main Div --><div class="td td1" id="main">
				<div class="tdWrap">
					<ul id="conventions">
						<b style="display:block; text-align:center"> Convention used in this code</b>
						<li>The first option is the default (Used if no argument is provided).</li>
					</ul>
					
					<a name="init"></a>
					<h3>Class Initializer</h3>
					<h4>Parse the HTML.  Called once before running the class functions.</h4>
					<pre id="phpCode" class="php:mocha">$dom = new DOMParser($html [,$options]);</pre>
					<h5>Returns the PHP class object</h5> 
					<ul>
						<li>
							<b>$html [string]</b> - 
							<ul><li>HTML/XML markup.  Can be a properly encoded url, a string containing the html, or the html itself.</li></ul>
						</li>
						<li><b>$options [associative array]</b> - 
							<ul>
								<li> curl => [true, false]</li>
								<li> advancedSelectors => [false, true] </li>
								<li> stripTags => Comma delimitted list of tags to ignore while creating the xml tree. Defaults to 'comments, php, script'.
									<pre id="phpCode" class="php:git">//The spans are considered to be inside the divs.
&lt;div&gt; &lt;!-- &lt;/div&gt; --&gt; &lt;span&gt;&lt;/span&gt; &lt;/div&gt;
&lt;div&gt; &lt;? echo &quot;&lt;/div&gt;&quot;; ?&gt; &lt;span&gt;&lt;/span&gt; &lt;/div&gt;</pre>
								</li>
							</ul>
						</li>
					</ul>
					
					<a name="get"></a>
					<h3>GET Function</h3>
					<h4>Retrieve any elements without modifying their content</h4>
					<pre id="phpCode" class="php:mocha">$dom->get($css [,$options]);</pre>
					<h5>Returns the desired elements</h5> 
					<ul>
						<li>
							<b>$css [string]</b> - 
							<ul><li>CSS selectors, see bottom of page.</li></ul>
						</li>
						<li>
							<b>$options [associative array]</b>
							<ul>
								<li> target => [innerHTML, outerHTML, innerTEXT, tags]</li>
								<ul>
									eg $dom = new DOMParser('&lt;div&gt;text&lt;img /&gt;&lt;/div&gt;');
									<li>innerHTML - returns 'text&lt;img /&gt;'</li>
									<li>outerHTML - returns '&lt;div&gt;text&lt;img /&gt;&lt;/div&gt;'</li>
									<li>innerTEXT - (innerHTML without its children) returns 'text'</li>
									<li>tags - returns array([0]=&gt;'&lt;div&gt;', [1]=&gt;'&lt;/div&gt;')</li>
									<li>object - returns the DOMParser instance (to allow linked actions)</li>
								</ul>
						
								<li> action => [run, close]</li>
								<ul>	
									<li>run; do nothing after returning value.</li> 
									<li>close; domparser instance is deleted after returning its value.</li> 
								</ul>
								
								<li>response => auto / string / array <em> / object</em></li>
								<ul>
									<li>'auto' - if only one item, return as string, otherwise return array.</li>
									<li>'string' - '&lt;div&gt;A&lt;/div&gt;&lt;div&gt;B&lt;/div&gt;' </li>
									<li>'array' - array([0]=&gt;'&lt;div&gt;A&lt;/div&gt;', [1]=&gt;'&lt;div&gt;B&lt;/div&gt;')</li>
								</ul>
								
								<li> properties => List of properties [defaults to '']. eg:'id, class, rel'. </li>
								<ul>
									<li>
										Response will be returned as an associative array in which each property is an element, and the html is referred to as 'content'.<br>
										<pre id="phpCode" class="php:git">$dom = new DOMParser('&lt;div id=&quot;a&quot;&gt;txt&lt;/div&gt;');
$opts = array($properties=&gt;'id class');
$dom -&gt; get('div', $opts); //array{[id]=&gt;'a', [class]=&gt;null, [content]=&gt;txt }</pre>
									</li>
								</ul>
							</ul>	
						</li>
					</ul>
					
					<a name="set"></a>
					<h3>SET Function</h3>
					<h4>Retrieve and modify elements</h4>
					<pre id="phpCode" class="php:mocha">$dom -> set([$css][,$html][,$target][,$action]);</pre>
					<h5>Returns the modified html</h5> 
					<ul id="conventions">
						<b style="display:block; text-align:center"> Additional convention used in set()</b>
						<li>All arguments are optional</li>
						<li>Arguments are not case sensitive.</li>
						<li>Arguments may be in any order, but $css must be after $html</li>
					</ul>
					
					<ul>
						<li>
							<b>$css [string]</b> - 
							<ul><li>CSS selectors, see <a href="http://www.456bereastreet.com/archive/200601/css_3_selectors_explained/">here</a>.<br> If skipped and queue exists, the queue will be processed.</li></ul>
						</li>
						<li>
							<b>$html [non-associative array of elements or associative list of properties/styles]</b>
							<ul>
								Content to replace selected elements with.  If skipped, the element will be deleted. Accepted formats are:
								<li>[formatted HTML] </li>
								<li>array([formatted HTML], [formatted HTML])</li>
								<li>array([property] => [value]) </li>
								<li>array([style]=>[value])</li>
							</ul>
						</li>
						<li><b>$target [innerHTML, outerHTML, top, bottom, before, after, tag, properties, styles]</b></li>
						<li><b>$action [rebuild, run, close, queue]</b></li>
					</ul>		
					
					<!--
					<h3>Close Method</h3>
					<h4>Modify HTML, delete DOMParser instance and remove from memory.</h4>
					<pre id="phpCode" class="php:twilight">$dom -> close([$arguments]);</pre>
					<h5>Returns modified HTML</h5> 
					<li>All 'set' arguments, except that 'action' defaults to 'close' </li>
					-->
					<a name="selectors"></a>
					<h3>Selectors</h3>
					<h4>DOMParser supports most CSS2 & CSS3, as well as a few psuedo selectors</h4>
					
					<h5>CSS3 Selectors</h5>
					<ul>
						<li>Yeah, yeah.  We got to make a list of what is and is not supported.</li>
						<li> See <a href="http://www.456bereastreet.com/archive/200601/css_3_selectors_explained/">here</a> for the list of CSS3 selectors.</li>
					</ul>
					
					<h5>Custom Psuedo Selectors</h5>
					<ul><li>At the moment, there is no support for custom psuedo selectors, but they are scheduled for the 0.7 release.</li></ul>
					
					<h5>Native Psuedo Selectors</h5> 
					<ul>
						<li><b>Parent selectors (&lt;):</b> returns the parent of previous selected arguments.</li>
						<li>
							<b>Iterator(&lt;3):</b> The following can be followed by an iterator: '&gt;', '&lt;', '+', ''.<br>
							'&gt;3' means all descendants three levels lower, otherwise written as: ' &gt; * &gt; * &gt;'.</li>
						<li>
							<b>Iterator includes (&lt;3+):</b> The iterator can be followed by a plus or minus;<br>
							'&gt;3-' means all children that are within 3 generations (inclusive), otherwise written '* &gt; *,* &gt; * &gt; *, * &gt; * &gt; * &gt; *'<br>
							'&gt;3+' means all children from 3 generations on (inclusive), written '* &gt; * &gt; * *.
						</li>
						<li>
							<b>Multiple detracters (div[class!~^=myClas]):</b>
							All detracters may be combined, so the above would mean "a div with no classes that begin with 'myClas'".</br>
							Why is this not part of the standard?!
						</li>
					</ul>
					
				</div>
			</div><!--
	End Main --><div class="td td2" id="subMenu">
				<strong>Main</strong>
				<ul>
					<li><a href="#init">Initializer</a></li>
					<li><a href="#get">GET</a></li>
					<li><a href="#set">SET</a></li>
					<li><a href="#selectors">CSS Selectors</a></li>
				</ul>
			</div>
		</div>
		
		<div id="footer">
			<a href="http://siteroller.net/contact.php">Contact</a> | <a href="http://siteroller.net/services">Design by Siteroller Services</a> | <a href="http://www.siteroller.net">Powered by Siteroller</a>
			<?php
				$gu_siteid="mn2i32n";
				$gu_param = "st=".$gu_siteid."&ref=".urlencode($_SERVER['HTTP_REFERER'])."&vip=".$_SERVER['REMOTE_ADDR']."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&cur=".urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&b=5";
				@readfile("http://counter.goingup.com/phptrack.php?".$gu_param); 
			?>
		</div>
	</div>
</body>
</html>

<!-- oranges,grapefruit,lemons -->