<!doctype html>
<html>

<head>
	<title>3 Column layout without tables or floats - Part 1 - Pretty Forms - Holy Grail of layout</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="author" content="SamGoody, Siteroller">
	<meta name="copyright" content="copyright 2009 www.siteroller.net">
	<meta name="description" content="MooRTE, a super lightweight and complete Rich Text Editor">
	<meta name="keywords" content="mootools,MooRTE,javascript,TinyMCE,javascript RTE framework,RTE,MooInline">
	<meta name="robots" content="all">
	
	<link href="l2.css" rel="stylesheet" type="text/css" />
	<link href="3col.css" rel="stylesheet" type="text/css" />
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
					<a href="#">Home</a><a href="#">All Projects</a><a href="index.htm" >Articles</a><a href="#"class="selected">Holy Grail</a><a href="faq.htm">Page1</a><a href="contact.html">Contact</a>
				</span> 
			</div>
			<hr >
			<div style="margin:0 8px; padding-bottom:4px;">
				<img src="images/DSC_3003 Minuteman III launch l2.png" style="width:100%;height:75px;"/>
			</div>
		</div>
		
		<div id="body" style="border-top:solid 1px #DFD7CB;">
			
			<div id="CmdMenu">
				<h4>Modern Layouts</h4>
				<a href="pretty-forms-1.php">Fixed Layouts</a>
				<a href="fluid-layouts.php">Fluid Layouts</a>
				<a href="prettyboxes-fixed-and-fluid-columns.php">Fixed & Fluid Columns</a>
			</div>
			
			<div id="main" class="main2" >
				
				<h2 style="text-align:center">Tableless Float-free Layouts Part 1:<br>
				 The Deceptively Simple Form</h2>
<h4>Summary</h4>
Creating a pretty cross browser form requires just one basic CSS rule:<br>
Use it always. (<a href="pretty-forms-demo-1.htm">demo</a>)
<pre>
	span,legend{display:-moz-inline-box; display:inline-block}
</pre>
<br>
<hr>
<h4> Understanding the display property:</h4>
The CSS 'Display' property was introduced way back in CSS v1 as a way of setting the layout ["display"] of the element.<br>
But while the <a href="http://www.w3.org/TR/CSS2/visuren.html">W3C</a> has defined <a href="http://www.w3schools.com/css/pr_class_display.asp">almost 20 valid values</a> and Mozilla has added <a href="https://developer.mozilla.org/en/CSS/display">another dozen</a>, only five have <a href="http://www.quirksmode.org/css/display.html">common support</a>:
<ol>
<li> "<b>block</b>": Give an entire line to the element. <br>
	No elements will be to its left or right (Except those <a href="http://www.barelyfitz.com/screencast/html-training/css/positioning/">above the layout</a>). <br>
	If width is not set, it will stretch horizontally to fill the parent.
</li>
<li> "<b>list-item</b>": same as "block", but with an added number or bullet to the left of the element. &nbsp;Used in this list.
	
</li>
<li>"<b>inline-block</b>": Insert the element into the page layout as if it were a word of text.<br>  
	It follows immediately after the item before it and flows to the next line if there is not enough space for the whole word/element.
</li>
<li>"<b>inline</b>": The same as inline-block, but with the element's width and height properties disabled.  In effect the same as a forced style="width:auto; height:auto".
</li>
<li>"<b>none</b>" : Don't display the element at all.<br> 
	Hides the element.
</li>
</ol>

Some elements such as the &lt;span&gt;, &lt;a&gt;, &lt;b&gt; & &lt;i&gt;, have the display set to inline.<br>
Being such, <span>they</span> <span>are</span> <span>so</span> unobtrusive you wouldn't know that I put 3 into this sentance alone. (Check with <a href="http://www.getfirebug.com">Firebug</a> ;))<br>
<br>
Others elements, such as the div, pre, and p, are block level.  They make their presence <p>known!</p>

I know what you want to ask: Why in the world would anyone use inline instead of inline-block?!<br>
What possible benefit could be gained by disabling the width & height?! [Especially considering that width and height are <i>never</i> inherited in CSS].<br>
<!--
Considering that the only thing that inline adds is that it disables the width and height, [which aren't even inherited], why use it?<br>


These elements are known as block level as elements, and they make their presence known.
Others, such as the 

  as   
What causes the div and the span to have such radically different layouts?<br><br>
The word "<span>span</span>" in this sentance is inside a span (look with <a href="http://www.getfirebug.com">Firebug</a>)<br> 
You wouldn't even know - the span is the height of unobtrusivity.<br>
<br>The word <div>div</div> in this sentance is inside a div.  Which can't be missed.<br>  Cause that thar line there aint big enough for 'nothin but the div.<br>
<br>

<div class="norm">
All of which has to do with the HTML display property, which is designed to control the element's, well, display.<br>
Its set to 'inline' on a span and to 'block' on a div.
</div>


The HTML "display" property is meant to describe the layout of the different elements on a webpage.<br>


What's the point is of the "inline" value?<br>
After, width and height are never inherrited in CSS, so if I didn't want to set it, I wouldn't?!
-->
<br><br>
Good question.  No, more than that.  <u><b>Great</b></u> question!!<br><br>
But the fact is that the inline value exists, and the span, anchor, legend, and many other elements are set to "inline" by default.
<br>
In fact, they are known as "inline elements".<br><br>

Now for the good news.<br>
You can fix this.<br>  <b>This should be part of your own <a href="http://meyerweb.com/eric/tools/css/reset/">reset.css</a>, used on every page you write</b>:
<pre>	span,a,legend{ display:inline-block }</pre>

All done!<br>
You can now layout your forms with spans and/or legends, and they will display exactly the way you want them to.

Check it out (any browser will do):
<hr>
<h4 style="text-align:center">With fixed widths:</h4>
<hr>
<style type="text/css">#myForm1 span,#myForm1 input{width:125px;}</style>
<form id="myForm1">
		<span>Name:</span><input><br>
		<span>Password:</span><input type="password">
</form>
<hr> 
<pre>
&lt;style type=&quot;text/css&quot;&gt;
	span{display:inline-block} 
	#myForm span,input{width:125px;}
&lt;/style&gt;
&lt;form id=&quot;myForm&quot;&gt;
	&lt;span&gt;Name:&lt;/span&gt;&lt;input&gt;&lt;br&gt;
	&lt;span&gt;Password:&lt;/span&gt;&lt;input type=&quot;password&quot;&gt;
&lt;/form&gt; 
</pre>
<hr>
<h4 style="text-align:center">With fluid widths:</h4>
<hr>
<style type="text/css">#myForm2 span, #myForm2 input{width:49%;}</style>
<form id="myForm2">
		<span>Name:</span><input><br>
		<span>Password:</span><input type="password">
</form>
<hr> 
<pre>
&lt;style type=&quot;text/css&quot;&gt;
	span{display:inline-block} 
	#myForm span,input{width:49%;}
&lt;/style&gt;
&lt;form id=&quot;myForm&quot;&gt;
	&lt;span&gt;Name:&lt;/span&gt;&lt;input&gt;&lt;br&gt;
	&lt;span&gt;Password:&lt;/span&gt;&lt;input type=&quot;password&quot;&gt;
&lt;/form&gt; 
</pre>
<hr>
<br>
Now, I know what you are all thinking: That was too easy. 
<br><br>
Here's the catch:
<ul>
<li>
The fluid layout I gave cheated a little (width:49% instead of 50%) to compensate for the input's border. The "real" solution for borders is in part two of this tutorial.
</li>
 <li>
 Firefox 2 doesn't support inline-block.  Boom!
 </li>
 </ul>
However, Firefox is nice to us:<br>
They have a matching attribute that they call -moz-inline-box, and as long as you drop it in before the inline-block, it is picked up by FF2, and ignored by all other browsers.
<br>
<br>
So the new solution is slightly longer, but works the same, including FF2:
<pre>
span,a,legend{ display:-moz-inline-box; display:inline-block }
</pre>

[ It's actually a wee bit more complicated, as -moz-inline-box !== inline-block. It does not correctly wrap content that is placed directly into it.<br>
If the tiny number of FF2 users are a concern, make sure you test first that all is alright.<br>
In the odd circumstance that it looks wrong, switch to -moz-inline-stack, or -moz-inline-block, as these complement each other. Or wait till part 2, where we offer another solution.]

<h4>Whew.  OK. Now for Internet Explorer </h4>

Internet Explorer <i>could not</i> have gotten this right... where are all of the IE specific hacks?<br>
<br>
They are here, but none are directly related related to the above rules: (ie. you don't really <i>need</i> any!)<br>
<ul>
<li> Problem: 
In IE6 & 7 inline-block can not be applied to block level elements such as the div or the p.
</li>
<li>The hack:
Add an <a href="http://24ways.org/2005/avoiding-css-hacks-for-internet-explorer">IE only</a> display:inline in a separate command.  The first time sets the element to <a href="http://www.satzansatz.de/cssd/onhavinglayout.html">haslayout</a>, the second <a href="http://www.brunildo.org/test/InlineBlockLayout.html"> sets the display property</a>.  So we get:
<pre>
   div{ display:-moz-inline-box; display:inline-block }
   div{_display:inline}

   /* or for <a href="http://www.quirksmode.org/css/condcom.html">standards compliance</a> */	
   &lt;style type=&quot;text/css&quot;&gt;
 div,p{ display:-moz-inline-box; display:inline-block}&lt;/style&gt;
&lt;!--[if lt IE 8]&gt;&lt;style&gt;div{display:inline}&lt;/style&gt;&lt;![endif]--&gt;
</pre>

Weird, huh?  No.  Just IE.<br>
But be forewarned that setting haslayout so globally can have unintended consequences in IE.  If you insist on using divs to layout the form, use more specific CSS targeting.<br><br>
</li>
<li>
Problem:
Sometimes you want to set a minimum and maximum width height while using a percentage based width.
</li>
<li>This is a bit of a notorious problem, as M$ claimed to have fixed it in IE7, while in truth they just made it far worse.<br>
It part two we will discuss the various workarounds.
<!--
It used to be as simple as <a href="http://www.webmaster-source.com/2008/08/11/getting-around-ies-lack-of-min-width-support/">the following expression trick</a>:
<pre>

</pre>
Now that same expression trick needs, er, <a href="http://blog.throbs.net/2006/11/17/IE7+And+MinWidth+.aspx">help</a>
<a href="http://www.dustindiaz.com/min-height-fast-hack/"> Dustin Diaz </a> claims the best method for both is:
<pre>
selector {
  min-height:500px;
  height:auto !important;
  height:500px;
}
</pre>
Don't believe him! ;)<br>
<a href="http://www.webreference.com/programming/min-width/">Stu Nicholas</a> also has a convoluted idea.<br>

OK.  Good luck on this one.  Sorry I couldn't help more (I'll get more into this in part two though).
<br><br>
-->
</li>
<br><br>
<li> Problem:
Using positioned elements within anchors and other inline elements sometimes looks odd.
</li>
<li>
This has nothing to do with inline-block, and everything to do with IE being buggy. It applies even if you don't change the display type. 
If you plan on using positioning within inline elements, try to stick the span as much as possible.
They got the span almost 100% perfectly right.
</li>
</ul>
<!--
<h4> Any other gotchas? </h4>
<ul>
Since inline/ inline-block elements are treated similar to text, spaces and line breaks before and after them will be translated into spaces on the page.<br>
The standards are not met by <i>any</i> browser in this matter, and it can cause many hours of headache.<br>
Make sure your spans do NOT have spaces between them, unless you want those spaces!<br>
<pre>
To write "sitero ller.net".
&lt;span&gt;sitero&lt;/span&gt;
&lt;span&gt;ller.net&lt;/span&gt;

To write right ("siteroller.net"), one must either
Put the two tags together
&lt;span&gt;siteroll
&lt;/span&gt;&lt;span&gt;ller.net&lt;/span&gt;

Or use comments:
&nbsp;&nbsp;&nbsp;&lt;span&gt;sitero&lt;/span&gt;&lt;!--
--&gt;&lt;span&gt;ller.net&lt;/span&gt;
</pre>
</ul>
-->
<h4>After the commercial break...</h4>
<ol> 
<li> If you add borders, padding, or margins, you may find that fluid layouts are screwed.<br>
This is not the fault of inline-block, but does get in the way of its use.<br>
The solution for this is in part two.
</li>
<!--
<li> The standards do not allow for block level elements to be put into inline elements.<br>
As much as this can be an issue is dealt with in part two.
</li>
-->
<li> Mixing fixed widths with percentage widths is known as the holy grail of layouts.<br>
For that, please hold out till part III
</li>
</ol>
<br>
<hr>
<br>
<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/siteroller/embed.js"></script><noscript><a href="http://siteroller.disqus.com/?url=ref">View the discussion thread.</a></noscript><a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
	
			</div>
		</div>
	</div>
	<script type="text/javascript">
	//<![CDATA[
	(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
		if(links[i].href.indexOf('#disqus_thread') >= 0) {
			query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
		}
		}
		document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/siteroller/get_num_replies.js' + query + '"></' + 'script>');
	})();
	//]]>
	</script>
	<?php  
		$gu_siteid="bn2ahxv";
		$gu_param = "st=".$gu_siteid."&ref=".urlencode($_SERVER['HTTP_REFERER'])."&vip=".$_SERVER['REMOTE_ADDR']."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&cur=".urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&b=2";
		@readfile("http://counter.goingup.com/phptrack.php?".$gu_param); 
	?>
</body>
</html>
