<?php

	#get data from form
	// echo '<pre>';
	// var_dump($_GET);
	// echo '</pre>';

	// $filename = 'http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html';
	// $page = file_get_contents($filename);
	// $page = preg_replace('/\s\s+/', '', $page); 
	// preg_match_all('/(?:<li>)(.+?)(?:<\/li>)/', $page, $matches);
	// $file = 'list.txt';
	// foreach ($matches[0] as $val) {
	// 		$item = preg_replace('/<li>/', '', $val);
	// 		$item = preg_replace('/<\/li>/', '', $item);

	// 	    file_put_contents($file, $item . ',', FILE_APPEND);
	// }

	// $wordsList = explode(",", file_get_contents($file));

		$filename = 'https://en.wikipedia.org/wiki/List_of_animal_names';
	$page = file_get_contents($filename);
	$page = preg_replace('/\s\s+/', '', $page); 
	preg_match_all('/(?:title=".*">)(.*?)(?:<\/a><\/td>)/', $page, $matches);
	$file = 'list.txt';
	foreach ($matches[0] as $val) {
			$item = preg_replace('/title=".*">/', '', $val);
			$item = preg_replace('/<\/a><\/td>/', '', $item);

		    file_put_contents($file, $item . ',', FILE_APPEND);
	}

	$wordsList = explode(",", file_get_contents($file));
	// $wordsList = [
	// 	'apples',
	// 	'bananas',
	// 	'pears',
	// 	'cherries',
	// 	'peaches',
	// 	'strawberries',
	// 	'kiwis',
	// 	'oranges',
	// 	'lemons',
	// 	'pinneaples',
	// 	'lychees',
	// 	'blueberries'
	// ];
	# initialize $password to empty string
	$password = '';
	$numberWords = '';
	# I initialized these variables to be empty strings so that I could set their values, if they already had input from a user. This reflects Susan's xkcd example.
	$upper = '';
	$lower = '';
	$camel = '';
	$symb = '';
	$wordError = '';
	$addNumber = '';
	$addSymbol = '';
	$numbers = '';
	$symbols = '';
	$submitError = '';

	# loading the page without hitting submit, need to ensure that the key has been created before calling it
	if (array_key_exists('number_Words', $_GET)) {
		$numberWords = $_GET['number_Words'];
	}

	# make sure that # of words has input before continuing
	if ($numberWords != '') {
		# if value is not numeric display an error
		if (!is_numeric($numberWords)) {
			$wordError = 'Not a numerical value';
		}
		else {
			for ($i = 1; $i <= $numberWords; $i++) {
				# choose random index in wordsList array
				$word = $wordsList[rand(0,(count($wordsList)-1))];

				# I originally adjusted the password for case out of the word selection, but moved the adjustment here for more control
				if (array_key_exists('case', $_GET) && $_GET['case'] == 'make_Camel') {
					$word = substr_replace($word, strtoupper($word{0}), 0, 1);
					$camel = 'checked="checked"';
				}
				else if (array_key_exists('case', $_GET) && $_GET['case'] == 'make_Upper') {
					$word = strtoupper($word);
					$upper = 'checked="checked"';
				}
				else if (array_key_exists('case', $_GET) && $_GET['case'] == 'make_Lower') {
					$word = strtolower($word);
					$lower = 'checked="checked"';
				}
				$password .= $word;
				if ($i < $numberWords && array_key_exists('chosenSymbol', $_GET)) {
					$symb = $_GET['chosenSymbol'];
					$password .= $symb;

				}
			}
		}
	}


	# test to see if input is checked, also have to make sure that key exists
	if (array_key_exists('add_Number', $_GET) && $_GET['add_Number']== 'on') {
		$password .= rand(0,9);
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addNumber = 'checked="checked"';

		$numbers = $_GET['number_Numbers'];
		if ($numbers != '' && is_numeric($numbers) && $numbers > 0) {
			for ($i = 1; $i < $numbers; $i++) {
				$password .= rand(0,9);				
			}

		}
	}

	# test to see if input is checked
	if (array_key_exists('add_Symbol', $_GET) && $_GET['add_Symbol']== 'on') {
		$password .= chr(rand(33,44));
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addSymbol = 'checked="checked"';

		$symbols = $_GET['number_Symbols'];
		if ($symbols != '' && is_numeric($symbols) && $symbols > 0) {
			for ($i = 1; $i < $symbols; $i++) {
				$password .= chr(rand(33,44));			
			}
		}
	}

	# make sure that some selections were made after submit
	if ($password == '' && isset( $_GET['submit'])) {
		$submitError = '* No Password Selections Were Made *';
	}
