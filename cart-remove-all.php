<?Php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>SILVERADO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="transbox">
  <?php include_once("rh.php");?>
<?Php

while (list ($key, $val) = each ($_SESSION['cart'])) {
//echo "$key -> $val <br>";
unset($_SESSION['cart'][$key]);
}
unset($_SESSION['tscart']);
unset($_SESSION['totcart']);
echo "<a style=font-size:90%;font-family:sans-serif;>"."Number of Items in the cart = ".sizeof($_SESSION['cart']).".</a>"."<br>";

?>

<input type="button" onclick="location.href='bsc.php';" value="Add Movie" />

<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</div>
</body>
</html>
