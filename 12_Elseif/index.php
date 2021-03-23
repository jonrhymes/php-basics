<?php
	
	// Constants
	$native_lang = "Spanish";
	
	// Custom Variables


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP </title>
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

				<?php 
				
					if($native_lang == "French") {
						echo "Bonjour! Oui, oui.";
					} elseif($native_lang == "Spanish") {
						echo "¡Hola! Usted habla Español.";
					} else {
						echo "Hello! You speak English.";
					}
				
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;</small>
		</div><!-- end wrapper -->
		
	</body>
</html>
