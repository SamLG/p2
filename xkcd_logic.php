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

	if (is_numeric($numberWords)) {
		echo "is numeric";
	}
	else {
		echo "not";
	}

	if ($numberWords != '' && is_numeric($numberWords)) {
		for ($i = 1; $i <= $_POST['numberWords']; $i++) {
				$password .= '*';
			}
	}
	// else {
	// 	# code...
	// }
//$wordsList[rand(0,count(($wordsList)-1))]
	# test to see if input is checked, also have to make sure that key exists
	if (array_key_exists('addNumber', $_POST) && $_POST['addNumber']== 'on') {
		$password .= rand(0,9);
	}

	# test to see if input is checked
/*	if (isset($addSymbol)) {
		$password .= '';
	}*/