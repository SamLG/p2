<?php
	# Report Errors, Warnings, and Notices
	error_reporting(E_ALL);       
	# Display errors on page (instead of a log file)
	ini_set('display_errors', 1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>xkcd Password Generator</title>
	<?php require 'xkcd_logic.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/xkcd.css">
	<script type="text/javascript" src="js/xkcd.js"></script>
</head>

<body>
	<h1>xkcd Password Generator</h1>
	<h2><?php echo $password; ?></h2>
	<form action="index.php" method="GET">
		<label for="number_Words"># of Words</label>
		<input type="text" name="number_Words" maxlength="1" value="<?php echo $numberWords?>">(Max 9) <em><?php echo $wordError?></em>
		<br>
		<label for="chosenSymbol">Choose a separator </label>
		<input type="text" name="chosenSymbol" maxlength="1" value="<?php echo $symb?>">
		<br>
		<label for="add_Number">Add a number </label>
		<input id="numbers" type="checkbox" name="add_Number" <?php echo $addNumber ?> onclick="displayHowManyNumbers()">
		<fieldset id="number_quantity" style="display: none;">
			<label for="number_Numbers">How many?</label>
			<input type="text" name="number_Numbers" maxlength="1" value="<?php echo $numbers ?>">(Max 9)
		</fieldset>
		
		<br>
		<label for="add_Symbol">Add a symbol </label>
		<input id="symbols" type="checkbox" name="add_Symbol" <?php echo $addSymbol ?> onclick="displayHowManySymbols()">
		<fieldset id="symbol_quantity" style="display: none;">
			<label for="number_Symbols">How many?</label>
			<input type="text" name="number_Symbols" maxlength="1" value="<?php echo $symbols ?>">(Max 9)
		</fieldset>
		
		<br>
		<label for="make_Upper">MAKE ALL UPPERCASE</label>
		<input type="radio" name="case" value="make_Upper" <?php echo $upper ?>>
		<br>
		<label>make all lowercase</label>
		<input type="radio" name="case" value="make_Lower" <?php echo $lower ?>>
		<br>
		<label>make CamelCase</label>
		<input type="radio" name="case" value="make_Camel" <?php echo $camel?>>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>