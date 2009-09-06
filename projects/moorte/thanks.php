<?php include 'download-builder.php'; ?>
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
	<style>
		#collectionBox {width:90%; padding:15px; padding-bottom:25px; min-height:100px; background-color:#ddd; text-align:center; position:relative; border:1px solid black;}
		#collections{ text-align:left; background-image:url('images/bg.gif'); display:inline-block; padding-right:100px;}
		.collection {display:inline-block;}
		.collection li{ display:inline-block; width:20px; height:20px; cursor:move; background-image:url('Word03.gif'); }
		span{ display:inline-block; }
		span.r { width:32.5%; height:35px; }
	</style>
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
					<img src="images/MenuTab.gif" id="menuBG" style="right:145px; width:70px" />
					<a href="#">Home</a><a href="#">All Projects</a><a href="index.htm" >MooRTE</a><a href="download.php"class="selected">Download</a><a href="faq.htm">FAQ</a><a href="contact.html">Contact</a>
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
			
			<div id="main" class="main2" style="text-align:center">
				Thank you for downloading the MooRTE editor beta.
				<br/><br/>
				Please keep us posted.
				<br/><br/>
				Good luck!
			</div>
		</div>
	</div>
	<iframe src="<?=$filename?>" alt="zip.php?zip=moorte.zip" style='display:none;'/>
</body>
</html>
