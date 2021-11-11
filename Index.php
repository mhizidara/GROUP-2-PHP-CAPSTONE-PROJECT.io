<?php
    $answer = 0;
    $convertTo = 'unit';
    $convertFrom = 'units';
    $result = $cnvFromErr = "";

    if (isset($_POST['convertFrom']) && isset($_POST['convertTo'])) {
        $value = $_POST['value'];
        $convertFrom = $_POST['convertFrom'];
        $convertTo = $_POST['convertTo'];
        

        if ($convertFrom == 'Gram' AND $convertTo == 'Kilogram') {
            $answer = round(floatval($value)/1000, 5);
        } elseif ($convertFrom == 'Kilogram' AND $convertTo == 'Gram') {
            $answer = round(floatval($value) * 1000, 5);
        } elseif ($convertFrom == 'Kilogram' AND $convertTo == 'Pound') {
            $answer = round(floatval($value) * 2.20462262185, 5);
        } elseif ($convertFrom == 'Pound' AND $convertTo == 'Kilogram') {
            $answer = round(floatval($value) / 2.20462262185, 5);
        } elseif ($convertFrom == 'Gram' AND $convertTo == 'Pound') {
            $answer = round(floatval($value) * 2.20462262185 / 1000, 5);
        } elseif ($convertFrom == 'Pound' AND $convertTo == 'Gram') {
            $answer = round(floatval($value) / 2.20462262185 * 1000, 5);
        } elseif($convertFrom == 'Meter' AND $convertTo == 'Centimeter'){
            $answer = round(floatval($value) * 100, 5);
        } elseif($convertFrom == 'Centimeter' AND $convertTo == 'Meter'){
            $answer = round(floatval($value) / 100, 5);
        } elseif($convertFrom == 'Meter' AND $convertTo == 'Kilometer'){
            $answer = round(floatval($value) / 1000, 5);
        } elseif($convertFrom == 'Kilometer' AND $convertTo == 'Meter'){
            $answer = round(floatval($value) * 1000, 5);
        } elseif($convertFrom == 'Kilometer' AND $convertTo == 'Centimeter'){
            $answer = round(floatval($value) * 100000, 5);
        } elseif($convertFrom == 'Centimeter' AND $convertTo == 'Kilometer'){
            $answer = round(floatval($value) / 100000, 5);
        } elseif($convertFrom == 'Celcius' AND $convertTo == 'Farenheit'){
            $answer = floatval($value) * 9 / 5 + 32;
        } elseif($convertFrom == 'Celcius' AND $convertTo == 'Kelvin'){
            $answer = floatval($value) + 273.15;
        } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Celcius'){
            $answer = floatval($value) - 32 * 5 / 9;
        } elseif($convertFrom == 'Kelvin' AND $convertTo == 'Celcius'){
            $answer = floatval($value) - 273.15;
        } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Kelvin'){
            $answer = floatval($value) - 32 * 5 / 9 + 273.15;
        } elseif($convertFrom == 'Seconds' AND $convertTo == 'Minutes'){
            $answer = floatval($value) / 60;
        } elseif($convertFrom == 'Minutes' AND $convertTo == 'Seconds'){
            $answer = floatval($value) * 60;
        } elseif($convertFrom == 'Seconds' AND $convertTo == 'Hours'){
            $answer = floatval($value) / 3600;
        } elseif($convertFrom == 'Minutes' AND $convertTo == 'Hours'){
            $answer = floatval($value) / 60;
        } elseif($convertFrom == 'Hours' AND $convertTo == 'Seconds'){
            $answer = floatval($value) * 3600;
        } elseif($convertFrom == 'Hours' AND $convertTo == 'Minutes'){
            $answer = floatval($value) * 60; 
        } elseif($convertFrom == 'Meter per second' AND $convertTo == 'Kilometer per hour'){
            $answer = round(floatval($value) * 3.6);
        } elseif($convertFrom == 'Kilometer per hour' AND $convertTo == 'Meter per second'){
            $answer = round(floatval($value) / 3.6);
        } elseif($convertFrom == 'Pascal' AND $convertTo == 'Bar'){
            $answer = round(floatval($value) / 10000);
        } elseif($convertFrom == 'Bar' AND $convertTo == 'Pascal'){
            $answer = round(floatval($value) * 3.6);
        } elseif($convertFrom == 'Square meter' AND $convertTo == 'Square kilometer'){
            $answer = floatval($value) / 10**6;
        } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Square meter'){
            $answer = floatval($value) * 10**6;
        } elseif($convertFrom == 'Hectare' AND $convertTo == 'Acre'){
            $answer = floatval($value) * 2.471;
        }  elseif($convertFrom == 'Acre' AND $convertTo == 'Hectare'){
                $answer = floatval($value) / 2.471;
        } elseif($convertFrom == 'Square inch' AND $convertTo == 'Square foot'){
            $answer = floatval($value) / 144;
        } elseif($convertFrom == 'Square foot' AND $convertTo == 'Square inch'){
            $answer = floatval($value) * 144;
        } elseif($convertFrom == 'Litre' AND $convertTo == 'Millilitre'){
            $answer = round(floatval($value) * 1000);
        } elseif($convertFrom == 'Millilitre' AND $convertTo == 'Litre'){
            $answer = round(floatval($value) / 1000);
        } elseif($convertFrom == 'Cubic foot' AND $convertTo == 'Cubic inch'){
            $answer = round(floatval($value) * 1728);
        } elseif($convertFrom == 'Cubic inch' AND $convertTo == 'Cubic foot'){
            $answer = round(floatval($value) / 1728);
        } elseif($convertFrom == 'Imperial pint' AND $convertTo == 'Cubic foot'){
            $answer = round(floatval($value) / 49.831);
        } elseif($convertFrom == 'Imperial cup' AND $convertTo == 'Imperial pint'){
            $answer = round(floatval($value) / 2);
        } elseif($convertFrom == 'Imperial pint' AND $convertTo == 'Imperial cup'){
            $answer = round(floatval($value) * 2);
        } else{
            $answer = "Can't convert " . $convertFrom . "s to ";
        }
        $result = 'Output: ' . $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Converions</title>
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

<body>
    <div class="container">
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h1 class="display-6" style="text-align: center; margin-bottom: 20px;"><strong>Measurement Converter App</strong></h1>

            <div class="col-12">
                <input type="text" name="value" class="form-control" placeholder="Enter Value" />
                <span class="error"> <?php echo $cnvFromErr; ?></span>
                <p></p>
            </div>

            <div class="col-md-6">
                <label for="convertFrom" class="form-label"><h4>Convert from:</h4></label>
                <select id="convertFrom" name="convertFrom" class="form-select">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Gram">Grams</option>
                    <option value="Kilogram">Kilograms</option>
                    <option value="Pound">Pounds</option>
                    <option value="Meter">Meters</option>
                    <option value="Centimeter">Centimeters</option>
                    <option value="Kilometer">Kilometers</option>
                    <option value="Celcius">Celcius</option>
                    <option value="Farenheit">Farenheit</option>
                    <option value="Seconds">Seconds</option>
                    <option value="Minutes">Minutes</option>
                    <option value="Hours">Hours</option>
                    <option value="Pascal">Pascal</option>
                    <option value="Bar">Bar</option>
                    <option value="Kilometer per hour">Kilometer per hour</option>
                    <option value="Meter per second">Meter per second</option>
                    <option value="Square meter">Square meter</option>
                    <option value="Square kilometer">Square kilometer</option>
                    <option value="Hectare">Hectare</option>
                    <option value="Acre">Acre</option>
                    <option value="Square foot">Square foot</option>
                    <option value="Square inch">Square inch</option>
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
                    <option value="Gram">Grams</option>
                    <option value="Kilogram">Kilograms</option>
                    <option value="Pound">Pounds</option>
                    <option value="Meter">Meters</option>
                    <option value="Centimeter">Centimeters</option>
                    <option value="Kilometer">Kilometers</option>
                    <option value="Farenheit">Farenheit</option>
                    <option value="Celcius">Celcius</option>
                    <option value="Seconds">Seconds</option>
                    <option value="Minutes">Minutes</option>
                    <option value="Hours">Hours</option>
                    <option value="Pascal">Pascal</option>
                    <option value="Bar">Bar</option>
                    <option value="Kilometer per hour">Kilometer per hour</option>
                    <option value="Meter per second">Meter per second</option>
                    <option value="Square meter">Square meter</option>
                    <option value="Square kilometer">Square kilometer</option>
                    <option value="Hectare">Hectare</option>
                    <option value="Acre">Acre</option>
                    <option value="Square foot">Square foot</option>
                    <option value="Square inch">Square inch</option>
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