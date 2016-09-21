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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"">
	<link rel="stylesheet" type="text/css" href="css/xkcd.css">
	<script type="text/javascript" src="js/xkcd.js"></script>
</head>

<body>
	<main class="container">
		<div class="row">
			<div class="text-center col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<h1>xkcd Password Generator</h1>
			</div>
		</div>
		<div class="row">
			<div class="text-center col-md-12 col-sm-12">
				<h2><?php echo $submitError ?> <?php echo $password ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<form action="index.php" method="GET">
					<label for="number_Words"># of Words</label>
					<input type="text" name="number_Words" maxlength="1" value="<?php echo $numberWords?>">(Max 9) <em><?php echo $wordError?></em>
					<br>
					<label for="chosenSymbol">Choose a separator </label>
					<input type="text" name="chosenSymbol" maxlength="1" value="<?php echo $symb?>">
					<br>
					<label for="add_Number">Add a number </label>
					<input id="numbers" type="checkbox" name="add_Number" <?php echo $addNumber ?> onclick="displayHowManyNumbers()">
					<fieldset id="number_quantity" style="display: <?php echo $viewNumber?>;">
						<label for="number_Numbers">How many?</label>
						<input id="number_Numbers" type="text" name="number_Numbers" maxlength="1" value="<?php echo $numbers ?>">(Max 9)
					</fieldset>
					
					<br>
					<label for="add_Symbol">Add a symbol </label>
					<input id="symbols" type="checkbox" name="add_Symbol" <?php echo $addSymbol ?> onclick="displayHowManySymbols()">
					<fieldset id="symbol_quantity" style="display: <?php echo $viewSymbol ?>;">
						<label for="number_Symbols">How many?</label>
						<input id="number_Symbols" type="text" name="number_Symbols" maxlength="1" value="<?php echo $symbols ?>">(Max 9)
					</fieldset>
					
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
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</main>
</body>
</html>