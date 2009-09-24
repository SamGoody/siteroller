<!doctype html>
<html>

<head>
	<title>3  Column layout without tables or floats - equal length - Part 2 - Pretty Forms - Holy Grail of layout</title> 
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
					<img src="images/MenuTab.gif" id="menuBG" style="right:157px; width:70px" />
					<a href="#">Home</a><a href="#">All Projects</a><a href="index.htm" >Articles</a><a href="#"class="selected">3 Column</a><a href="faq.htm">Page1</a><a href="contact.html">Contact</a>
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
				<h3 style="text-align:center;">A Fairytale</h3>
<h4>Once upon a time, a long looong time ago....</h4>
Way back in the early days of the 'net..<br>
&nbsp;&nbsp;In those days page layout was accomplished in one way and one way only: tables, more tables, and more tables.
(OK, and frames, but it's too painful to go there.)<br>
The logic was that any page could be broken up into as many small boxes as needed, and those boxes could then be designed pixel style.<br>
Layers of nested boxes was the norm, and its truly astonishing what the developers of yesteryear where able to do with them.<br>
<h4>Chapter 2</h4>
Then along came a new generation of designers who wanted a *better* structure.<br>
They wanted to split up the page into logical sections, and perhaps even use semantic tags or class names to identify those sections.<br>
And they wanted the flexibility of moving things around; the sort of movability that just doesn't fit well inside table cells.<br>
<br>
No more of creating rounded corners by chopping up the design into a nine-box table;<br> &nbsp;&nbsp;They wanted the rounded corners provided for by the browser, and a background stylesheet that allowed for anything the designer could cook up! <br>
"Separation of content and style" would be king!!<br>
"Logical content" would be the the mantra!!<br>
"We'll put the design in the stylesheeet, and the content - all of - into one big div."  Any further structure will match the content; none of this "content conforming to structure" business!! <br> 
<br>
And furthermore - it shouldn't be to hard on the programmer!!
<br>
<h4> Chapter 3</h4>
There was just one problem - the browsers were not up to it.<br>
And, amazingly enough, the browsers are still not. <br>
<br>
Take these examples:
<ul>
<li>
Two elements, each 125 pixels long, side by side.<br>
The kind you see in every form (name:<input style="35px">). <br>
Doable, but hardly easy.  Only the brave venture here.
</li>
<li>
Two, equal-length, large elements, side by side.  The left one is 100px wide & has the navigation menu of the site.  The right-most one is the remainder of the page & has the actual content of the site.   
<br>Same concept as example #1 (solve one, you've solved the other), but adding a fluid element.  Used by almost half the web for their home page.<br>
And nigh unto undoable without a table.
</li>
</ul>
<!--
A large box, containing two smaller boxes - one in the top left, one in the bottom right. The outer box should stretch to contain them no matter what their size.
Forget it! No modern browser can do this without Javascript, despite it being a relatively common theme since day 1!
-->
So the devs decided to drop the tables, but found that the layouts they were used to were simply unattainable.<br>
One common layout in particular - three equal-length columns, any of them being either fixed or fluid width, became known as the "<a href="http://www.alistapart.com/articles/holygrail">holy grail"</a>, and a challenge to anyone wanting to prove his salts.<br>
<a href="http://www.noupe.com/css/9-timeless-3-column-layout-techniques.html">Hacks</a> <a href="http://www.pagecolumn.com">abound</a> - <a href="http://www.alistapart.com/topics/topic/layout/">A List Apart</a> <a href="http://www.alistapart.com/articles/fluidgrids/">has</a> <a href="http://www.alistapart.com/articles/negativemargins/">published</a> <a href="http://www.alistapart.com/articles/multicolumnlayouts/">several</a> <a href="http://www.alistapart.com/articles/flexiblelayouts/">articles</a> <a href="http://www.alistapart.com/articles/holygrail">on the</a> <a href="http://www.alistapart.com/articles/css3multicolumn/">subject</a>, 
<a href="http://www.cssplay.co.uk/layouts/three-column-layouts.html">Stu</a> <a href="http://www.cssplay.co.uk/layouts/3cols.html">Nicholas</a>, <a href="http://www.amazon.com/exec/obidos/ASIN/073571245X/">Eric</a>, <a href="http://www.amazon.com/exec/obidos/ASIN/0735712018/">Zeldman</a> and <a href="http://24ways.org/2008/absolute-columns">24 ways</a> have each weighed in with their own attempts, and a <a href="http://www.google.co.il/search?hl=en&safe=active&client=firefox-a&rls=org.mozilla%3Aen-US%3Aofficial&num=20&newwindow=1&q=3+column+layout&btnG=Search&meta=">search</a>  [a "<a href="http://www.bing.com/search?q=3+column+layout&go=&form=QBLH&filt=all">bing</a>"?] <a href="http://matthewjamestaylor.com/blog/perfect-3-column.htm">shows</a> thousands <a href="http://css-tricks.com/layout-packs">of</a> <a href="http://www.positioniseverything.net/guests/3colcomplex.html">other</a> <a href="http://jeffhowden.com/code/css/forms">attempts</a>.<br>
[The height of the absurdity here is that the #1 Google result once was a site that had you painstakingly recreate a table without your even realising it!]<br><br>
Almost without exception, all of these hacks use either floats or positioned elements, neither of which handle equal column legths nicely.<br>
Without exception, these hacks require cutting and pasting large chunks of code, and structuring the page in ways that are not at all intuitive.<br>
And without exception, the hacks don't work perfectly in all browsers, in all instances.<br>
<br>
There has been quite some <a href="http://www.flownet.com/ron/css-rant.html">kickback</a> from all this. [Enjoy  the <a href="http://giveupandusetables.com/">GiveUpAndUseTables.com</a> & <a href="http://shouldiusetablesforlayout.com">ShouldIuseTablesForLayout.com</a> debate, but check out the  <a href="http://ajaxian.com/archives/css-for-layout-another-rant">relevant threads</a> <a href="http://ajaxian.com/archives/css-and-tables-the-war-continues">on Ajaxian</a>. ;) ]<br>
<br>Some <a href="http://softwareas.com/tables-the-secret-behind-every-simple-css-form">sane</a> developers have just given up and returned to tables, since they have a singular undeniable advantage: THEY WORK!!<br>
They argue that "<a href="http://rondam.blogspot.com/2009/02/css-and-meaning-of-life.html">while CSS should be used for styling, tables should be used for layout.</a>"<br>
<br>
But <a href="http://stackoverflow.com/search?q=tables+layout">most others</a> solder on, either <a href="http://www.hotdesign.com/seybold/03overview.html">because</a> they want to be standards compliant or <a href="http://stackoverflow.com/questions/83073/why-not-use-tables-for-layout-in-html">because</a> their page layout won't work with tables.<br>
If you care about screen readers, maintainability, avoiding bulky markup, design consistancy, SEO, or if you just want a drop down list to sliiiide out from under a div, the table will just be more nuisance than it is worth.<br>
<br>
Fortunately, the browser vendors have also continued advancing, and even assuming support for a certain number of legacy browsers, this ideal is finally within practical reach.<br>
<br>
Wish us luck as we try to layout the layout in a way that is both understandable and usable [ &lt; 5 lines of logical CSS]!<br>
<br>
<h4>Chapter 4</h4>
<a href="http://siteroller.net/articles/3-column-no-tables-no-floats/pretty-forms-1.php">Part 1</a>:<br>
<h5>Let us start with simple form elements with fixed widths.</h5>

<ol>
<li>
Choose the elements you will use for your layout.  I recommend spans.
</li>
<li>
Add the following CSS to the head of your page:<br>
</li>

<pre>
  span,legend{ display:-moz-inline-box; display:inline-block;  }
</pre>
<li>
If you ignored my advice and used a block level element, you must add the following second rule:
</li>
<pre>
  div.td{ _display:inline; }
</pre>
</ol>
Done!  Go <a href="http://siteroller.net/articles/3-column-no-tables-no-floats/pretty-forms-demo-1.htm">see it in action</a>. Or read <a href="http://siteroller.net/articles/3-column-no-tables-no-floats/pretty-forms-1.php">the article</a> for the full scoop.<br>
Add that CSS to the head of any page you ever use.  It's a handy little addition to any page.<br>
<br>
<!--
Ready?! Damn the torpedoes...<br>
<br>
-->
<a href="http://siteroller.net/articles/3-column-no-tables-no-floats/fluid-layouts.php">Part 2</a>:<br>
<h5>Percentage based widths that equal 100%</h5>
<ol>
<li> Make sure there is no spaces between your layout elements</li>
<li> Add the following to the CSS for the elements that you are using for the layout:</li>
<pre>
.tr{overflow:hidden}
</pre>
<li>
If the chosen element is a span, reset the vertical-alignment to match those of other elements:
</li>
<pre>
span.tr{overflow:hidden; vertical-align:top}
</pre>
</ol>
<a href="http://siteroller.net/articles/3-column-no-tables-no-floats/fluid-layouts-demo-1.htm">See it in action</a>, or get <a href="http://siteroller.net/articles/3-column-no-tables-no-floats/fluid-layouts.php">the whole story here</a>!<br>
<br>
By the way, there really is a better way, but its not supported by IE6 or 7 yet.<br>
I included the JavaScript needed to support those old beasts, but if you want to go that roue you will have to read the article. <br>
<br>
Starting to feel dizzy yet?! We're up to 34 knots...<br>
<br>
Part 3:<br>
Mixing those fixed columns with fluid columns<br>
Coming soon, hopefully.<br>
<br>
Part 4:<br>
Some gotchas and pointers when using the pretty box method for layout<br>
min and max width<br>
equal length columns revisited<br>

<h4>Chapter 5</h4>
<h5> The whole code, all together in one place.  Here to save the princess.</h5>
<pre>
CSS:
  span,legend{ display:-moz-inline-box; display:inline-block;  }
  span.td{ overflow:hidden; vertical-align:top }
  span.td{ width:50% }
  
HTML:
  &lt;span class=&quot;td&quot;&gt;
	&lt;div&gt;elements relating to the side bar&lt;/div&gt;
  &lt;/span&gt;&lt;span class=&quot;td&quot;&gt;
    &lt;div&gt;content that belongs in the middle of the page&lt;/div&gt;
  &lt;/span&gt;
</pre>  
<h4>Chapter 6</h4>
And they lived happily ever after.<br>
THE END
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
