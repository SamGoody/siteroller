<?php
E_ALL; 
/**
 * download-builder.php - MooRTE Download Builder Configuration File.
 *
 * This script allows for customization of moorte.js file prior to downloading.
 * The compression tools make use of Dean Edwards's Packer (PHP version), and Douglas Crockford's JSMin.
 * Copyrights are according to their respective licenses.
 * --
 *
 * @package MooRTE Download Builder
 * @author Hugo Buriel <hugo@burielwebwerx.com>
 * @author Sam Goody <SiteRoller@GMail.com>
 * @copyright 2002 Douglas Crockford <douglas@crockford.com> (JSMin)
 * @copyright 2008 Dean Edward's Packer <dean.edwards@gmail.com> (Packer)
 * @copyright 2009 authors
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @version 1.0 (2009-05-26)
 * @link http://burielwebwerx.com
 */

############################################################
############### MASTER SETTINGS ############################
############################################################

// Define constant for absolute path to root directory of server.
// e.g. /home/username/urlname
define ('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

############################################################
############### CONFIGURABLE SETTINGS ######################
############################################################

// Name the file that will be downloaded.
$files = "../../siteroller/classes/moorte/source/moorte";

// Location of Dean Edward's Packer (dep) script.
$depLocation = 'compression/DeanEdwardsPacker/class.JavaScriptPacker.php';

// Location of Douglas Crockford's JSMin script.
$jsMinLocation = 'compression/JSMin/jsmin-1.1.1.php';


############################################################
############### NO NEED TO EDIT BELOW ######################
############################################################
#0. If premade package, give it and lets go!
	if($_POST['complete_x']) return $filename = 'downloads/comp/moorte.zip';
	elseif($_POST['lite_x']) return $filename = 'downloads/lite/moorte.zip';
	
#1. Used for debuggging, shows up in zip file.
	$errors = '';
	$elements = array(
		1 =>'bold', 2 =>'italic', 3 =>'underline', 4 =>'strikethrough', 
		6 =>'justifyleft', 7 =>'justifyfull', 8 =>'justifycenter', 9 =>'justifyright', 18=>'subscript', 17=>'superscript', 
		11=>'outdent', 12=>'indent', 14=>'insertorderedlist', 15=>'insertunorderedlist', 20=>'cut', 21=>'copy', 22=>'paste', 
		25=>'selectall', 26=>'removeformat', 31=>'undo', 32=>'redo', 42=>'decreasefontsize', 41=>'increasefontsize', 
		56=>'inserthorizontalrule',  52 =>'blockquote', 46 => 'hyperlink',
		5=>'div'		
	);
	/*	
		//temporarily disabled:
		0=>'save', 260=>'Html/Text',  460=>'popupURL', 0=>'Upload Photo',
		6=>'Justify', 14=>'Lists', 11=>'Indents', 
		
		//download button list
		1 =>'Bold', 2 =>'Italic', 3 =>'Underline', 4 =>'Strikethrough', 
		6 =>'Justify Left', 7 =>'Justify Full', 8 =>'Justify Center', 9 =>'Justify Right', 18=>'Subscript', 17=>'Superscript', 
		12=>'Indent', 11=>'Outdent', 14=>'Ordered List', 15=>'Unordered List', 20=>'Cut', 21=>'Copy', 22=>'Paste', 
		25=>'Select All', 26=>'Remove All Formatting', 31=>'Undo', 32=>'Redo', 
		56=>'Horizontal Rule', 52=>'Blockquote'
	*/

	$images = array(
		'Tango'=>array('Tango.gif'),
		'Word03'=>array('Word03.gif','bg.gif')
	);
	
#2. Read moorte.js as a string.
	$code = file_get_contents("$files.js");	

#3. Remove the elements Hash and echo out the first part. (There's gotta be a better way than this...)
	$split = explode('MooRTE.Elements = new Hash(',$code);
	$code= $split[0]."MooRTE.Elements = new Hash({\n";

#12. Compile all requisite plugins.
	$pluginsList = array( 
		201 => array('simplepopup', array('popup.css','popup.js')),
		211 => array('simplepopup', array('popup.css','popup.js')),
		221 => array('simplepopup', array('popup.css','popup.js')),
		 20 => array('stickypopup', array('stickywin/clientcide.moore.js')),
		 21 => array('stickypopup', array('stickywin/clientcide.moore.js')),
		 22 => array('stickypopup', array('stickywin/clientcide.moore.js')),
		 46 => array('hyperlink',   array('stickywin/clientcide.moore.js'))
	);
	
#4. The items that have been selected should be compiled into their own associative array.   (Messy.  Is there no better method for filtering one array by the values of another?) 1. $hash = array_intersect_key($buttons,array_flip($GET_['buttons'])); or
	
	$star = '\/\*\#\*\/';
	$btnList = array(); $counter = 0; 
	//$errors .= $last;$last = count($_POST['group'])-1;
	
	foreach(explode('-',$_POST['groups']) as $group){ 
		$btns = array(); 
		
		foreach(explode('|',$group) as $p){
			if($p){
				//$errors .= $p."\n";
				if($it = $pluginsList[$p]) $usedPlugins[$it[0]] = $it[1];
				$p = $btns[] = $elements[$p];
				//$errors .= $p."\n";
				preg_match('/^'.$star.'\s*('.$p.'\s*:{.+?)'.$star.'/ms', $split[1], $matches);
				$code.=$matches[1];
			}
		}
		$abcd = $btnList[] = "'div.Toolbar':['".implode("','",$btns)."']";
		if($_POST['order'] == 'tabbed'){
			$show = $counter ? '[' : "'onLoad',onLoad:[";
			$label = $_POST['group'][$counter++];
			//$errors.="$counter, $last, $label, $show, $abcd \n"; 
			$endGroup[] = "$label:{text:'$label','class':'rteText',onClick:$show'group',{ $abcd}]}";	
		}
	}
	$code .= "div			 	:{element:'div'}";
	
	if ($_POST['order'] != 'tabbed') 
		$buttons = '{'.implode(",\n",$btnList).'}';
	else{
		$code .= ",\n".implode(",\n",$endGroup);
		$buttons = '{div.Menu:['.implode(',',$_POST['group']).']}';
	}
	
	//$errors .= $buttons."\n\n\n\n\n";
	
#5. replace options with correct newer options.
	$options = "options:{
		floating: ".$_POST['floating'].",
		location: '".$_POST['location']."',
		skin: '".$_POST['skin']."',
		elements: '".$_POST['elements']."',
		buttons: \"$buttons\"
	},";
	$defaults = "options:{floating: false,location: 'elements',buttons: 'Menu:[Main,File,Insert,save]',skin: 'Word03',elements: 'textarea, .rte'},";
	//$qq = explode($defaults, $code);
	//$errors .=  $qq[0];
	$code = implode($options, explode($defaults, $code));	
	
#6. Collections must be written.
	//foreach(collection) $code.="$title         :{text:$title,   'class':'rteText', onClick:['group',{div.Toolbar:[implode($into)]}] },";
	
#7. Close that with the final string ')';
	$code=rtrim($code,"\t \n\r,")."\n});";
	
	//var_dump($code);
	//die;
#8. Compress.  Options:
	switch($_POST['compression']){
		case 'deanedwardspacker':
			require_once($depLocation);
			$dePacker = new JavaScriptPacker($code, 'Normal', true, false);
			$code = $dePacker->pack();
			break;
		/* Commented out until ready for usage.
		case 'jsmin':
			require_once($jsMinLocation);
			// Output a minified version of example.js.
			echo JSMin::minify(file_get_contents('XXXXXXX.js'));
			break;
		*/
		case 'none':
			break;
	}
	
#9. Get  CSS file
	$style = file_get_contents("$files.css");

#10.  required skin from
	//$errors .= $style . '|'. '/* Begin '.$_POST['skin'];
	$split = explode('/* End General', $style);
	$splat = strstr($split[1],'/* Begin '.$_POST['skin']);
	$style = $split[0].substr($splat, 0, strpos($splat, '/* End'));
	//$style = $split[0].substr($split[1], $mid = strpos($split[1], '/* Begin '.$_POST['skin']), strpos($split[1], '/* End '.$_POST['skin']) - $mid); 
	
#11. Cleanup old zips that are laying around
	$cleanup = opendir('downloads'); 
	//Good, but lacks permissions! //while ($file = readdir($cleanup)) if($file != '.' && $file != '..' && is_numeric($file) && $file < time()) unlink("downloads/$file"); //:  - 86400
	
#13. Zip together with CSS:
	mkdir($path = 'downloads/'.time());
	$filename = "$path/moorte.zip";
	$zip = new ZipArchive;
	$res = $zip->open($filename, ZipArchive::CREATE);
	
	if ($res === TRUE) {
		//if(!$zip->addFile('../../siteroller/classes/moorte/source/moorte.css','moorte.css')) echo 'Unable to add css file';
		foreach($images[$_POST['skin']] as $img) if(!$zip->addFile("../../siteroller/classes/moorte/source/images/$img","js/mooRTE/images/$img")) echo 'Unable to add image';
	//	if(!$zip->addFromString('errors.txt', $errors)) echo 'Something went wrong';
		if(!$zip->addFromString('js/mooRTE/moorte.js', $code)) echo 'Something went wrong';
		if(!$zip->addFromString('js/mooRTE/moorte.css', $style)) echo 'Something went wrong';
		if(!$zip->addFile('../../siteroller/classes/jslibs/moo.123.js','js/mootools.123.js')) echo 'Unable to add mootools';
		if(!$zip->addFile('../../siteroller/classes/jslibs/moore.1231.js','js/mootools.more.1231.js')) echo 'Unable to add mootools more file';
		if(!$zip->addFile('../../siteroller/classes/moorte/samples/other/index.htm','index.html')) echo 'Unable to add mootools more file';
		if($usedPlugins[0]) foreach($usedPlugins as $plugin) foreach($plugin as $p) if(!$zip->addFile("../../siteroller/classes/$p","js/$p")) echo "Unable to add plugin $p";
		if(!$zip->close()) echo "There was a permissions error while trying to create the compressed file.";
	} else echo 'Unable to create zip file';
	

############################################################
################ Variations of method ######################
############################################################
	
#3a. Check for injection:
/*	foreach ($_POST as $key => $value) if (in_array($key, $expected)) ${$key} = $value;	*/

#3a. Attempt to parse the remaining Hash with json_decode was unsuccessful, as it does not handle javascript hashes, coughing on non double-quoted keys and functions.  What is it good for?
/*	$buttons = substr($split[1],0,-2);	
	$buttons = json_decode($buttons, true);
	foreach($_POST as $v=>$w) $hash[$v]=$buttons[$v];
	$code.= json_encode($hash); */
#3c. Preg used, with adoption of unquoted titles:
/*	preg_match('/^'.$star.'\s*('.$quote.$p.$quote.'\s*:{.+?)'.$star.'/ms', $split[1], $matches);	*/

#6a. Send HTTP headers to force download.
/*	header("Cache-Control: must-revalidate");
	header("Content-Description: File Transfer");
	header("Content-Type: text/javascript");
	header('Content-Length: '.strlen($code));
	header("Content-Disposition: attachment; filename=mooorte.js");	 
	echo $code;	*/	

#7a. Zip sample from php.net 
/* 	$zip = new ZipArchive();
	$filename = "./test112.zip";
	if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) exit("cannot open <$filename>\n");
	$zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
	$zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
	$zip->addFile($thisdir . "/too.php","/testfromfile.php");
	echo "numfiles: " . $zip->numFiles . "\n";
	echo "status:" . $zip->status . "\n";
	$zip->close(); */
	
#7b. Zip class from DavidWalsh.name:
/*	function create_zip($files = array(),$destination = '',$overwrite = false) {
		//if the zip file already exists and overwrite is false, return false
		if(file_exists($destination) && !$overwrite) { return false; }
		//vars
		$valid_files = array();
		//if files were passed in...
		if(is_array($files)) {
			//cycle through each file
			foreach($files as $file) {
				//make sure the file exists
				if(file_exists($file)) {
					$valid_files[] = $file;
				}
			}
		}
		//if we have good files...
		if(count($valid_files)) {
			//create the archive
			$zip = new ZipArchive();
			if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
				return false;
			}
			//add the files
			foreach($valid_files as $file) {
				$zip->addFile($file,$file);
			}
			//debug
			//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
			
			//close the zip -- done!
			$zip->close();
			
			//check to make sure the file exists
			return file_exists($destination);
		}
		else return false;
	}	*/
	
#8. Send zip headers and readfile:
/*	header('Pragma: public');
	header('Content-type: application/zip');
	header('Content-length: ' . filesize($filename));
	header('Content-Disposition: attachment; filename="MooRTE.zip"');
	readfile($filename);

	var_dump($_POST);
	
	exit; */
?>