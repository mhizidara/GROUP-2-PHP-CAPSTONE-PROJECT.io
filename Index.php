<?php
    $answer = 0;
    $convertTo = 'unit';
    $convertFrom = 'units';
    if (isset($_POST['convert'])) {
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
            $answer = round(floatval($value) * 9 / 5 + 32);
        } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Celcius'){
            $answer = round(floatval($value) - 32 * 5 / 9);
        } elseif($convertFrom == 'Kelvin' AND $convertTo == 'Celcius'){
            $answer = round(floatval($value) - 273.15);
        } elseif($convertFrom == 'Farenheit' AND $convertTo == 'Kelvin'){
            $answer = round(floatval($value) - 32 * 5 / 9 + 273.15);
        } elseif($convertFrom == 'Seconds' AND $convertTo == 'Minutes'){
            $answer = round(floatval($value) / 60);
        } elseif($convertFrom == 'Minutes' AND $convertTo == 'Second'){
            $answer = round(floatval($value) * 60);
        } elseif($convertFrom == 'Meter per second' AND $convertTo == 'Kilometer per hour'){
            $answer = round(floatval($value) * 3.6);
        } elseif($convertFrom == 'Kilometer per hour' AND $convertTo == 'Meter per second'){
            $answer = round(floatval($value) / 3.6);
        } elseif($convertFrom == 'Pascal' AND $convertTo == 'Bar'){
            $answer = round(floatval($value) / 10000);
        } elseif($convertFrom == 'Bar' AND $convertTo == 'Pascal'){
            $answer = round(floatval($value) * 3.6);
        } elseif($convertFrom == 'Square meter' AND $convertTo == 'Square kilometer'){
            $answer = round(floatval($value) / 1^ + 6);
        } elseif($convertFrom == 'Square kilometer' AND $convertTo == 'Square meter'){
            $answer = round(floatval($value) * 1^ + 6);
        } elseif($convertFrom == 'Hectare' AND $convertTo == 'Acre'){
            $answer = round(floatval($value) * 2.471);
        }  elseif($convertFrom == 'Acre' AND $convertTo == 'Hectare'){
                $answer = round(floatval($value) / 2.471);
        } elseif($convertFrom == 'Square inch' AND $convertTo == 'Square foot'){
            $answer = round(floatval($value) / 144);
        } elseif($convertFrom == 'Square foot' AND $convertTo == 'Square inch'){
            $answer = round(floatval($value) * 144);
        } elseif($convertFrom == 'Liter' AND $convertTo == 'Millimeter'){
            $answer = round(floatval($value) * 1000);
        } elseif($convertFrom == 'Millimeter' AND $convertTo == 'Liter'){
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
    }
        <div class="output">
            <p>Output : <?php echo $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)'?></p>
        </div>
?>
