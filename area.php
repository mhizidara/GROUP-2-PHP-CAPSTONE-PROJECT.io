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
  
  $to_value = convert_area($from_value, $from_unit, $to_unit);
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
