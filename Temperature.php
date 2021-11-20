<?php
$answer = 0;
$convertTo = 'unit';
$convertFrom = 'units';
$result = $cnvFromErr = "";

if (isset($_POST['convertFrom']) && isset($_POST['convertTo'])) {
    $value = $_POST['value'];
    $convertFrom = $_POST['convertFrom'];
    $convertTo = $_POST['convertTo'];
    
    if($convertFrom == 'Celcius' AND $convertTo == 'Farenheit'){
        $answer = floatval($value) * 9 / 5 + 32;
    } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Celcius'){
        $answer = floatval($value) - 32 * 5 / 9;
    } elseif($convertFrom == 'Kelvin' AND $convertTo == 'Celcius'){
        $answer = floatval($value) - 273.15;
    } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Kelvin'){
        $answer = floatval($value) - 32 * 5 / 9 + 273.15;
    } elseif($convertFrom == 'Celcius' AND $convertTo == 'Kelvin'){
        $answer = floatval($value) + 273.15;
    }
    $result = 'Output: ' . $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Temperature Conversions</title>
	<link href="resources/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="index.css">

    <?php include 'header.php'; ?>

        <style>
            .error{
                color: #FF0000;
            }
        </style>
</head>
<body>
<div class="container">
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h1 class="display-6" style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Temperature Conversions</strong></h1>

            <div class="col-12">
                <input type="text" name="value" class="form-control" placeholder="Enter Value" />
                <span class="error"> <?php echo $cnvFromErr; ?></span>
                <p></p>
            </div>

            <div class="col-md-6">
                <label for="convertFrom" class="form-label"><h4>Convert from:</h4></label>
                <select id="convertFrom" name="convertFrom" class="form-select">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Celcius">Celcius</option>
                    <option value="Farenheit">Farenheit</option>
                    <option value="Kelvin">Kelvin</option>
                </select>
                <br><br>
            </div>

            <div class="col-md-6">
                <label for="convertTo" class="form-label"><h4>Convert to:</h4></label>
                <select id="convertTo" name="convertTo" class="form-select">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Celcius">Celcius</option>
                    <option value="Farenheit">Farenheit</option>
                    <option value="Kelvin">Kelvin</option>
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

    <script src="resources/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="resources/bootstrap.min.js"></script>

    <?php include "footer.php"; ?>
    
</body>
</html>
