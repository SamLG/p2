<?php

	#get data from form
	// echo '<pre>';
	// var_dump($_GET);
	// echo '</pre>';

	# make sure that I only scrape the website once
	if (!file_exists('list.txt') or filesize('./list.txt') == 0 ) {
		$filename = 'https://en.wikipedia.org/wiki/List_of_animal_names';
		$page = file_get_contents($filename);
		$page = preg_replace('/\s\s+/', '', $page); 
		preg_match_all('/(?:title=".*">)(.*?)(?:<\/a><\/td>)/', $page, $matches);
		$file = 'list.txt';
		foreach ($matches[0] as $val) {
				$item = preg_replace('/title=".*">/', '', $val);
				$item = preg_replace('/<\/a><\/td>/', '', $item);
				$item = str_replace(' ', '', $item);
				$item = strtolower($item);

			    file_put_contents($file, $item . ',', FILE_APPEND);
		}
	}
	

	$wordsList = explode(",", file_get_contents('./list.txt'));
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
	/* initialize $password to message, so that before any submissions the user is indicated
	   where the password will show up, and so that h2 doesn't start out empty, which causes
	   a w3 validator error of 'Empty heading' */
	$password = 'Your password will display here';
	$numberWords = '';
	# I initialized these variables to be empty strings so that I could set their values, if they already had input from a user. This reflects Susan's xkcd example.
	$upper = '';
	$lower = '';
	$camel = '';
	$symb = '';
	$wordError = 'none';
	$addNumber = '';
	$viewNumber = 'none';
	$numberError = 'none';
	$addSymbol = '';
	$viewSymbol = 'none';
	$symbolError = 'none';
	$numbers = '';
	$symbols = '';
	$submitError = '';

	/* because the password was created with an initial value, if there is a form submission
	   I need to clear that value before the password pieces are appended to it*/
	if (isset( $_GET['submit'])) {
		$password = '';
	}

	/* loading the page without hitting submit, need to ensure that the key has been created 
	   before calling it */
	if (isset($_GET['number_Words'])) {
		$numberWords = $_GET['number_Words'];
	}

	/* make sure that # of words has input before continuing, user is allowed to not use this feature, so no error if no input */
	if ($numberWords != '') {
		# if value is not numeric display an error
		if (!is_numeric($numberWords) || $numberWords <= 0) {
			$wordError = 'inline';
		}
		else {
			for ($i = 1; $i <= $numberWords; $i++) {
				$word = '';

				#just in case any of the words from the array are empty strings, make sure I get a word
				while ($word == '') {
					//echo 'loop #'.$i.': word was empty ... ';
					# choose random index in wordsList array
					$word = $wordsList[rand(0,(count($wordsList)-1))];
				}
				
				/* I originally adjusted the password for case out of the word selection, 
				but moved the adjustment here for more control and also having case and
				symbol selection in here makes it so that these values only persist if 
				words are selected */ 
				if (array_key_exists('case', $_GET) && $_GET['case'] == 'make_Camel' && $i > 1) {
					$word = substr_replace($word, strtoupper($word{0}), 0, 1);
					# the case & symbol values don't persist if there are no words chosen
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
				# append symbol to all words but last
				if ($i < $numberWords && isset($_GET['chosenSymbol'])) {
					$symb = $_GET['chosenSymbol'];
					$password .= $symb;

				}
			}
		}
	}


	# test to see if input is checked, also have to make sure that key exists, if checked user is committed to at least one number even if input is 0 or NaN
	if ( isset($_GET['add_Number'])) {
		$password .= rand(0,9);
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addNumber = 'checked="checked"';
		$viewNumber = 'inline';

		$numbers = $_GET['number_Numbers'];
		if(!is_numeric($numbers) || $numbers <= 0 || $numbers == '') {
			$numberError = 'inline';
		}
		else {
			for ($i = 1; $i < $numbers; $i++) {
				$password .= rand(0,9);		
			}		
		}
	}

	# test to see if input is checked, if checked the user is committed to at least one symbol even if there input is 0 or NaN
	if (isset($_GET['add_Symbol'])) {
		$password .= chr(rand(33,44));
		# I set the checked value in its entirety, since it must be either checked='checked' or non existent
		$addSymbol = 'checked="checked"';
		$viewSymbol = 'inline';

		$symbols = $_GET['number_Symbols'];
		if(!is_numeric($symbols) || $symbols <= 0 || $symbols == '') {
			$symbolError = 'inline';
		}
		else {
			for ($i = 1; $i < $symbols; $i++) {
				$password .= chr(rand(33,44));			
			}
		}
	}

	# make sure that some selections were made after submit
	if ($password == '' && isset( $_GET['submit'])) {
		$submitError = '* No Password Selections Were Made *';
	}
