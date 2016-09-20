<?php

	#get data from form
	echo '<pre>';
	var_dump($_POST);
	echo '</pre>';

	$wordsList = [
		'apples',
		'bananas',
		'pears',
		'cherries',
		'peaches',
		'strawberries',
		'kiwis',
		'oranges',
		'lemons',
		'pinneaples',
		'lychees',
		'blueberries'
	];
	# initialize $password to empty string
	$password = 'test';

	$numberWords = $_POST['numberWords'];

	echo (int)$numberWords;

/*	if (!empty($numberWords) && (int)$numWords > 0) {

	}
	else {
		# code...
	}

	for ($i = 1; $i <= ; $i++) {
		$password .= $wordsList[rand(0,count(($wordsList)-1))];
	}*/

	# test to see if input is checked, also have to make sure that key exists
	if (array_key_exists('addNumber', $_POST) && $_POST['addNumber']== 'on') {
		$password .= rand(0,9);
	}

	# test to see if input is checked
/*	if (isset($addSymbol)) {
		$password .= '';
	}*/