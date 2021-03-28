<?php
	
	// Constants
	$lessonNum 				= 14;
	
	// Custom Variables
	$yearsOnEarth			= 25.32;
	$favoriteStringNum		= "1";
	$birthCountry			= "Canada";


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
			
			<h1>Tutorial <!-- LESSON NUMBER -->: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if ($yearsOnEarth == 25.32){
						echo "<p>Your age is equal to $yearsOnEarth</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if ($favoriteStringNum === 1){
						echo "<p>Your favorite number is an integer.</p>";
					} elseif($favoriteStringNum === "1") {
						echo "<p>Your favorite number is a string called 1!</p>";
					} else {
						echo "<p>Your number is different!</p>";
					}
	
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if ($birthCountry != "Mexico") {
						echo "<p>You must not be from Canada</p>";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if ($yearsOnEarth !== "25.32"){
						echo "<p>You are not exactly the string \"$yearsOnEarth\"</p>";
					} else {
						echo "<p>You are  exactly the string \"$yearsOnEarth\"</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if ($lessonNum < 15) {
						echo "<p>You haven't quite made it to lesson 15 yet.</p>"
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if ($lessonNum > 10) {
						echo "<p>You made it past lesson 10</p>"
					}					// your code here
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if ($lessonNum <= 14) {
						echo "<p>$lessonNum is less than or equal to 14.</p>"
					}					// your code here
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if ($lessonNum >= 14) {
						echo "<p>$lessonNum is greater than or equal to 14.</p>"
					}					// your code here
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
