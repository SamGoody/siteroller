<?php
	$filename = $_GET['$zip'];
	header('Pragma: public');
	header('Content-type: application/zip');
	//header('Content-length: ' . filesize($filename));
	header('Content-Disposition: attachment; filename="MooRTE.zip"');
	readfile($filename);
	exit;
?>