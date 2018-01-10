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
<style type="text/css">
a:link {
    text-decoration: none;
}

   </style>
</head>

<body>
  <div class="transbox">
<?php include_once("rh.php");?>
<?Php
$item = (isset($_POST['item']) ? $_POST['item'] : null);
while (list ($key1,$val1) = @each ($item)) {
//echo "$key1 , $val1,<br>";
unset($_SESSION['cart'][$val1]);

}


echo "<form class=fc method=post action=''>";
while (list ($key, $val) = each ($_SESSION['cart'])) {
echo "<a style=font-size:120%;font-family:sans-serif;text-decoration:none;>"."Please select the movie and click remove"."<br>";
echo " <input type=checkbox name=item[] value='$key'>";
$pieces = explode(" ", $val);
  
  echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;>"."Movie".":".$pieces[0],"Day".":".$pieces[1],"Time".":".$pieces[2]."</a>"."<br>";

  if($pieces[4] != 0){



    if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
         ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
        $sprice1=12.00;
        $ssprice=$sprice1 * $pieces[4];

    }


    if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
         ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
        $sprice1=18.00;
        $ssprice=$sprice1 * $pieces[4];

    }

    if (isset($_SESSION['tscart'])) {
      array_push($_SESSION['tscart'],$ssprice);
    } else {
     $_SESSION['tscart']=array();
    array_push($_SESSION['tscart'],$ssprice);
    }

  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[3]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[4]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice."</a>"."<br>";}

 if($pieces[6] != 0){

   if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
        ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
       $sprice2=10.00;
       $ssprice1=$sprice2 * $pieces[6];

   }


   if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
        ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
       $sprice2=15.00;
       $ssprice1=$sprice2 * $pieces[6];

   }
   if (isset($_SESSION['tscart'])) {
     array_push($_SESSION['tscart'],$ssprice1);
   } else {
    $_SESSION['tscart']=array();
   array_push($_SESSION['tscart'],$ssprice1);
   }


   echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[5]."</a>"."<br>";
   echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[6]."</a>"."<br>";
   echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice1."</a>"."<br>";}

if($pieces[8] != 0){

  if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
      $sprice3=8.00;
      $ssprice2=$sprice3 * $pieces[8];

  }


  if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
      $sprice3=12.00;
      $ssprice2=$sprice3 * $pieces[8];

  }
  if (isset($_SESSION['tscart'])) {
    array_push($_SESSION['tscart'],$ssprice2);
  } else {
   $_SESSION['tscart']=array();
  array_push($_SESSION['tscart'],$ssprice2);
  }
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[7]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[8]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice2."</a>"."<br>";}

if($pieces[10] != 0){


  if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
      $sprice4=25.00;
      $ssprice3=$sprice4 * $pieces[10];

  }


  if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
      $sprice4=30.00;
      $ssprice3=$sprice4 * $pieces[10];

  }
  if (isset($_SESSION['tscart'])) {
    array_push($_SESSION['tscart'],$ssprice3);
  } else {
   $_SESSION['tscart']=array();
  array_push($_SESSION['tscart'],$ssprice3);
  }



  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[9]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[10]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice3."</a>"."<br>";}

if($pieces[12] != 0){

  if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
      $sprice5=20.00;
      $ssprice4=$sprice5 * $pieces[12];

  }


  if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
      $sprice5=25.00;
      $ssprice4=$sprice5 * $pieces[12];

  }
  if (isset($_SESSION['tscart'])) {
    array_push($_SESSION['tscart'],$ssprice4);
  } else {
   $_SESSION['tscart']=array();
  array_push($_SESSION['tscart'],$ssprice4);
  }

  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[11]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[12]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice4."</a>"."<br>";}


if($pieces[14] != 0){

  if ((($pieces[1] == "Monday"||$pieces[1] == "Tuesday"||$pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]=="1:PM")) ||($pieces[1] == "Monday"|| $pieces[1]=="Tuesday")) {
      $sprice6=20.00;
      $ssprice5=$sprice6 * $pieces[14];

  }


  if ((($pieces[1] == "Wednesday"||$pieces[1] == "Thursday"
       ||$pieces[1] == "Friday") && ($pieces[2]!="1:PM")) || ($pieces[1] == "Saturday"|| $pieces[1]=="Sunday")) {
      $sprice6=30.00;
      $ssprice5=$sprice6 * $pieces[14];

  }
  if (isset($_SESSION['tscart'])) {
    array_push($_SESSION['tscart'],$ssprice5);
  } else {
   $_SESSION['tscart']=array();
  array_push($_SESSION['tscart'],$ssprice5);
  }
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Seat type".":".$pieces[13]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Quantity".":".$pieces[14]."</a>"."<br>";
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Price".":"."$".$ssprice5."</a>"."<br>";}



  echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;>"."Total Price:"."$" . array_sum($_SESSION['tscart']) .".00" ."</a>"."<br>";
  $gt=array_sum($_SESSION['tscart']);
  if (isset($_SESSION['totcart'])) {
  array_push($_SESSION['totcart'],$gt);
  } else {
  $_SESSION['totcart']=array();
  array_push($_SESSION['totcart'],$gt);
  }


  unset($_SESSION['tscart']);


  }

echo"<br>";if (!empty($_SESSION['totcart'])) {
  echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;>"."Grand total:"."$" . array_sum($_SESSION['totcart']) .".00" ."</a>"."<br>";



unset($_SESSION['totcart']);
}
echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Number of Items in the cart = ".sizeof($_SESSION['cart']).".</a>"."<br>";
echo"<br>";
echo "<input type=submit value=Remove></form>";
echo"<br>";


?>

<input type="button" onclick="location.href='confirm.php';" value="Confirm Booking" <?php if (empty($_SESSION['cart']) == true) echo 'disabled="disabled"' ?> /> 
<input type="button" onclick="location.href='bsc.php';" value="Add Movie" />
<input type="button" onclick="location.href='cart-display.php';" value="View Cart" />
<input type="button" onclick="location.href='cart-remove.php';" value="Remove Item" />
<input type="button" onclick="location.href='cart-remove-all.php';" value="Remove All" />
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>
</body>
</html>
