<?Php
session_start();
?>

<?Php
header("Location: cart-display.php");


$result = $_POST["movie"]." ".$_POST["day"]." ".$_POST["time"]." ".
           $_POST["seat"]." ".$_POST["stype"]." ".$_POST["price1"]." ".
           $_POST["seat1"]." ".$_POST["stype1"]." ".$_POST["price2"]." ".
           $_POST["seat2"]." ".$_POST["stype2"]." ".$_POST["price3"]." ".
           $_POST["seat3"]." ".$_POST["stype3"]." ".$_POST["price4"]." ".
           $_POST["seat4"]." ".$_POST["stype4"]." ".$_POST["price5"]." ".
           $_POST["seat5"]." ".$_POST["stype5"]." ".$_POST["price6"]." ".
           $_POST["totalPrice"];




if (isset($_SESSION['cart'])) {
  array_push($_SESSION['cart'],$result);
} else {
 $_SESSION['cart']=array();
array_push($_SESSION['cart'],$result);
}



?>
