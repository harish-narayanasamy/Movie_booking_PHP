<?php
session_start();
?>
<?php
// Set session variables
$_SESSION["K1D"] = "Sunday";
$_SESSION["K1T"] = "6pm";
$_SESSION["K2D"] = "Monday";
$_SESSION["K2T"] = "9pm";
$_SESSION["K3D"] = "Tuesday";
$_SESSION["K3T"] = "9pm";
$_SESSION["K4D"] = "Wednesday";
$_SESSION["K4T"] = "1pm";
$_SESSION["K5D"] = "Thursday";
$_SESSION["K5T"] = "1pm";
$_SESSION["K6D"] = "Friday";
$_SESSION["K6T"] = "1pm";
$_SESSION["K7D"] = "Saturday";
$_SESSION["K7T"] = "6pm";

?>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SILVERADO</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<?php include("rh.html");?>
<div class="inf">
    <p style="float: left;"><img src="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/m3.jpg" class="img-rounded" border="px"></p>
    <p>Ki & Ka:Kia(Kareena Kapoor) has an aim to become a successful business woman and also wishes other women to work<br>
 instead of managing the house-holds and just becoming the support system of her husband. On her flight to Delhi<br>
 back from Chandigarh, she meets Kabir(Arjun Kapoor).<br><br>
<b>Showtimes<b><br>
Sunday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k1cst2.php" class="button">6pm</a>
Monday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k2cst2.php" class="button">9pm</a>
Tuesday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k3cst2.php" class="button">9pm</a>
Wednesday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k4cst2.php" class="button">1pm</a>
Thursday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k5cst2.php" class="button">1pm</a>
Friday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k6cst2.php" class="button">1pm</a>
Saturday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/k7cst2.php" class="button">6pm</a>
</p>

</div>
<div class="inf" style="clear: left;">
<iframe width="500" height="300" src="https://www.youtube.com/embed/B2fxtycjf_I" frameborder="0" allowfullscreen></iframe>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include("footer.html");?>
</body>
</html>
