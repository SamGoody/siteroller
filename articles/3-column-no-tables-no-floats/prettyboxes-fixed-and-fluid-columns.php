<!doctype html>
<html>

<head>
	<title>3 Column layout without tables or floats - Part 2 - Pretty Forms - Holy Grail of layout</title> 
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
				
				<h2 style="text-align:center">Tableless Float-free Layouts Part 0:<br> 
				How to do it</h2>
				<h3>A Fairytale</h3>
<h4>Once upon a time, a long looong time ago....</h4>
Way back in the early days of the 'net..<br>
page layout was accomplished in one way and one way only: tables, more tables, and more tables.
(OK, and frames, but it's too painful to go there.)<br>
The logic was that any page could be broken up into as many small boxes as needed, and those boxes could then be designed pixel style.<br>
Layers of nested boxes was the norm, and its truly astonishing what the developers of yesteryear where able to do with them.<br>
<h4>Chapter 2</h4>
Then along came a new generation of designers who wanted a *better* structure.<br>
They wanted to split up the page into logical sections, and perhaps even use semantic tags or class names to identify those sections.<br>
And they wanted the flexibility of moving things around; the sort of movability that just doesn't fit well inside table cells.<br>
<br>
No more of creating rounded corners by chopping up the design into a nine-box table;<br> they wanted the rounded corners provided for by the browser, and a background stylesheet that allowed for the designer could cook up! <br>
"Separation of content and style" would be king!!<br>
"Logical content" would be the the mantra!!<br>
"We'll put the design in the stylesheeet, and the content - all of - into one big div."  Any further structure will match the content; none of this "content conforming to structure" business!! <br> 
<br>
And furthermore - it shouldn't be to hard on the programmer!!
<br>
<h4> Chapter 3</h4>
There was just one problem - the browsers were not up to it.<br>
Amazingly enough, the browsers are still not. <br>

Take these examples:
Two elements, each 125 pixels long, side by side.  The kind you see in every form (name:<input>). 
Doable, but hardly easy.  Only the brave venture here.
 
A large box, containing two smaller boxes - one in the top left, one in the bottom right. The outer box should stretch to contain them no matter what their size.
Forget it! No modern browser can do this without Javascript, despite it being a relatively common theme since day 1!

So the devs decided to drop the tables, but found that creating the layouts they were used to were simply unattainable.
The most common - three columns, any of them having either a fixed or fluid width, became known as the "holy grail", and a challenge to anyone wanting to prove his salts.
Hacks abound - A List Apart has published several articles on the subject, Stu and Dean have each weigheed in with their own attempts, and a search on Google shows dozens of other attempts.
[Including one attempt by someone who tries to make you use a table without realising it!]
Almost without exception, all of these hacks use either floats or positioned elements, neither of which handle equal column legths nicely.
Without exception, these hacks require cutting and pasting large chunks of code, and structuring the page in ways that are not at all intuitive.
And without exception, the hacks don't work perfectly in all browsers, in all instances.

There has been quite some kickback from all this.<br>
Some sane developers have just given up and returned to tables, since they have a singular undeniable advantage: THEY WORK!!

But most others solder on, either because that want to be standards compliant, or because their page layout won't work with tables<br>
If you want a neat drop down list under a div, the table will just be more nuisance than it is worth.

Fortunately, with the latest itirations of each browser things have improved greatly, and it is now possible to reach this "world cup" with but a few lines of understandable CSS.

Wish us luck as we try to layout the layout in a way that is both understandable and usable!

Part 1:
Lets start with simple form elements with fixed widths.
These elements should be inline elements such as a span, anchor, or legend. [Not a requirement.]
Add the following CSS to the head of your page:

Go see it in action. Read the article for the full scoop.
Now add that CSS to the head of any page you ever use.  It's a handy little addition to any page.

Ready?! Damn the torpedoes...

Part 2:
Fluid widths that together equal 100%
1. Make sure there is no spaces between your layout elements:
2. Add the following to the CSS for the elements that you are using for the layout:
.tr{overflow:hidden}
If the chosen element is a span, you might also want to reset the vertical-alignment to match those of other elements:
span.tr{overflow:hidden; vertical-align:top}

See it in action, or get the whole story here!

By the way, there really is a better way, but its not supported by IE6 or 7 yet.
I included the JavaScript needed to support those old beasts, but if you want to go that roue you will have to read the article. 

Starting to feel dizzy yet?! We're up to 34 knots...

Part 3:
Mixing those fixed columns with fluid columns
Coming soon, hopefully.

Part 4:
Some gotchas and pointers when using the pretty box method for layout
min and max width
equal length columns revisited
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
