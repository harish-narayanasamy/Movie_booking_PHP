<?php
session_start();
?>
<?php
// Set session variables
$_SESSION["Z1D"] = "Sunday";
$_SESSION["Z1T"] = "12:pm";
$_SESSION["Z2D"] = "Monday";
$_SESSION["Z2T"] = "1pm";
$_SESSION["Z3D"] = "Tuesday";
$_SESSION["Z3T"] = "1pm";
$_SESSION["Z4D"] = "Wednesday";
$_SESSION["Z4T"] = "6pm";
$_SESSION["Z5D"] = "Thursday";
$_SESSION["Z5T"] = "6pm";
$_SESSION["Z6D"] = "Friday";
$_SESSION["Z6T"] = "6pm";
$_SESSION["Z7D"] = "Saturday";
$_SESSION["Z7T"] = "12pm";

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
    <p style="float: left;"><img src="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/zo.jpg" class="img-rounded" border="px"></p>
    <p>Zootopia:In a world populated by anthropomorphic mammals, Judy Hopps, a rabbit from rural Bunnyburrow, fulfills her childhood dream of becoming the first rabbit officer in the police department of nearby city Zootopia. <br>Despite graduating top of her class, Judy is nevertheless excluded from handling the top-priority missing predator cases, and assigned to parking duty by Chief Bogo, who doubts her potential.<br><br>
<b>Showtimes<b><br>
Sunday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z1cst.php" class="button">12pm</a>
Monday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z2cst.php" class="button">1pm</a>
Tuesday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z3cst.php" class="button">1pm</a>
Wednesday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z4cst.php" class="button">6pm</a>
Thursday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z5cst.php" class="button">6pm</a>
Friday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z6cst.php" class="button">6pm</a>
Saturday:<a href="https://titan.csit.rmit.edu.au/~s3579273/wp/a1/z7cst.php" class="button">12pm</a>
</p>

</div>
<div class="inf" style="clear: left;">
<iframe width="500" height="300" src="https://www.youtube.com/embed/CzvH6_e2a-U" frameborder="0" allowfullscreen></iframe>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include("footer.html");?>
</body>
</html>
