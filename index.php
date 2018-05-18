<?php
	$dir = "./img/";
	$files = scandir($dir);
	$retVal = array();
	for( $i = 0; $i < count($files); $i++){
		if( $files[$i] == '.' || $files[$i] == '..')continue;
		$member = new stdClass;
		$member->name = substr($files[$i], 0, strrpos($files[$i], '.'));
		$member->url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'img/' . $files[$i];
		$member->time = strlen($member->name);
		$member->messages = [];
		$msg = new stdClass;
		$msg->name = $member->name;
		$msg->message = "My name is $member->name.\n Nice to meet you.";
		array_push( $member->messages, $msg);
		$msg = new stdClass;
		$msg->name = '@me@';
		$msg->message = "Thanks for your connecting.\n I am Wang.";
		array_push( $member->messages, $msg);
		$msg = new stdClass;
		$msg->name = $member->name;
		$msg->message = "Nice to meet you.";
		array_push( $member->messages, $msg);
		$msg = new stdClass;
		$msg->name = '@me@';
		$msg->message = "Nice to meet you too.";
		array_push( $member->messages, $msg);
		// $member->messages = [{'name':$member->name, 'message':'OK'}, {'name':'me', 'message':'Yes'}];
		array_push($retVal, $member);
	}
	echo json_encode($retVal);
?>