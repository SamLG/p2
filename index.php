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
</head>

<body>
	<h1>xkcd Password Generator</h1>
	<h2><?php echo $password; ?></h2>
	<form action="index.php" method="GET">
		<label for="number_Words"># of Words</label>
		<input type="text" name="number_Words" maxlength="1" value="<?php echo $numberWords?>">(Max 9) <em><?php echo $wordError?></em>
		<br>
		<label for="add_Number">Add a number </label>
		<input id="add_a_number" type="checkbox" name="add_Number" <?php echo $addNumber ?>>
		<br>
		<label for="add_Symbol">Add a symbol </label>
		<input id="add_a_symbol" type="checkbox" name="add_Symbol" <?php echo $addSymbol ?>>
		<br>
		<label for="make_Upper">MAKE ALL UPPERCASE</label>
		<input type="radio" name="case" value="make_Upper" <?php echo $upper ?>>
		<br>
		<label>make all lowercase</label>
		<input type="radio" name="case" value="make_Lower" <?php echo $lower ?>>
		<br>
		<label>make camelCase</label>
		<input type="radio" name="case" value="make_Camel" <?php echo $camel?>>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>