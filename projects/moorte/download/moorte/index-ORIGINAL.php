<?php
// If Submit button has been pressed.
if (array_key_exists('submit',$_POST)) {
	require_once('download-builder.php');
} // Enf IF statement.


echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<title>MooTools dwCheckboxes Plugin Example</title>
<link  href="../moorte/moorte.css" rel="stylesheet" type="text/css" />
<script src="../moorte/moo.122.js" type="text/javascript" ></script>
<script src="../moorte/moore.1221.js" type="text/javascript" ></script>
<script src="../moorte/checkboxes.js" type="text/javascript" ></script>
</head>
<body>
<div id="siteContainer">
   	<form method="post" id="mooRTE_checkboxes"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>">
		<table cellpadding="0" cellspacing="0" class="list-table" width="300">
			<tr>
				<th width="30"><img src="../moorte/images/uncheck.jpg" id="ucuc" /></th><th>Check All</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="bold" class="toggle check-me" id="bold" value="Bold" /></td>
				<td>Bold</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="italic" class="toggle check-me" id="italic" value="Italic" /></td>
				<td>Italic</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="underline" class="toggle check-me" id="underline" value="Underline" /></td>
				<td>Underline</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="strikethrough" class="toggle check-me" id="strikethrough" value="Strikethrough" /></td>
				<td>Strikethrough</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="subscript" class="toggle check-me" id="subscript" value="Subscript" /></td>
				<td>Subscript</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="superscript" class="toggle check-me" id="superscript" value="Superscript" /></td>
				<td>Superscript</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="indent" class="toggle check-me" id="indent" value="Indent" /></td>
				<td>Indent</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="outdent" class="toggle check-me" id="outdent" value="Outdent" /></td>
				<td>Outdent</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="cut" class="toggle check-me" id="cut" value="Cut" /></td>
				<td>Cut</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="paste" class="toggle check-me" id="paste" value="Paste" /></td>
				<td>Paste</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="copy" class="toggle check-me" id="copy" value="Copy" /></td>
				<td>Copy</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="redo" class="toggle check-me" id="redo" value="Redo" /></td>
				<td>Redo</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="undo" class="toggle check-me" id="undo" value="Undo" /></td>
				<td>Undo</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="justifyleft" class="toggle check-me" id="justifyleft" value="Justify Left" /></td>
				<td>Justify Left</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="justifycenter" class="toggle check-me" id="justifycenter" value="Justify Center" /></td>
				<td>Justify Center</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="justifycenter" class="toggle check-me" id="justifycenter" value="Justify Right" /></td>
				<td>Justify Right</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="justifyfull" class="toggle check-me" id="justifyfull" value="Justify Full" /></td>
				<td>Justify Full</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="insertorderedlist" class="toggle check-me" id="insertorderedlist" value="Insert Ordered List" /></td>
				<td>Insert Ordered List</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="insertunorderedlist" class="toggle check-me" id="insertunorderedlist" value="Insert Unordered List" /></td>
				<td>Insert Unordered List</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="SUBMIT" /></td>
			</tr>
		</table>
	</form>
</div> <!-- end.siteContainer -->
</body>
</html>