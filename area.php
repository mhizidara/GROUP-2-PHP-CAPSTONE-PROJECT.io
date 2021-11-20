<?php
$answer = 0;
$convertTo = 'unit';
$convertFrom = 'units';
$result = $cnvFromErr = "";

if (isset($_POST['convertFrom']) && isset($_POST['convertTo'])) {
    $value = $_POST['value'];
    $convertFrom = $_POST['convertFrom'];
    $convertTo = $_POST['convertTo'];

    if($convertFrom == 'Square meter' AND $convertTo == 'Square kilometer'){
        $answer = floatval($value) / 10**6;
    } elseif($convertFrom == 'Square meter' AND $convertTo == 'Hectare'){
        $answer = floatval($value) / 10**4;
    } elseif($convertFrom == 'Square meter' AND $convertTo == 'Acre'){
        $answer = floatval($value) / 4046.85642;
    } elseif($convertFrom == 'Square meter' AND $convertTo == 'Square inch'){
        $answer = floatval($value) * 1550.0031;
    } elseif($convertFrom == 'Square meter' AND $convertTo == 'Square foot'){
        $answer = floatval($value) / 10.7639014;
    } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Square meter'){
        $answer = floatval($value) * 10**6;
    } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Hectare'){
        $answer = floatval($value) * 100;
    } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Acre'){
        $answer = floatval($value) * 247.105381;
    } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Square inch'){
        $answer = floatval($value) * (1.55 * 10**9);
    } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Square foot'){
        $answer = floatval($value) * (1.0764 * 10**7);
    } elseif($convertFrom == 'Hectare' AND $convertTo == 'Acre'){
        $answer = floatval($value) * 2.47105381;
    } elseif($convertFrom == 'Hectare' AND $convertTo == 'Square kilometer'){
        $answer = floatval($value) / 100;
    } elseif($convertFrom == 'Hectare' AND $convertTo == 'Square meter'){
        $answer = floatval($value) * 10000;
    } elseif($convertFrom == 'Hectare' AND $convertTo == 'Square inch'){
        $answer = floatval($value) * (1.55 * 10**7);
    } elseif($convertFrom == 'Hectare' AND $convertTo == 'Square foot'){
        $answer = floatval($value) * 107639.104;
    } elseif($convertFrom == 'Acre' AND $convertTo == 'Hectare'){
        $answer = floatval($value) / 2.47105381;
    } elseif($convertFrom == 'Acre' AND $convertTo == 'Square kilometer'){
        $answer = floatval($value) / 247.105381;
    } elseif($convertFrom == 'Acre' AND $convertTo == 'Sqaure meter'){
        $answer = floatval($value) * 4046.85642;
    } elseif($convertFrom == 'Acre' AND $convertTo == 'Square foot'){
        $answer = floatval($value) * 43560;
    } elseif($convertFrom == 'Acre' AND $convertTo == 'Square inch'){
        $answer = floatval($value) * 6272640;
    } elseif($convertFrom == 'Square inch' AND $convertTo == 'Square foot'){
        $answer = floatval($value) / 144;
    } elseif($convertFrom == 'Square inch' AND $convertTo == 'Square kilometer'){
        $answer = floatval($value) / (1.55 * 10**9);
    } elseif($convertFrom == 'Square inch' AND $convertTo == 'Square meter'){
        $answer = floatval($value) / 1550.0031;
    } elseif($convertFrom == 'Square inch' AND $convertTo == 'Hectare'){
        $answer = floatval($value) / (1.55 * 10**7);
    } elseif($convertFrom == 'Square inch' AND $convertTo == 'Acre'){
        $answer = floatval($value) / (6.2726 * 10**6);
    } elseif($convertFrom == 'Square foot' AND $convertTo == 'Square inch'){
        $answer = floatval($value) * 144;
    } elseif($convertFrom == 'Square foot' AND $convertTo == 'Square kilometer'){
        $answer = floatval($value) / (1.0764 * 10**7);
    } elseif($convertFrom == 'Square foot' AND $convertTo == 'Square meter'){
        $answer = floatval($value) / 10.7639104;
    } elseif($convertFrom == 'Square foot' AND $convertTo == 'Hectare'){
        $answer = floatval($value) / 107639.104;
    } elseif($convertFrom == 'Square foot' AND $convertTo == 'Acre'){
        $answer = floatval($value) / 43560;
    }
    $result = 'Output: ' . $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Area Conversion</title>
    <link href="resources/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="index.css">
    
    <?php include 'header.php'; ?>

        <style>
            .error{
                color: #FF0000;
            }
        </style>
</head>

</head>
<body>
<div class="container">
    <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <h1 class="display-6" style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Area Conversions</strong></h1>

        <div class="col-12">
            <input type="text" name="value" class="form-control" placeholder="Enter Value" />
            <span class="error"> <?php echo $cnvFromErr; ?></span>
            <p></p>
        </div>

        <div class="col-md-6">
            <label for="convertFrom" class="form-label"><h4>Convert from:</h4></label>
            <select id="convertFrom" name="convertFrom" class="form-select">
                <option value="" disabled selected>Select Unit</option>
                <option value="Square meter">Square meter</option>
                <option value="Square kilometer">Square kilometer</option>
                <option value="Hectare">Hectare</option>
                <option value="Acre">Acre</option>
                <option value="Square foot">Square foot</option>
                <option value="Square inch">Square inch</option>
            </select>
            <br><br>
        </div>
        
        <div class="col-md-6">
            <label for="convertTo" class="form-label"><h4>Convert to:</h4></label>
            <select id="convertTo" name="convertTo" class="form-select">
                <option value="" disabled selected>Select Unit</option>
                <option value="Square meter">Square meter</option>
                <option value="Square kilometer">Square kilometer</option>
                <option value="Hectare">Hectare</option>
                <option value="Acre">Acre</option>
                <option value="Square foot">Square foot</option>
                <option value="Square inch">Square inch</option>
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
