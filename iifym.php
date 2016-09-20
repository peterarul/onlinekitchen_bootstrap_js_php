<?php


function jeorEquation() {
    
$a = 10;
$b = 6.25;
$c = 5;
$d = 161;
    
  

  
    if (isset($_POST['gender']) && $_POST['gender'] == "male" ) {
      $w = $_POST["weight"];
      $h = $_POST["height"];
      $age = $_POST["age"];
      $cc = ($a * $w) + ($b * $h) - ($c * $age);
      $mcal = $cc + $c;
    return $mcal;

  }
  if (isset($_POST['gender']) && $_POST['gender'] == "female") {
      $w = $_POST["weight"];
      $h = $_POST["height"];
      $age = $_POST["age"];
      $cc = ($a * $w) + ($b * $h) - ($c * $age);
    $fcal = $cc - $d;
    return $fcal;
  }
  
  

}
$jeorEquation = jeorEquation();

(int) $minActivity = round($jeorEquation * 1.2);
(int) $lightActivity  = round($jeorEquation * 1.375);
(int) $moderateActivity  = round($jeorEquation * 1.55);
(int) $heavyActivity = round($jeorEquation * 1.725);
(int) $veryHeavyActivity = round($jeorEquation * 1.9);

(int) $minActivityLoss = round($minActivity * 0.8);
(int) $lightActivityLoss  = round($lightActivity * 0.8);
(int) $moderateActivityLoss  = round($moderateActivity * 0.8);
(int) $heavyActivityLoss = round($heavyActivity * 0.8);
(int) $veryHeavyActivityLoss = round($veryHeavyActivity * 0.8);

(int) $minActivityGain = round($minActivity * 1.2);
(int) $lightActivityGain  = round($lightActivity * 1.2);
(int) $moderateActivityGain  = round($moderateActivity * 1.2);
(int) $heavyActivityGain = round($heavyActivity * 1.2);
(int) $veryHeavyActivityGain = round($veryHeavyActivity * 1.2);



    
?>
<html>
<head>
<title>TheOnlinePantry-Learn To Cook Healthy</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel=stylesheet type="text/css" href="css/opstyles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.css">
    <script src="dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>

    <body>
        <div class="pricingclassnav">
    <nav class="navbar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-leaf"></span>TheOnlinePantry</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li style="background-color:#ececec"><a href="#">IIFYM</a></li> 
            <li><a href="pricing.html">Pricing</a></li> 
            
            <li><a href="contact.html">Contact</a></li> 
        </ul>
    </div>
    </nav>
        </div>
        <div class="container contactuscontent">
       <h1>IIFYM Calculator (Mifflin-St. Jeor Equation)</h1>
            <p>Form processed on the server(PHP)</p>
       <hr>
   <div class="row">
            <div class="col-sm-2 col-sm-offset-3 card">
                <form name="myForm"  id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                    <label for="usr">Weight in KGs:</label><br>
                    <input name="weight" type="number" pattern="\d{3}" class="form-control" id="weight" required><br>
                
                    <label for="usr">Height in CM:</label><br>
                    <input name="height" type="number" class="form-control" id="height" required><br>
                
                    <label for="usr">Age:</label><br>
                    <input name="age" type="number" class="form-control" id="age" required><br>
                
                    <label for="usr">Gender:</label><br>
                    <input type="radio" name="gender" value="male" id="male" > Male
                    <br>
                    <input type="radio" name="gender" value="female" id="female" > Female
                    <br>
                    
                <br>
                <input class="btn subscribe" type="submit"  value="SUBMIT" id="submitform" >
                </form>
            </div>
    </div>
        </div> 
        <div class="container contactuscontent">
            <h1>Daily Calorie Intake As Per Goals</h1>
            <hr>
            <div class="row">
            <div class="col-sm-4">
                <h3><? echo "Maintenance" ?></h3>
                <hr>
                <p><? echo "No/Minimum Physical Activity : ";?> <span class="cals"><?echo "$minActivity";?></span></p>
                <p><? echo "Light Physical Activity (1–3 days per week) : ";?><span class="cals"><?echo "$lightActivity";?></span></p>
                <p><? echo "Moderate Physical Activity (3–5 days per week) : ";?><span class="cals"><?echo "$moderateActivity";?></span></p>
                <p><? echo "Heavy Physical Activity (6–7 days per week) : ";?><span class="cals"><?echo "$heavyActivity";?></span></p>
                <p><? echo "Very Heavy Physical Activity (twice per day, extra heavy workouts) : ";?><span class="cals"><?echo "$veryHeavyActivity";?></span></p>
            </div>
                <div class="col-sm-4">
                <h3><? echo "Weight Loss" ?></h3>
                    <hr>
                <p><? echo "No/Minimum Physical Activity : ";?><span class="cals"><?echo "$minActivityLoss";?></span></p>
                <p><? echo "Light Physical Activity (1–3 days per week) : ";?><span class="cals"><?echo "$lightActivityLoss";?></span></p>
                <p><? echo "Moderate Physical Activity (3–5 days per week) : ";?><span class="cals"><?echo "$moderateActivityLoss";?></span></p>
                <p><? echo "Heavy Physical Activity (6–7 days per week) : ";?><span class="cals"><?echo "$heavyActivityLoss";?></span></p>
                <p><? echo "Very Heavy Physical Activity (twice per day, extra heavy workouts) : ";?><span class="cals"><?echo "$veryHeavyActivityLoss";?></span></p>
            </div>
                <div class="col-sm-4">
                <h3><? echo "Weight Gain" ?></h3>
                    <hr>
                <p><? echo "No/Minimum Physical Activity : ";?><span class="cals"><?echo "$minActivityGain";?></span></p>
                <p><? echo "Light Physical Activity (1–3 days per week) : ";?><span class="cals"><?echo "$lightActivityGain";?></span></p>
                <p><? echo "Moderate Physical Activity (3–5 days per week) : ";?><span class="cals"><?echo "$moderateActivityGain";?></span></p>
                <p><? echo "Heavy Physical Activity (6–7 days per week) : ";?><span class="cals"><?echo "$heavyActivityGain";?></span></p>
                <p><? echo "Very Heavy Physical Activity (twice per day, extra heavy workouts) : ";?><span class="cals"><?echo "$veryHeavyActivityGain";?></span></p>
            </div>
            </div>
       </div>
       
       <hr>
       
        
    </body>
</html>