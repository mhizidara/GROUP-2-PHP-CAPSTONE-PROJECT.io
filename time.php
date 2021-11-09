<?php
$seconds = 0.0;
$minutes = 0.0;
if (isset($_POST['seconds'])) {
	$seconds = floatval($_POST['seconds']) ;
	$minutes = $seconds/60;
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
	<h1> SECONDS TO MINUTES</h1>
    <form method="post" action="">
        <label> SECONDS </label>
		<input type="double" name="seconds" value=<?php echo "$seconds"; ?>>
		<label> ==========> </label>
		<input type="double" name="minutes" value=<?php echo "$minutes"; ?>>
		<label> MINUTES </label>
		<br>

		<input type="submit" name="" value="Convert">


		
	</form>
    </body>
</html>