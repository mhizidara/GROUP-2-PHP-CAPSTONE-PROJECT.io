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
    }
    $result = 'Output: ' . $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weight Conversion</title>
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

        <h1 class="display-6" style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Weight Conversions</strong></h1>

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
