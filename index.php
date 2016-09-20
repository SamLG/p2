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
	<form>
		<label for="numberWords"># of Words</label>
		<input type="text" name="numberWords" maxlength="1">(Max 9)
		<br>
		<label for="addNumber">Add a number </label>
		<input type="checkbox" name="addNumber">
		<br>
		<label for="addSymbol">Add a symbol </label>
		<input type="checkbox" name="addSymbol">
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>