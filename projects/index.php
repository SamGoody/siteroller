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
	<link type="text/css" rel="stylesheet" href="../style2.css">
	
	<style>
		a.entry{height:125px;padding:15px 0; margin:0 30px; background-position: right center; background-repeat:no-repeat;}
		a.entry{text-decoration:none; color:#000}
		a.entry p{ font-weight:bold;}
		h2{margin-top:50px; text-align:center; text-decoration:underline;}
	</style>
	
</head>

<body id="docs" style="border-top:solid 1px #DFD7CB;">	
	<div id="stage">
		
		<div id="header" style="height:auto;">
			<div id="TRcorner"></div>
			<div id="headMenu">
				<div id="logo" style="font:11pt 'Comic Sans MS';">
					<strong style="font:bold 14pt Georgia;">Siteroller</strong>:
					Websites made <em>really</em> easy!!
				</div>
				
				<span style="width:445px; position:relative; height:30px; vertical-align:bottom; line-height:10px; padding-top:20px;">
					<img src="../images/MenuTab.gif" id="menuBG" style="right:235px;" />
					<a href="../index.php">Home</a><a href="#" class="selected">Projects</a><a href="../services.php">Services</a><a href="../blog">Blog</a><a href="../contact.php">The team</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px; font:bold 32px 'Comic Sans MS'; color: #bbb; text-align:center; height:50px;">
				Our Open Source Projects. Come Join!
			</div>
		</div>
		
		<div id="body" class="" style="border-top:solid 1px #DFD7CB;">
			<div class="td td1" id="main">
				<div class="tdWrap">
					
					<h2>Javascript - Mootools</h2>
					<a href="moorte" class="entry" style="background-image:url(images/moorte.jpg); display:block">
						<p>MooRTE - The Mootools Rich Text Editor</p>
						<div></div>
					</a>
					<!-- 
					<div class="entry">
						<p>MooColor - Color Picker</p>
						<div>Includes a proposed redone color class.</div>
					</div>
					<div class="entry">
						<p>MooShout - Shout/Chat box for live interaction of site viewers.</p>
						<div></div>
					</div>
					
					<div class="entry">
						<p>MooForms</p>
						<div>Some work with Buriel on making a form script</div> 
					</div>
					
					
					<h3>Javascript - JQuery Classes</h3>
					<p>JRTE - The JQuery Rich Text Editor</p>
					<div>A port of the Mootools editor to make the most of JQ's specific style.</div>
					-->
					
					<h2>PHP</h2>
					<a href="domparser" class="entry" style="background-image:url(images/domparser.png); display:block">
						<p>DOMParser - PHP CSS Selector (&amp; modifier) Engine</p>
						<div>Gives PHP the ability to select and modify elements using CSS3 selectors.<br>
						Handles malformed and incorrect HTML.<br>
						Quick and light - avoids the notoriously slow regex loops natively supported.
						</div>
					</a>
					<!--
					<div class="entry">
						<p>Siteroller Core</p>
						<div>The motherlode.  </div>
					</div>
					-->
					
					
					<h2>Articles</h2>
					<a href="../articles/3-column-no-tables-no-floats/" class="entry" style="background-image:url(images/3col1.gif); display:block">
						<p>3 column Layout without tables</p>
						<div>What the current color theory espouses</div>
					</a>
					<!--
					<div class="entry">
					<h3>Articles (also referenced on the <a href="#">blog</a>)</h3>
						<p>Color Theory And HSG</p>
						<div>What the current color theory espouses</div>
					</div>
					<div class="entry">
						<p>4 corners - expandable layout.</p>
						<div>The best way to deal with background and corner images for IE support</div>
					</div>
					<div class="entry">
						<p>Best Bungles</p>
						<div>Some of my favorite IE bugs and the workarounds</div>
					</div>
					-->
					
		
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