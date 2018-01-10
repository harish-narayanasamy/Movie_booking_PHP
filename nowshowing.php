<?Php
session_start();
?>
<!DOCTYPE html>


<html>
<head>
  <title>Now Showing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

</head>
<body>
  <div class="transbox">
<?php include_once("rh.php");?>

<div class="container">
<div class="img">
<a href="bsc.php">
<img src="zo.jpg" class="img-rounded" alt="zootopia" width="140" height="208"></a>
<div class="desc">
  <div class="transbox"><b><font color="black">Zootopia<font></b></div>
  <div class="transbox"><b>150mins</b></div>
</div>
<div class="isc">
<img src="PG.png"  align="middle" alt="pg" width="24" height="24">
</div>
<a href="bsc.php" class="button">Sessions</a>
</div>
<div class="img">
<a href="bsc.php">
<img src="af.jpg" class="img-rounded" alt="mustang" width="140" height="208"></a>
<div class="desc">
  <div class="transbox"><b><font color="black">Mustang<font></b></div>
  <div class="transbox"><b>97mins</b></div>
</div>
<div class="isc">
<img src="M.png" align="middle" alt="m" width="24" height="24">
</div>
<a href="bsc.php" class="button">Sessions</a>
</div>
<div class="img">
<a href="bsc.php">
<img src="m3.jpg" class="img-rounded" alt="kika" width="140" height="208"></a>
<div class="desc">

<div class="transbox"><b><font color="black">Ki&Ka<font></b></div>
<div class="transbox"><b>98mins</b></div>
</div>

<div class="isc">
<img src="MA15.png" align="middle" alt="ma" width="24" height="24">
 </div>
<a href="bsc.php" class="button">Sessions</a>
</div>
<div class="img">
  <a href="bsc.php">
    <img src="m1.jpg" class="img-rounded" alt="grimsby" width="140" height="208">
  </a>
  <div class="desc">
    <div class="transbox"><b><font color="black">Grimsby<font></b></div>
    <div class="transbox"><b>147mins</b></div>
</div>
<div class="isc">
<img src="M.png" align="middle" alt="m" width="24" height="24">
 </div>
<a href="bsc.php" class="button">Sessions</a>
</div>
</div>

<div class="transbox">
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>

</div>
</body>

</html>
