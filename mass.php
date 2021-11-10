<?php
$lbs = 0.0;
$kgs = 0.0;
if (isset($_POST['lbs'])) {
	$lbs = floatval($_POST['lbs']) ;
	$kgs = $lbs*2.20462262185;
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
	<h1> Pounds To Kilogramme CONVERTER</h1>
	<form method="post" action="">
		<label> Pounds </label>
		<input type="double" name="lbs" value=<?php echo "$lbs"; ?>>
		<label> ==========> </label>
		<input type="double" name="kgs" value=<?php echo "$kgs"; ?>>
		<label> Kilogrammes </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
