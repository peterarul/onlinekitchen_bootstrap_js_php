
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$comment = $_POST["comment"];?>
<html>
<body>
    <h1>Success !</h1><br>
<h1>We will get back to you shortly.</h1><br>
    <h3>Your details has been submitted.</h3>
<p>Name : <? echo $name;?></p><br>
<p>Email: <? echo $email;?></p><br>
<p>Address :<? echo $address;?></p><br>
<p>City : <? echo $city;?></p><br>
<p>Zip : <? echo $zip; ?></p><br>
<p>Comment : <? echo $comment; ?></p><br>
    


</body>
</html>

