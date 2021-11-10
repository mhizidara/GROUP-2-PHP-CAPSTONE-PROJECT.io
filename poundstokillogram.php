<?php
$Pascal = 0.0;
$Bar = 0.0;
if (isset($_POST['Pascal'])) {
	$Pascal = floatval($_POST['Pascal']) ;
	$Bar = $Pascal/100000;
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
	<h1> Pascal TO Bar CONVERTER</h1>
	<form method="post" action="">
		<label> Pascal </label>
		<input type="double" name="Pascal" value=<?php echo "$Pascal"; ?>>
		<label> ==========> </label>
		<input type="double" name="Bar" value=<?php echo "$Bar"; ?>>
		<label> Bar </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>

</body>
</html>
