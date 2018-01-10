<?Php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Prices</title>
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
<div class="container" id="contsmall">
<div id="sfirst">
     <h3>Mon - Tue (All Day)<br>
      Mon - Fri (1pm only)</h3>
      <p>Standard-Full $12</p>
      <p>Standard-Conc $10</p>
      <p>Standard-Child $8</p>
      <p>FirstClass-Adult $25</p>
      <p>FirstClass-Child $20</p>
      <p>Beanbag $20</p>
</div>
<div id="ssecond">
 <h3>Wed - Fri (not 1pm)<br>
       Sat - Sun (All Day)</h3>
      <p>Standard-Full $18</p>
      <p>Standard-Conc $15</p>
      <p>Standard-Child $12</p>
      <p>FirstClass-Adult $30</p>
      <p>FirstClass-Child $25</p>
      <p>Beanbag $20</p>
</div>
</div>
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>
</body>
</html>
