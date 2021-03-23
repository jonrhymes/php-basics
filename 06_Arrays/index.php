<?php
	
	// Constants
	define("TITLE", "Arrays");

	$lesson_num = 6;
	
	// Custom Variables

	date_default_timezone_set('America/New_York');

	$name = "Jonathan Rhymes";

	
	// Moustache Array
	$mustaches = array("Handlebar", "Salvador Dali", "Fu Manchu");
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Arrays</title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $mustaches[0]; ?></li>
					<li><?php echo $mustaches[1]; ?></li>
					<li><?php echo $mustaches[2]; ?></li>
				</ul>
				
			</div>
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $name; ?></small>
		</div>

	</body>
</html>
