<?php
	$RetVal = array();
	$Question = new stdClass;
	$Question->id = 'Question01';
	$Question->title = 'What is the machine learning?';
	$Question->poster = 'Xing';
	$Question->date = '2018/03/03';
	$Question->Answers = array();
	$answer = new stdClass;
	$answer->poster = 'Wang';
	$answer->date = '2018/03/05';
	$answer->answer = "Please check bellow url.";
	array_push($Question->Answers, $answer);
	$answer = new stdClass;
	$answer->poster = 'Will';
	$answer->date = '2018/03/06';
	$answer->answer = "Machine Learning is machine learning.";
	array_push($Question->Answers, $answer);
	array_push($RetVal, $Question);

	$Question = new stdClass;
	$Question->id = 'Question01';
	$Question->title = 'What is php?';
	$Question->poster = 'Xing';
	$Question->date = '2018/03/06';
	$Question->Answers = array();
	$answer = new stdClass;
	$answer->poster = 'Wang';
	$answer->date = '2018/03/05';
	$answer->answer = "PHP is personal home page in original.\nFor now it's a PHP hypertext preprocessor.";
	array_push($Question->Answers, $answer);

	array_push($RetVal, $Question);
	echo json_encode($RetVal);
?>