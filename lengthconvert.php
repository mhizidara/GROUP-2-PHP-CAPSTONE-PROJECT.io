<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Length Conversions</title>
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
        <?php
            $convFromSel = $convToSel = $cnvFrom = $cnvTo = "";
            $cnvFromErr = "";
            $result = "";
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                //if the reset button is clicked, reset the form and exit the code
                if(isset($_POST["resetBtn"]) && $_POST["resetBtn"] =="Reset"){
                    $_POST = array(); //$_POST = []
                    $result = "";
                }
                elseif(! (isset($_POST["convertFrom"]) && isset($_POST["convertTo"]))){
                    $result = "You have neither selected a conversion unit nor a target unit";
                }
                elseif(! (isset($_POST["convertFrom"]))){
                    $result = "You have not selected a unit for converion";
                }
                elseif(! (isset($_POST["convertTo"]))){
                    $result = "Please select the target unit of measurement";
                }
                elseif (! (is_numeric($_POST["cnvFrom"]))){
                    $cnvFromErr = "Numerical value is expected";
                }
                else{
                    $cnvFrom = test_input($_POST["cnvFrom"]);
                    $convFromSel = $_POST["convertFrom"];
                    $convToSel = $_POST["convertTo"];

                    switch ($convFromSel){
                        case "inch":
                            $cnvTo = funcIncCnv($cnvFrom);                            
                            break;
                        case "yard":
                            $cnvTo = funcYardCnv($cnvFrom);                            
                            break;
                        case "mile":
                            $cnvTo = funcMileCnv($cnvFrom);                            
                            break;
                        case "millimetre":
                            $cnvTo = funcMilliCnv($cnvFrom);                            
                            break;
                        case "centimetre":
                            $cnvTo = funcCentCnv($cnvFrom);                            
                            break;
                        case "metre":
                            $cnvTo = funcMetreCnv($cnvFrom);                            
                            break;
                        case "foot":
                            $cnvTo = funcFootCnv($cnvFrom);                            
                            break;
                    }
                    $GLOBALS['result'] = "Converting $cnvFrom $convFromSel to $convToSel is equivalent to $cnvTo $convToSel";
                }
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);

                return $data;
            }

            function funcIncCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "yard":
                        $data /= 36;
                        return $data;
                        break;

                    case "mile":
                        $data /= 63360;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 25.4;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 2.54;
                        return $data;
                        break;

                    case "metre":
                        $data /= 39.37;
                        return $data;
                        break;

                    case "foot":
                        $data /= 12;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
            function funcYardCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "inch":
                        $data *= 36;
                        return $data;
                        break;

                    case "mile":
                        $data /= 1760;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 914;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 91.44;
                        return $data;
                        break;

                    case "metre":
                        $data /= 1.094;
                        return $data;
                        break;

                    case "foot":
                        $data *= 3;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
            function funcMileCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "inch":
                        $data *= 63660;
                        return $data;
                        break;

                    case "yard":
                        $data *= 1760;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 1609344;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 160934;
                        return $data;
                        break;

                    case "metre":
                        $data *= 1609;
                        return $data;
                        break;

                    case "foot":
                        $data *= 5280;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
            function funcMilliCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "yard":
                        $data /= 914;
                        return $data;
                        break;

                    case "mile":
                        $data /= 1609344;
                        return $data;
                        break;
                    
                    case "inch":
                        $data /= 25.4;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 10;
                        return $data;
                        break;

                    case "metre":
                        $data /= 1000;
                        return $data;
                        break;

                    case "foot":
                        $data /= 305;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
            function funcCentCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "yard":
                        $data /= 91.44;
                        return $data;
                        break;

                    case "mile":
                        $data /= 160934;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 10;
                        return $data;
                        break;
                    
                    case "inch":
                        $data *= 2.54;
                        return $data;
                        break;

                    case "metre":
                        $data /= 2.54;
                        return $data;
                        break;

                    case "foot":
                        $data /= 30.48;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
            function funcMetreCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "yard":
                        $data *= 1.094;
                        return $data;
                        break;

                    case "mile":
                        $data /= 1609;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 1000;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 100;
                        return $data;
                        break;

                    case "inch":
                        $data *= 39.37;
                        return $data;
                        break;

                    case "foot":
                        $data *= 3.281;
                        return $data;
                        break;

                    default:

                    return $data;
                }
            }
            function funcFootCnv($data){
                switch ($GLOBALS['convToSel']){
                    case "yard":
                        $data /= 3;
                        return $data;
                        break;

                    case "mile":
                        $data /= 5280;
                        return $data;
                        break;
                    
                    case "millimetre":
                        $data *= 305;
                        return $data;
                        break;
                    
                    case "centimetre":
                        $data *= 30.48;
                        return $data;
                        break;

                    case "metre":
                        $data /= 3.281;
                        return $data;
                        break;

                    case "inch":
                        $data *= 12;
                        return $data;
                        break;

                    default:
                    return $data;
                }
            }
        ?>

    <div class="container">
    <form class="row g-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h1 class="display-6" style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Length Conversions</strong></h1>

            <div class="col-12">
                <input type="text" name="cnvFrom" class="form-control" placeholder="Enter a number" />
                <span class="error"> <?php echo $cnvFromErr; ?></span>
                <p></p>
            </div>

            <div class="col-md-6">
                <label for="convertFrom" class="form-label"><h4>Convert from:</h4></label>
                <select id="convertFrom" name="convertFrom" class="form-select">
                    <option value="" disabled selected>Select a Unit</option>
                    <option value="inch">Inch</option>
                    <option value="yard">Yard</option>
                    <option value="mile">Mile</option>
                    <option value="millimetre">Millimetre</option>
                    <option value="centimetre">Centimetre</option>
                    <option value="metre">Metre</option>
                    <option value="foot">Foot</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid unit.
                </div>
                <br><br>
            </div>

            <div class="col-md-6">
                <label for="convertTo" class="form-label"><h4>Convert to:</h4></label>
                <select id="convertTo" name="convertTo" class="form-select">
                    <option value="" disabled selected>Select a Unit</option>
                    <option value="inch">Inch</option>
                    <option value="yard">Yard</option>
                    <option value="mile">Mile</option>
                    <option value="millimetre">Millimetre</option>
                    <option value="centimetre">Centimetre</option>
                    <option value="metre">Metre</option>
                    <option value="foot">Foot</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid unit.
                </div>
            </div>

            <br><br>

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

    </body>
</html>