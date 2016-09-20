<?php

	#get data from form
	var_dump($_POST);

	# initialize $numWords to 1
	$numWords = 1;
	# initialize $addNum to FALSE
	$addNum = FALSE;
	# initialize $addSymbol to FALSE
	$addSymbol = FALSE;
	# create list of words for password
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

/*	for ($i = 1; $i <= $numWords; $i++) {
		$password .= $wordsList[rand(0,count(($wordsList)-1))];
	}

	# test to see if input is checked
	if (isset($addNum)) {
		$password .= rand(0,9);
	}

	# test to see if input is checked
	if (isset($addSymbol)) {
		$password .= '';
	}*/