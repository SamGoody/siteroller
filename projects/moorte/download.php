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
	
	<script type="text/javascript" src="js/moo.123.js"></script>
	<script type="text/javascript" src="js/moore.123.1.js"></script>
	<script type="text/javascript" src="download.js.js"></script>
	
	<link type="text/css" rel='stylesheet' href="../../siteroller/classes/moorte/source/moorte.css"/>
	<link href="l2.css" rel="stylesheet" type="text/css" />
	<style type="text/css" id="defaultStyles">
		#collectionBox {width:90%; padding:15px; padding-bottom:25px; min-height:100px; background-color:#ddd; text-align:center; position:relative; border:1px solid black;}
		#collections{ text-align:left; background-color:brown; display:inline-block; padding-right:100px;}
		.c0{background-image:url('images/bg.gif');}
		.c1{background-image:url('rteimages/background_silver.jpg');}
		.c2{}
		.collection {display:inline-block;}
		.collection li{ display:inline-block; width:20px; height:20px; cursor:move; }
		.collection li{ list-style-type: none; _display:inline }
		.c1 li,.c0 li{background-image:url('rteimages/Word03.gif'); margin:1px;}
		.c2 li{background-image:url('rteimages/Tango.gif'); background-color:#fff; margin:2px;}
		span{ display:inline-block; }
		span.r { width:32.5%; height:35px; }
		.n{display:none}
		.a{position:absolute}
		table{border-collapse:true;}
		.td2, td, .bbox{behavior: url("boxsizing.htc"); -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box; -webkit-box-sizing: border-box  }
		.td2, td{ width:50%; height:75px; background-color:#EEE; overflow:hidden; border:2px solid #EFEBE5; !width:48% }
		.td2 b{line-height:40px;}
		.td2 .num{ font:35px Arial; height:50px; }
		.td2 .choice{ height:50px; width:80%; text-align:center; }
		#elements{margin-top:50px}
		.divider{ background-image:url('images/dividergrad.png'); height:22px; cursor:pointer }
		#elements_form{height:0; overflow:hidden; }
		
	}

	</style>
</head>
<body>
	<?php 
		if($_POST['submit'] == 'Download')
			echo '<iframe src="download-builder.php" style="display:none;" />'; 
	?>
	<div id="stage">
		<div id="header">
			<div id="TRcorner"></div>
			<div id="headMenu">
				<div id="logo"><strong>Siteroller:</strong> Websites made <em>really</em> easy!!</div>
				<img src="images/MenuTab.gif" id="menuBG" />
				<a href="index.htm">Home Page</a>       
				<a class="selected" href="#">Projects</a>      
				<a href="index-3.html">Library</a>     
				<a href="index-4.html">Services</a>     
				<a href="index-5.html">FAQs</a>    
				<a href="index-6.html">Contact</a>
			</div>
			<hr>
			<div style="margin:0 8px;">
				<img src="images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
			</div>
			<hr style="text-align:left; !position:absolute;" class="headDivider">	
		</div>
		
		<div id="body" style="border-top:solid 1px #fff;">
			
			<div id="CmdMenu">
				<h4>MooRTE</h4>
				<a href="MoorteDocs.htm">MooRTE</a>
				<a href="ElementsDocs.htm">MooRTE.Elements</a>
				<a href="StorageDocs.htm">MooRTE Storage</a>
				<a href="#" xhref="UtilitiesDocs.htm" title="coming soon">MooRTE.Utilities</a>
			</div>
			
			<div id="main" class="main2">
				<h1>Download MooRTE<span style="font:18px Arial">(v0.5b)</span></h1>
				<p></p>
				
				<p class="divider" id="clickDivider">Prebuilt</p>
				<form action="thanks.php" method="post" style="text-align:center; overflow:hidden" id="simpleDown" >
					<input  type="image" name="complete" src="images/cooltext431470468.png" onmouseover="this.src='images/cooltext431470468MouseOver.png';" onmouseout="this.src='images/cooltext431470468.png';">
					<br><br>
					<input  type="image" name="lite"     src="images/cooltext431471556.png" onmouseover="this.src='images/cooltext431471556MouseOver.png';" onmouseout="this.src='images/cooltext431471556.png';">
					<br><br>
					<img id="buildBtn" src="images/cooltext431471766.png" onmouseover="this.src='images/cooltext431471766MouseOver.png';" onmouseout="this.src='images/cooltext431471766.png';">
				</form>
				
				<p class="divider" id="buildDivider">Modular - Build your own</p>
				<div id="efHeight">
				<form id="elements_form" action="thanks.php" method="post">	
					
					<span class="td2">
						<span class="num">1.</span>
						<span class="choice"> 
							<b>Choose a skin:</b><br>
							<select class="" name ="skin" id="skin">
								<option value="Word03">Word '03</option> 
								<option value="rteGrey">Grey</option> 
								<option value="Tango">Tango</option>
								<option class="n" value="Sheva">Sheva</option>
							</select>
						</span>
					</span><!--
				 --><span class="td2">
						<span class="num">2.</span>
						<span class="choice">
							<b>Toolbar Alignment:</b><br>
							<select class="" name="order" id="order">
								<option value="tabbed">Tabbed</option> 
								<option value="vertical">Vertical</option> 
								<option value="inline">Horizontal</option>
							</select>
						</span> 
					</span><!--
				 --><span class="td2">
						<span class="num">3.</span>
						<span class="choice"> 
							<b>Location of RTE:</b><br>
							<select class="" name="location">
								<option value="elements">Above the elements</option> 
								<option value="pageTop">Page Top (fixed)</option>
								<option value="pageBottom">Page Bottom (fixed)</option>
								<option value="inline">Inline (click to edit)</option> 
								<option value="none">Invisible (shortcuts)</option>
							</select>
						</span>
					</span><!--
				 --><span class="td2">
						<span class="num">4.</span>
						<span class="choice"> 
							<b>Insert the RTE into the DOM?<!--,<br> 
							or float the RTE above the DOM?--></b><br>
							<select class="" name="floating">
								<option value="false">In the DOM (in the pageflow)</option> 
								<option value="true">Floating (doesn't affect layout)</option> 
							</select>
						</span>
					</span><!--
				 --><span class="td2">
						<span class="num">5.</span>
						<span class="choice"> 
							<b>Default selector: </b><br>
							<input type="text" name="elements" value="textarea, .rte" >
						</span>
					</span><!--
				 --><span class="td2">
						<span class="num">6.</span>
						<span class="choice"> 
							<b>Compression:</b><br>
							<select class="" name="compression">
								<option value="none">No compression</option> 
								<option value="yui" class="n">YUI</option> 
								<option value="deanedwardspacker">Packer (Dean Edwards)</option> 
							</select>
						</span>
					</span>
					<br><br>
					<div id="collectionBox">
						<p style="text-align:center; padding-top:5px; margin:0; color:grey;">Select below to add, Drag & drop to rearange</p>
						<p id="menuLabels" style="text-align:center; color:grey; margin:0; ">
							Menu Labels: <input type="text" name='group[0]', value='tab0' />
						</p>
						<div style="padding-bottom:5px;">&nbsp;</div>
						<div id="collections" class="c0">
							<div style="display:none">
								<div class="MooRTE"><div class="Word03" style="width:auto; display:inline-block">
									<div class="rteToolbar" style="width:auto;"><span class="rtestart"></span><ul style="margin:0; padding:0;display:inline;" class="collection"><li style="background:transparent url(); cursor:default" class="blank"></li></ul></div>
								</div></div>
							</div>
							<div class="MooRTE"><div class="Word03" style="width:auto; display:inline-block">
								<div class="rteToolbar" style="width:auto"><span class="rtestart"></span><ul style="margin:0; padding:0;display:inline;" class="collection" id="collection0"><li style="background-image:url(); background-color:transparent; cursor:default" class="blank"></li></ul></div>
							</div></div>
						</div>
						<img class="a" style="bottom:0; right:32px;" id="add" src="images/kcmdrkonqi.png" title="Add a Toolbar">
						<img class="a" style="bottom:0; right:0;" id="remove" src="images/trashcan_full.png" title="Remove all empty toolbars">
					</div>
				
					<ul id="elements">
						<?php 
							
							$elements = array(
								//6=>'Justify', 14=>'Lists', 11=>'Indents', 
								1 =>'Bold', 2 =>'Italic', 3 =>'Underline', 4 =>'Strikethrough', 
								6 =>'Justify Left', 7 =>'Justify Full', 8 =>'Justify Center', 9 =>'Justify Right', 18=>'Subscript', 17=>'Superscript', 
								12=>'Indent', 11=>'Outdent', 14=>'Ordered List', 15=>'Unordered List', 20=>'Cut', 21=>'Copy', 22=>'Paste', 
								25=>'Select All', 26=>'Remove All Formatting', 31=>'Undo', 32=>'Redo',  
								56=>'Horizontal Rule', 52=>'Blockquote'
								//, 0=>'Save', 0=>'Html/Text', 0=>'popupURL', 0=>'Upload Photo', 41=>'Decrease Font Size', 42=>'Increase Font Size',
							);
							
							foreach($elements as $i=>$item){
								echo "
									<span class='r'>
										<input type='checkbox' name='$item' class='toggle check-me' num='$i' id='$item' value='$item' />
										<label for='$item'>$item</label>
									</span>";
							}
							//$sort_order = array();
							//$sort_order[] = $item['sort_order'];
							
						?>
					</ul>
					
					<br/>
					<input type="hidden" name="groups" id="groups" value="<?php //echo implode($sort_order,'|'); ?>" />
					<div style="text-align:right; padding-right:50px;"><input type="submit" name="do_submit" value="Download" class="button" /></div>
				</form>
				</div>
				
			</div>
			
		</div>
	</div>
</body>
</html>

<!-- oranges,grapefruit,lemons -->