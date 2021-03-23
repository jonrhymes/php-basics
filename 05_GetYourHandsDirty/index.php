<?php 

    define("TITLE", "Variable and constants");
    $name       = "Jon";
    $birth_year = 1985;
    $color      = "black";

    date_default_timezone_set('America/New_York');

    $today      = date('F j, Y');
    $this_year  = date('Y');

    $age        = ($this_year - $birth_year);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Hands Dirty</title>
</head>
<body>
    <h1>Get Your Hands Dirty: <?php echo TITLE; ?></h1>
        <h3>Today's date:</h3>
        <p><?php echo $today; ?></p>

        <h3>My name:</h3>
        <p><?php echo $name; ?></p>

        <h3>My age:</h3>
        <p><?php echo $age; ?></p>

        <small><?php echo $this_year; ?> <?php echo $name; ?></small>
    
</body>
</html>