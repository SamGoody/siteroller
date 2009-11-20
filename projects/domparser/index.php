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
	
	<!-- <link type="text/css" rel="stylesheet" href="../../../js/lighter.2/Flame.mocha.css" />
	<link type="text/css" rel="stylesheet" href="../../../js/lighter.2/Flame.git.css" /> -->
	<script type="text/javascript" src="../../../js/lighter.2/Lighter.js"></script>
	<script type="text/javascript" src="../../../js/lighter.2/Fuel.php.js"></script>

	<script type="text/javascript">
		window.addEvent('domready',function(){
			$$('pre').light({ altLines: 'hover' });
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
		.tdWrap{ border:inset #ffd; border-width:0 2px; padding:15px; font-family:'verdana'; font-size:16px; }
		.tdWrap h1{font-family:arial}
		.tdWrap h2{font-family:'times new roman'}
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
					<img src="../../images/MenuTab.gif" id="menuBG" style="right:239px;width:75px" />
					<a href="../../index.php">Home</a><a href="../">Projects</a><a class="selected" href="#">DOMParser</a><a href="../services.php">Services</a><a href="../blog">Blog</a><a href="../contact.php">The Team</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px;">
				<img src="../moorte/images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
			</div>
		</div>
		
		<div id="body" class="tr2 tr" style="border-top:solid 1px #DFD7CB;">
			<div class="td td0" id="pgsMenu">
				<br>
				<ul>
				<h4><a href="docs">Docs</a></h4>
				<h4><a href="demos.php">Demos</a></h4>
				</ul>
			</div><!--
	Main Div  --><div class="td td1" id="main">
				<div class="tdWrap">
					<h1>DOMParser - CSS3 Selectors in PHP </h1>
					
					<blockquote style="background-color:#eee; font-family:helvetica; font-size:16px">
						Because PHP just doesn't <i>do</i> HTML.<br>
						Because XML parsers stop working when you don't close a tag <i>that doesn't need to be closed</i>.<br>
						And because you want something light, easy and quick. Something that JUST WORKS.<br><br>
						
						(We know that <a href="http://stackoverflow.com/questions/1732348/regex-match-open-tags-except-xhtml-self-contained-tags/">the standards police</a> would prefer you use the PECL DOM library.<br>
						But you know you have a deadline to make...)</br>
						
						<!--
						When you are done cursing out the PECL DOM library, it's time to ignore all the fanatics and 
						
						The salvation of XML parsers, such as the , look enticing.<br>
						Besides (the <center> may just hold!)<br>
						But after two weeks of cursing, you finally realize that they are choking on that span which you forgot to close, and something is still not quite right!!
						<br>
						
						So now, with the deadline they day before yesterday, its time to get something that just, WORKS!!
						-->
					</blockquote>
					
					
					<h2>Simple:</h2>
					The library has only two methods:
					<ul>
						<li>get() returns the elements you need.</li>
						<li>set() allows you to modify one or many elements, and returns the modified HTML.</li>
					</ul>
					
					<h2>Flexible:</h2>
					It doesn't care how poorly you wrote the XML.<br>
					If you're happy, it's happy. :)
					
					<h2>Light:</h2>
					Speed and low-memory footprint are built into every step of this library.<br>
					I mean, this baby crossed the finish at Daytona 500 before the Kellogs car had hit the gas!<br>
					
					<h2>So, how do I use it?</h2>
					<ol>
						<li>Call the class [args: your content(HTML or a URL), options]</li>
						<li>Call get [args: CSS selectors, options], or set [args: CSS selectors, new content, options]</li>
						<li>Rinse, Lather, repeat</li>
						<li> Here's an example, but see the <a href="demos.php">demo page</a> for more.
							<pre class="php:standard">
$dom = new DOMParser('www.google.com');

//echos &lt;input value=&quot;&quot; title=&quot;Google Search&quot; class=&quot;lst&quot; size=&quot;55&quot; name=&quot;q&quot; maxlength=&quot;2048&quot; autocomplete=&quot;off&quot;/&gt;	
echo get('input[title$=search]');

//echos Google's homepage without the search bar.
echo set('input[title$=search], '&lt;div&gt;Sorry, the internet is closed&lt;/div&gt;');

//Hey, that's Google you're messing with! Changes the title :)
echo set('input[title$=search], array('title' => 'Yahoo Search') );
							</pre>
						</li>
					</ol>
		
				</div>
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