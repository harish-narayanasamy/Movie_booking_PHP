<?Php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="transbox">
<?php include_once("rh.php");?>

<div id="sfirst">
<p class ="ns1">Weekday</p>
<img src="cb5.jpg" width="300" height="168" class="img-rounded"  alt="1"><br>
<p class ="ns1">
Mon - Tue<p>
1pm:childrens<br>
6pm:Art/Foreign<br>
9pm:Romantic comedy
<br>
<p class ="ns1">
Wed - Fri<p>
1pm:Romantic Comedy<br>
6pm:Childrens<br>
9pm:Action
</div>
<div id="ssecond">
<p class ="ns1">Weekend</p>
<img src="cb7.jpg" width="300" height="168" class="img-rounded"  alt="2"><br>
<p class="ns1">
Sat - Sun<p>
12pm:Childrens<br>
3pm:Art/Foreign<br>
6pm:Romantic Comedy<br>
9pm:Action
</div>
<div id="clear"></div>
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>
</body>
</html>
