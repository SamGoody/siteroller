<!doctype html>
<html>

<head>
	<title>Mootools Rich Text Editor - MooRTE Docs</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="author" content="SamGoody, Siteroller">
	<meta name="copyright" content="copyright 2009 www.siteroller.net">
	<meta name="description" content="MooRTE, a super lightweight and complete Rich Text Editor">
	<meta name="keywords" content="mootools,MooRTE,javascript,TinyMCE,javascript RTE framework,RTE,MooInline">
	<meta name="robots" content="all">
	
	<link href="l2.css" rel="stylesheet" type="text/css" />
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
					<img src="images/MenuTab.gif" id="menuBG" style="right:15px; width:70px" />
					<a href="#">Home</a><a href="#">All Projects</a><a href="index.php" >MooRTE</a><a href="download.php">Download</a><a href="faq.htm">FAQ</a><a href="contact.html" class="selected">Contact</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px;">
				<img src="images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
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
			
			<div id="main" class="main2" style="text-align:center; height:500px;">
				Looking for the crew behind MooRTE?
				<br/><br/>
				Ready to help?  Having issues?
				<br><br>
				You can reach us at siteroller<span style="background-image:url(images/at.jpg); width:116px; height:15px; vertical-align:middle; margin-left:1px"></span>
				<br><br>
				We would love to hear from you!
				<br><br>
				---
				<br><br>
				Need a project that looks good on a resume? <br> Wanna help the universe?<br> We want <b>your</b> help! <br> 
				<br><br>
				Go right ahead and clone the <a href="http://github.com/siteroller/moorte">MooRTE GitHUB repository</a>
				<br><br>
				<br><br>
				(If you want to send us spam, a better address would be <a href="mailto:bgates@microsoft.com">bgates@microsoft.com</a>)
				<br><br>
				
			</div>
		</div>
	</div>
	<?php
		$gu_siteid="mn2i32n";
		$gu_param = "st=".$gu_siteid."&ref=".urlencode($_SERVER['HTTP_REFERER'])."&vip=".$_SERVER['REMOTE_ADDR']."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&cur=".urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&b=5";
		@readfile("http://counter.goingup.com/phptrack.php?".$gu_param); 
	?>
</body>
</html>
