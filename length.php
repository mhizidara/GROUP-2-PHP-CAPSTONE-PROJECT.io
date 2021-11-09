<?php
$meter = 0.0;
$centimeter = 0.0;
if (isset($_POST['meter'])) {
	$meter = floatval($_POST['meter']) ;
	$centimeter = $meter*100;
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
	<h1> METER TO CENTIMETER CONVERTER</h1>
	<form method="post" action="">
		<label> METER </label>
		<input type="double" name="meter" value=<?php echo "$meter"; ?>>
		<label> ==========> </label>
		<input type="double" name="centimeter" value=<?php echo "$centimeter"; ?>>
		<label> CENTIMETER </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
