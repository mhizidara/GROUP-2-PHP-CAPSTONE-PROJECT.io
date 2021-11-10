<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  //$to_value = convert_area($from_value, $from_unit, $to_unit);
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="resources/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="index.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Group2 Capstone Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">All Conversions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="area.php">Area</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="volume.php">Volume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lengthconvert.php">Length</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="temperature.php">Temparature</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="speed.php">Speed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="weight.php">Weight</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="time.php">Time</a>
            </li>            
            </ul>
        </div>
    </nav>
</head>

</head>
<body>
	<h1> SQUARE METER TO SQUARE KILOMETER</h1>
	<form method="post" action="">
		<label> METER </label>
		<input type="double" name="Square meter" value=<?php echo "$Kilometer"; ?>>
		<label> ==========> </label>
		<input type="double" name="Kilo meter" value=<?php echo "$Squaremeter"; ?>>
		<label> CENTIMETER </label>
		<br>





		<input type="submit" name="" value="Convert">


?>
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
