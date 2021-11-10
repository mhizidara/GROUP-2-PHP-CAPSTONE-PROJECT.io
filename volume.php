<?php
$Pascal = 0.0;
$Bar = 0.0;
if (isset($_POST['Liter'])) {
	$Liter = floatval($_POST['Liter']) ;
	$Millimeter = $Liter*1000;
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
	<h1> Liter TO Millimetre</h1>
	<form method="post" action="">
		<label> Liter </label>
		<input type="double" name="Liter" value=<?php echo "$Liter"; ?>>
		<label> ==========> </label>
		<input type="double" name="Millimetre" value=<?php echo "$Millimeter"; ?>>
		<label> Millimetre </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
