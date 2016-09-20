<?php

	#get data from form
	echo '<pre>';
	var_dump($_GET);
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
	$password = '';
	$numberWords = '';

	# loading the page without hitting submit, need to ensure that the key has been created before calling it
	if (array_key_exists('number_Words', $_GET)) {
		$numberWords = $_GET['number_Words'];
	}

	if (is_numeric($numberWords)) {
		echo "is numeric";
		}
	else {
			echo "not";
	}

	if ($numberWords != '' && is_numeric($numberWords)) {
		for ($i = 1; $i <= $numberWords; $i++) {
			# choose random index in wordsList array
			$password .= $wordsList[rand(0,(count($wordsList)-1))];
			if ($i < $numberWords) {
				$password .= '-';
			}
		}
	}

	# I initialized this variable to be an empty string so that I could set the checkboxes, if they were already checked by a user. This reflects Susan's xkcd example.
	$addNumber = '';
	# test to see if input is checked, also have to make sure that key exists
	if (array_key_exists('add_Number', $_GET) && $_GET['add_Number']== 'on') {
		$password .= rand(0,9);
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addNumber = 'checked="checked"';
	}

	# I initialized this variable to be an empty string so that I could set the checkboxes, if they were already checked by a user. This reflects Susan's xkcd example.
	$addSymbol = '';
	# test to see if input is checked
	if (array_key_exists('add_Symbol', $_GET) && $_GET['add_Symbol']== 'on') {
		$password .= chr(rand(33,44));
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addSymbol = 'checked="checked"';
	}




