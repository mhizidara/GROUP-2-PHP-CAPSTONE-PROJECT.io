<?php
$answer = 0;
$convertTo = 'unit';
$convertFrom = 'units';
$result = $cnvFromErr = "";

if (isset($_POST['convertFrom']) && isset($_POST['convertTo'])) {
    $value = $_POST['value'];
    $convertFrom = $_POST['convertFrom'];
    $convertTo = $_POST['convertTo'];

    if($convertFrom == 'Litre' AND $convertTo == 'Millilitre'){
        $answer = floatval($value) * 1000;
    } elseif($convertFrom == 'Millilitre' AND $convertTo == 'Litre'){
        $answer = floatval($value) / 1000;
    } elseif($convertFrom == 'Cubic foot' AND $convertTo == 'Cubic inch'){
        $answer = floatval($value) * 1728;
    } elseif($convertFrom == 'Cubic inch' AND $convertTo == 'Cubic foot'){
        $answer = floatval($value) / 1728;
    } elseif($convertFrom == 'Imperial pint' AND $convertTo == 'Cubic foot'){
        $answer = floatval($value) / 49.831;
    } elseif($convertFrom == 'Imperial cup' AND $convertTo == 'Imperial pint'){
        $answer = floatval($value) / 2;
    } elseif($convertFrom == 'Imperial pint' AND $convertTo == 'Imperial cup'){
        $answer = floatval($value) * 2;
    } else{
        $answer = "Can't convert " . $convertFrom . "s to ";
    }
    $result = 'Output: ' . $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volume Conversion</title>
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

        <style>
            .error{
                color: #FF0000;
            }
        </style>
</head>
<body>
<div class="container">
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h1 class="display-6" style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Volume Conversions</strong></h1>

            <div class="col-12">
                <input type="text" name="value" class="form-control" placeholder="Enter Value" />
                <span class="error"> <?php echo $cnvFromErr; ?></span>
                <p></p>
            </div>

            <div class="col-md-6">
                <label for="convertFrom" class="form-label"><h4>Convert from:</h4></label>
                <select id="convertFrom" name="convertFrom" class="form-select">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Litre">Litre</option>
                    <option value="Millilitre">Millilitre</option>
                    <option value="Imperial pint">Imperial pint</option>
                    <option value="Imperial cup">Imperial cup</option>
                    <option value="Cubic foot">Cubic foot</option>
                    <option value="Cubic inch">Cubic inch</option>
                </select>
                <br><br>
            </div>
            
            <div class="col-md-6">
                <label for="convertTo" class="form-label"><h4>Convert to:</h4></label>
                <select id="convertTo" name="convertTo" class="form-select">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Litre">Litre</option>
                    <option value="Millilitre">Millilitre</option>
                    <option value="Imperial pint">Imperial pint</option>
                    <option value="Imperial cup">Imperial cup</option>
                    <option value="Cubic foot">Cubic foot</option>
                    <option value="Cubic inch">Cubic inch</option>
                </select>
            </div>

            <div class="col-md-6">
                <input type="submit" value="Convert" class="btn btn-primary btn-lg btn form-control"/>
            </div>
            <div class="col-md-6">
                <input type="submit" value="Reset" name="resetBtn" class="btn btn-secondary btn-lg btn form-control"/>
            </div>

            <p></p>

            <div id="result" style="margin-top: 20px; background:aqua; text-align:center; font-size:xx-large;">
                <?php echo $result;?>
            </div>

        </form>
    </div>

</body>
</html>
