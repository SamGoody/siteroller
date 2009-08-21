<?php
	// If Submit button has been pressed.
	if (array_key_exists('submit',$_POST)) require_once('download-builder.php');
	echo '<?xml version="1.0" encoding="utf-8" ?>';
?>

<!doctype>
<html>
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en-us" />
		<title>MooRTE Download Builder</title>
		<script src="../../../siteroller/classes/libs/moo.122.js" type="text/javascript" ></script>
		<script src="checkboxes.js" type="text/javascript"></script>
	</head>
	<body>
	
	<!--
		1. Choose your buttons
		2. Arrange Buttons
		3. Choose your Skin
		4. Download
	-->
		<div id="siteContainer">
			<div id="mooRTEForm">
				<form method="post" id="mooRTE_checkboxes" action="<?php echo (trim(strip_tags(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8')))); ?>">
					<fieldset>
						<legend>MooRTE Download Builder</legend> 
						<p id="formHeader">
							<label><img src="../moorte/images/uncheck.jpg" alt="Check all Button" id="chkbx" /> Check All</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="bold" class="toggle check-me" id="bold" value="Bold" />
							<label for="bold">Bold</label>
						</p> 
						<p class="even">
							<label><input type="checkbox" name="italic" class="toggle check-me" id="italic" value="Italic" /></label>
							<label for="italic">Italic</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="underline" class="toggle check-me" id="underline" value="Underline" />
							<label for="underline">Underline</label>
						</p>
						<p class="even">
							<input type="checkbox" name="strikethrough" class="toggle check-me" id="strikethrough" value="Strikethrough" />
							<label for="strikethrough">Strikethrough</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="subscript" class="toggle check-me" id="subscript" value="Subscript" />
							<label for="subscript">Subscript</label>
						</p>
						<p class="even">
							<input type="checkbox" name="superscript" class="toggle check-me" id="superscript" value="Superscript" />
							<label for="superscript">Superscript</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="indent" class="toggle check-me" id="indent" value="Indent" />
							<label for="indent">Indent</label>
						</p>
						<p class="even">
							<input type="checkbox" name="outdent" class="toggle check-me" id="outdent" value="Outdent" />
							<label for="outdent">Outdent</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="cut" class="toggle check-me" id="cut" value="Cut" />
							<label for="cut">Cut</label>
						</p>
						<p class="even">
							<input type="checkbox" name="paste" class="toggle check-me" id="paste" value="Paste" />
							<label for="paste">Paste</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="copy" class="toggle check-me" id="copy" value="Copy" />
							<label for="copy">Copy</label>
						</p>
						<p class="even">
							<input type="checkbox" name="redo" class="toggle check-me" id="redo" value="Redo" />
							<label for="redo">Redo</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="undo" class="toggle check-me" id="undo" value="Undo" />
							<label for="undo">Undo</label>
						</p>
						<p class="even">
							<input type="checkbox" name="justifyleft" class="toggle check-me" id="justifyleft" value="Justify Left" />
							<label for="justifyleft">Justify Left</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="justifycenter" class="toggle check-me" id="justifycenter" value="Justify Center" />
							<label for="justifycenter">Justify Center</label>
						</p>
						<p class="even">
							<input type="checkbox" name="justifyright" class="toggle check-me" id="justifyright" value="Justify Right" />
							<label for="justifyright">Justify Right</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="justifyfull" class="toggle check-me" id="justifyfull" value="Justify Full" />
							<label for="justifyfull">Justify Full</label>
						</p>
						<p class="even">
							<input type="checkbox" name="insertorderedlist" class="toggle check-me" id="insertorderedlist" value="Insert Ordered List" />
							<label for="insertorderedlist">Insert Ordered List</label>
						</p>
						<p class="odd">
							<input type="checkbox" name="insertunorderedlist" class="toggle check-me" id="insertunorderedlist" value="Insert Unordered List" />
							<label for="insertunorderedlist">Insert Unordered List</label>
						</p>
						<p class="even">
							<fieldset>
								<legend>Compression [optional]<legend>
								<input type="radio" name="compression" id="none" value="none" checked="checked" />
								<label for="none">None</label>
								<input type="radio" name="compression" id="deanedwardspacker" value="deanedwardspacker" />
								<label for="deanedwardspacker">Dean Edwards Packer</label>
								<!-- <input type="radio" name="compression" id="jsmin" value="jsmin" />
								<label for="jsmin">JSMin</label> -->
							</fieldset>
						</p>
						<p class="even">
							<input type="submit" name="submit" id="submit" value="SUBMIT" />
						</p>
					</fieldset>
				</form>
			</div> <!-- end.mooRTEForm -->
		</div> <!-- end.siteContainer -->
	</body>
</html>