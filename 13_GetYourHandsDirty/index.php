<?php
	
	// Constants
	
	
	// Custom Variables
	$species 		= "Donkey";
	$nativeLanguage = "English";
	$yearsOnEarth	= 35;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">

			<?php 
			
				if ($species == "Black Rhino") {
					echo "<p>Hey Rhino!</p>";
				} elseif ($species == "Human") {
					echo "<p>Welcome human.</p>";
				} else {
					echo "<p>Welcome to earth.</p>";
				}
			
			?>

			<h5>Another Example:</h5>

			<?php 
			
				if ($yearsOnEarth == 20) {
					echo "<p>Congratulations for being on earth for 20 years!</p>";
				} elseif ($yearsOnEarth < 20) {
					echo "<p>Too young</p>";
				} else {
					echo "<p>You must be more than 20 years old.</p>";
				}
			
			?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
