<?php
$killo = 0.0;
$gram = 0.0;
if (isset($_POST['kilo'])) {
	$killo = floatval($_POST['kilo']) ;
	$gram = $killo*1000;
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
	<h1> KILLO GRAM TO GRAM CONVERTER</h1>
	<form method="post" action="">
		<label> KILLOGRAM </label>
		<input type="double" name="kilo" value=<?php echo "$killo"; ?>>
		<label> ==========> </label>
		<input type="double" name="gram" value=<?php echo "$gram"; ?>>
		<label> GRAM </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
