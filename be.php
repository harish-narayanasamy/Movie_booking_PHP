<?php
session_start();
?>
<?php
// Set session variables
$_SESSION["G1D"] = "Sunday";
$_SESSION["G1T"] = "9pm";
$_SESSION["G4D"] = "Wednesday";
$_SESSION["G4T"] = "9pm";
$_SESSION["G5D"] = "Thursday";
$_SESSION["G5T"] = "9pm";
$_SESSION["G6D"] = "Friday";
$_SESSION["G6T"] = "9pm";
$_SESSION["G7D"] = "Saturday";
$_SESSION["G7T"] = "9pm";

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
    <p style="float: left;"><img src="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/m1.jpg" class="img-rounded" border="px"></p>
    <p>Grimsby:Nobby (Sacha Baron Cohen) has everything a man from the poor English fishing town of Grimsby could want: 11 children and the most<br> attractive girlfriend in northern England. There's only one thing missing in his life: his little brother, Sebastian (Mark Strong). After they<br>
were adopted by different families as children, Nobby spent 28 years searching for him.<br><br>
<b>Showtimes<b><br>
Sunday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/g1cst3.php" class="button">9pm</a>
Wednesday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/g2cst3.php" class="button">9pm</a>
Thursday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/g3cst3.php" class="button">9pm</a>
Friday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/g4cst3.php" class="button">9pm</a>
Saturday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/g5cst3.php" class="button">9pm</a>
</p>

</div>
<div class="inf" style="clear: left;">
<iframe width="500" height="300" src="https://www.youtube.com/embed/_YtclB_02wA" frameborder="0" allowfullscreen></iframe>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include("footer.html");?>
</body>
</html>
