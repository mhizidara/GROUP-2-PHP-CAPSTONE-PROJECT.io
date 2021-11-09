<?php
$celsius = 0.0;
$kelvin = 0.0;
if (isset($_POST['celsius'])) {
	$celsius = floatval($_POST['celsius']) ;
	$kelvin = $celsius+273 ;

    

}

/*//for celsius to fahrenheit
$celsius = 0.0;
$fahrenheit = 0.0;
if (isset($_POST['celsius'])) {
	$celsius = floatval($_POST['celsius']) ;
	$fahrenheit= $celsius*180/100+32;
}*/




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1> Celsius to kelvin CONVERTER</h1>
	<form method="post" action="">
		<label> Celsius </label>
		<input type="double" name="celsius" value=<?php echo "$celsius"; ?>>
		<label> ==========> </label>
		<input type="double" name="kelvin" value=<?php echo "$kelvin"; ?>>
		<label> Kelvin </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
