<?php
	
	// Constants
	define("TITLE", "Associative Arrays");

	date_default_timezone_set('America/New_York');
	
	// Custom Variables
	$lesson_num 	= 7;
	$name 			= "Jonathan Rhymes";

	// Moustache Associative Array
	$handlebar = array(
				"name" => "Handlebar",
				"creep_factor" => "High",
				"avg_growth_days" => 14
	);
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $handlebar["name"]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $handlebar["creep_factor"]; ?></strong> and takes <strong><?php echo $handlebar["avg_growth_days"]; ?> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
	</body>
</html>
