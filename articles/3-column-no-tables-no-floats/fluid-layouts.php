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
				
				<h2 style="text-align:center">Tableless Float-free Layouts Part 2:<br> 
				Fluid Layouts</h2>
<h4>Summary</h4>
For fluid layouts, make sure there is no room between your inline-blocked elements, then treat them as table cells: For IE 7-, set overflow to hidden. (<a href="fluid-layouts-demo-1.htm">Example</a>)
<pre>
css: 
  span,legend{ display:-moz-inline-box; display:inline-block;  }
  .td { overflow:hidden; }
html: 
  &lt;span class=&quot;td&quot;&gt;
	&lt;div&gt;Inner content&lt;/div&gt;
  &lt;/span&gt;&lt;span class=&quot;td&quot;&gt;
	&lt;div&gt;Inner content&lt;/div&gt;
  &lt;/span&gt;	<br>
</pre>

If you are willing to use JS to handle legacy IE, you can create fluid layouts without the extra markup.
<pre>
HTML:
  &lt;span class=&quot;td&quot;&gt;User&lt;/span&gt;&lt;input class=&quot;td&quot;&gt;

CSS for newer browsers:
  span,legend,input{ display:-moz-inline-box; display:inline-block;}
  .td{ box-sizing: border-box; -moz-box-sizing: border-box;
       -webkit-box-sizing: border-box; -ms-box-sizing: border-box; }
  .td{ /*arbitrary*/ border:solid; padding:3px; scroll:auto; width:50% }
  
JS for older versions of IE:
  See the end of the article

</pre>
<hr>
<h4>Boxing it nicely: the issues</h4>
<br>
Part one of this tutorial dealt with forms that only used fixed width elements.
<pre>
&lt;style&gt;#fixed span, #fixed input { width:120px }&lt;/style&gt;
&lt;form id='fixed'&gt;&lt;span&gt;Name:&lt;/span&gt;&lt;input&gt;&lt;/form&gt;
</pre>
A fluid layout is one that uses percentage based elements instead.<br>
In such a case the designer usually wants all columns, when combined, to equal 100% of the width of the screen or parent element, which invariably does not work:
Code:<pre>
&lt;style&gt;#fixed * {border:1px solid; width:50% }&lt;/style&gt;
&lt;form id='fixed'&gt;
	&lt;span&gt;Name: &lt;/span&gt;
	&lt;input&gt;
&lt;/form&gt;
</pre>
Output (Input wraps despite being 50%):
<style>#fixed * {border:1px solid; width:50% }</style>
<form id='fixed'>
	<span>Name: </span>
	<input>
</form>

<br><br>
There are two causes for this:
<ol>
<li>
The browsers treat an inline element as a word of text - so the line break in between the span and input becomes a space.
There is no room for two elements that are each 50%, AND a space.  The space pushes the second element down.
</li><li>
According to the <a href="http://reference.sitepoint.com/css/boxmodel">w3c box model</a>, the width of the element is measured only as the area where content can go.  The width does NOT include padding, borders, or margins.<br>
Since the input element has a 1px border, the browser must try to fit both elements, AND a 2px border. The border also doesn't fit. (And <a href="http://www.nytimes.com/1995/06/22/us/new-gloves-a-snug-fit-for-simpson.html">if it doesn't fit...</a>)
</li>
</ol>
<br>
Once the problems have been defined, one can probably guess the solutions:
<ol>
	<li>
		Don't leave space between elements.<br>
		Here are some alternative methods that avoid the space problem:
		<ul>
			<li>&lt;span&gt;Name:&lt;/span&gt;&lt;input&gt;</li>
			<li>&lt;span&gt;Name:<br>
			&lt;/span&gt;&lt;input&gt;
			</li>
			<li>
			   &lt;span&gt;Name:&lt;/span&gt;&lt;!--<br>
				--&gt;&lt;input&gt;
			</li>
		</ul>
	</li>
	<li>
		Don't use borders or padding.<br>
		Instead, put the elements with the borders/padding/etc <i>inside</i> the span that you have designated for the layout.<br>
		This will make your material both look and display like a table, but without the extra 'table' and 'tr' tags.<br>
<pre>
&lt;style&gt;#fixed{width:290px;border:solid} #fixed span{width:50%}&lt;/style&gt;
&lt;form id='fixed'&gt;
	&lt;span&gt;
		Name: 
	&lt;/span&gt;&lt;span&gt;
		&lt;input&gt;
	&lt;/span&gt;
&lt;/form&gt;
</pre>
		<style>#fixed2{width:290px; border:solid; } #fixed2 span {width:50%; overflow:hidden;}</style>
		<form id='fixed2'>
			<span>
				Name: 
			</span><span>
				<input>
			</span>
		</form><br>
	
		This also solves the one problem in FF2 alluded to earlier, that content directly in the 'layout' elements don't wrap properly.<br>
		Only gotcha - set overflow:hidden, as IE otherwise treats 'width' as 'max-width'. <br>
		And that I <u>hate</u> extra markup.<br>
		<br>
		<br>
		On a side note: According to the w3c spec, the inline-blocked element should be treated as a block level element. This means that divs and other block level elements can be put into it. Most validators get this right.  
		Nonetheless, the w3c's own validator shows this as an err.  If it bothers you not to be able to pass the incorrect validator, move on to part 2. 
	</li>
</ol>

<h4>Part two - The elegant method: </h4>
Problem #2 was that the W3C box model does not include the borders when calculating the elements width (causing the actual width to be too large).<br>
<br>
The simple, elegant solution: <i>Use a different box model</i>!<br>
<br>
After all, through IE5, Microsoft used what is known as the "traditional box model".<br>  
In this model, the width of the box included the paddings and borders of the box.<br>
If we could just go back to this model, the border of the input would be included in the width, and the element would not wrap!<br>
<br>
In Firefox, Webkit (Safari/Chrome), Opera, and Internet Explorer v8 this is done with proprietary box sizing properties (respectively):<br>
<pre>
.borderBox {
	-moz-box-sizing:border-box; 
	-webkit-box-sizing:border-box; 
	 box-sizing:border-box; 
	-ms-box-sizing: border-box; 
}
</pre>

Once we have done that, the sizing issue should work perfectly in IE8 and all versions of FF, Webkit and Opera.
<pre>
&lt;style&gt;#fixed * { 
	width:50%;  
	border:5px; padding:6px;
	display:-moz-inline-box; display:inline-block;
	-moz-box-sizing:border-box; 
	-webkit-box-sizing:border-box; 
	 box-sizing:border-box; 
	-ms-box-sizing: border-box; 
}&lt;/style&gt;
&lt;form id='fixed'&gt;&lt;span&gt;Name:&lt;/span&gt;&lt;input&gt;&lt;/form&gt;
</pre>
Guess where it won't work?!
Let me <a href="http://www.mindfly.com/blog/post/2009/06/17/Web-Developer-Weems-and-the-Case-of-the-Multiclass-Bungler-%28AKA-IE6%29.aspx">quote</a>:
<blockquote>
Think hard. It's the Internet. What possibly could ruin any good thing on the Internet? <br><br>
That's right. It's the undead shadow of life-stealing hunger that constantly radiates from Redmond. Despite having driven several silver stakes through its chest, even its own creator has been incapable of putting the dark beast to sleep. I speak, of course, of Internet Explorer 6. 
</blockquote>

So how do we deal with IE6 & 7?<br><br>
<div style="font-size:11px;border-left:1px solid brown; padding-left:4px;">
Now it just so happens that both of these browsers will switch to the traditional box model when in Quirksmode.<br>
So all you have to do is drop the &lt;!doctype&gt; declaration.... <b>NOT</b>!!!!!<br>
Don't you dare drop that doctype declaration.  <a href="http://imgs.xkcd.com/comics/goto.png">You will be attacked by a dinosaur!</a>  No, worse.<br>
Don't, don't, DON"T! Trust me! It would be more evil than <a href="http://www.isgoogleevil.com">Google</a>, er <a href="http://everything2.com/title/Why+Microsoft+is+evil">Microsoft</a>.<br>
</div>
<br>
So whats a dev to do?<br><br>

Javascript. <br>
<br>
Now, I'm not one to push for JS inside CSS.<br>
In fact, were it not for the fact that this is only to support legacy browsers (you know, the ones more than half the world are using..),
 I wouldn't even write it. 
 <br>Feel free to go back to method #1 if this is not acceptable.<br><br>

Still with me?
<h4> The Javascript</h4>

Note that you <i>could</i> use this JS by itself and drop the above CSS.  But I strongly discourage using JS any more than you must.<br>
<br>
As it turns out, creating the Javascript was hardly simple. Browsers do not offer any built in mechanism for measuring the size of an element without padding.<br>
Obtaining the padding, margin, borders, and scrollbars and subtracting them is no trivial feat either - valid "border-width" measurements include any number of pixel based, percenage based, and name based values (eg. border-width:medium 3% 12px;) <br>
If you are willing to do the math yourself, that could amount to just a line or two:<br><br>
<code>
&lt;!--[if lt IE 8]&gt;<br>
el.parentNode.clientWidth.slice(0,-2)/(the number of sections you want)-(your border+your padding) <br>
&lt;!--[endif]--&gt;<br>
</code>
<br>
However, you probably want a function that will do all the math for you.  Enjoy!<br>
<pre>
&lt;!--[if lt IE 8]&gt;
  function calc2(el, perc, margin){
    function W(w){
      w = w.split(' ');
      w = [w[1]||w[0],w[3],w[1],w[0]];
      var border = {thin:1,medium:2,thick:3};
      for(var i=0;i&lt;2;i++){
        m = w[i].replace(/px/g,'');
        if(m.slice(-1)=='%');
        if(border[w[i]])w[i]=border[w[i]];
        total+=m;
      }
      return total;
    }
    var cs = el.currentStyle, p = el.parentNode;
    return perc / 100 * (p.clientWidth - W(p.currentStyle.padding)) 
    - W(cs.borderWidth) - W(cs.padding) - (margin ? W(cs.margin) : 0);
  }
&lt;![endif]--&gt;
</pre>
Note that I did  not use Microsoft expression
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
