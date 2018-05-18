<?php
	$dir = "./img/";
	$files = scandir($dir);
	$retVal = array();
	for( $i = 0; $i < count($files); $i++){
		if( $files[$i] == '.' || $files[$i] == '..')continue;
		$member = new stdClass;
		$member->name = substr($files[$i], 0, strrpos($files[$i], '.'));
		$member->url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'img/' . $files[$i];
		array_push($retVal, $member);
	}
	echo json_encode($retVal);
?>