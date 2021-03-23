<?php

// Constants
define("TITLE", "Arrays");

// Variables
$my_name = "Jonathan Rhymes";

// Arrays
$age_group = array("child", "teenager", "adult");

$handlebar = array(
				"name" 	=> "Handlebar",
				"color" => "black"
);

$fu_manchu = array(
				"name" 	=> "Fu Manchu",
				"color" => "brown"
);

$salvador_dali = array(
				"name" 	=> "Salvador Dali",
				"color" => "blonde"
);

$gentlemen = array(
				array(
					"first_name" => "Carter",
					"country" => "Canada"
				),
				array(
					"first_name" => "Rodrigo",
					"country" => "Uruguay"
				),
				array(
					"first_name" => "Giovanni",
					"country" => "Italy"
				)
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0]['first_name']; ?> from <?php echo $gentlemen[0]['country']; ?></h3>
				<p><?php echo $gentlemen[0]['first_name']; ?> is quite the <?php echo $age_group[2]; ?>! He sports a solid <?php echo $handlebar['name']; ?> moustache that is <?php echo $handlebar['color']; ?> in color.</p>
				
				<h3><?php echo $gentlemen[1]['first_name']; ?> from <?php echo $gentlemen[1]['country']; ?></h3>
				<p><?php echo $gentlemen[1]['first_name']; ?> is quite the <?php echo $age_group[1]; ?>! He sports a solid <?php echo $fu_manchu['name']; ?> moustache that is <?php echo $fu_manchu['color']; ?> in color.</p>

				<h3><?php echo $gentlemen[2]['first_name']; ?> from <?php echo $gentlemen[2]['country']; ?></h3>
				<p><?php echo $gentlemen[2]['first_name']; ?> is quite the <?php echo $age_group[0]; ?>! He sports a solid <?php echo $salvador_dali['name']; ?> moustache that is <?php echo $salvador_dali['color']; ?> in color.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

	</body>
</html>
