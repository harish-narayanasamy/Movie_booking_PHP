<?Php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>SILVERADO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <div class="transbox">
  <?php include_once("rh.php");?>
<?Php
$myfile = fopen("moviedb.txt", "a");
$txt = " \n";
$detail1 = "Name:";
$detail2 = "Email:";
$detail3 = "Mobile:";
$result2 = $_POST["name"].":".$_POST["email"].":".$_POST["mobile"];


if (isset($_SESSION['ccart'])) {
  array_push($_SESSION['ccart'],$result2);
} else {
 $_SESSION['ccart']=array();
array_push($_SESSION['ccart'],$result2);
}
foreach ($_SESSION['ccart'] as $key => $value)

{


  $pieces = explode(":", $value);


$fname=$pieces[0];
$fmail=$pieces[1];
$fmobile=$pieces[2];
}

fwrite($myfile, $detail1);
fwrite($myfile, $fname);
fwrite($myfile, $txt);
fwrite($myfile, $detail2);
fwrite($myfile, $fmail);
fwrite($myfile, $txt);
fwrite($myfile, $detail3);
fwrite($myfile, $fmobile);
fwrite($myfile, $txt);
fclose($myfile);





foreach ($_SESSION['cart'] as $key => $value)
{
  echo "<br>";
  $pieces = explode(" ", $value);


  echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;text-decoration:none;>"
."Silverado"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"
.$_POST["name"]."</a>"."<br>";
echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;text-decoration:none;>"
.$pieces[0]."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"
.$_POST["email"]."</a>"."<br>";
echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;text-decoration:none;>"
.$pieces[1].$pieces[2]."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"

.$_POST["mobile"]."</a>"."<br>";


  $myfile = fopen("moviedb.txt", "a");
  $mname="Movie:";
  $mday="Day:";
  $mtime="Time:";
  $mseat="Seat Type:";
  $mqty="Quantity:";
  $mprice="Price: $";
  $mtprice="Total Price: $";
  $mgprice="Grand Total  Price: $";
  fwrite($myfile, $mname);
  fwrite($myfile, $pieces[0]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mday);
  fwrite($myfile, $pieces[1]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mtime);
  fwrite($myfile, $pieces[2]);
  fwrite($myfile, $txt);
  fclose($myfile);
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


    echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[4]."x"." Standard Adult"."="."$".$ssprice."</a>"."<br>";



$myfile = fopen("moviedb.txt", "a");
fwrite($myfile, $mseat);
fwrite($myfile, $pieces[3]);
fwrite($myfile, $txt);
fwrite($myfile, $mqty);
fwrite($myfile, $pieces[4]);
fwrite($myfile, $txt);
fwrite($myfile, $mprice);
fwrite($myfile, $ssprice);
fwrite($myfile, $txt);
fclose($myfile);
}
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

   echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[6]."x"."Standard Concession"."="."$".$ssprice1."</a>"."<br>";


  $myfile = fopen("moviedb.txt", "a");
  fwrite($myfile, $mseat);
  fwrite($myfile, $pieces[5]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mqty);
  fwrite($myfile, $pieces[6]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mprice);
  fwrite($myfile, $ssprice1);
  fwrite($myfile, $txt);
  fclose($myfile);
}
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
  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[8]."x"."Standard Child"."="."$".$ssprice2."</a>"."<br>";


  $myfile = fopen("moviedb.txt", "a");
  fwrite($myfile, $mseat);
  fwrite($myfile, $pieces[7]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mqty);
  fwrite($myfile, $pieces[8]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mprice);
  fwrite($myfile, $ssprice2);
  fwrite($myfile, $txt);
  fclose($myfile);
}
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



  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[10]."x"."First class Adult"."="."$".$ssprice3."</a>"."<br>";

  $myfile = fopen("moviedb.txt", "a");
  fwrite($myfile, $mseat);
  fwrite($myfile, $pieces[9]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mqty);
  fwrite($myfile, $pieces[10]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mprice);
  fwrite($myfile, $ssprice3);
  fwrite($myfile, $txt);
  fclose($myfile);
}
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

  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[12]."x"."First class Child"."="."$".$ssprice4."</a>"."<br>";

  $myfile = fopen("moviedb.txt", "a");
  fwrite($myfile, $mseat);
  fwrite($myfile, $pieces[11]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mqty);
  fwrite($myfile, $pieces[12]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mprice);
  fwrite($myfile, $ssprice4);
  fwrite($myfile, $txt);
  fclose($myfile);

}
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

  echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[14]."x"."Bean Bag"."="."$".$ssprice5."</a>"."<br>";

  $myfile = fopen("moviedb.txt", "a");
  fwrite($myfile, $mseat);
  fwrite($myfile, $pieces[13]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mqty);
  fwrite($myfile, $pieces[14]);
  fwrite($myfile, $txt);
  fwrite($myfile, $mprice);
  fwrite($myfile, $ssprice5);
  fwrite($myfile, $txt);
  fclose($myfile);
}

echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;>"."Total Price:"."$" . array_sum($_SESSION['tscart']) .".00" ."</a>"."<br>";
         echo"----------------------";
if($pieces[4] != 0){
  for($i=1;$i<=$pieces[4];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Standard Adult"."<br>";
         echo"----------------------------";

   }
}
if($pieces[6] != 0){
  for($i=1;$i<=$pieces[6];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Standard Concession"."<br>";
         echo"----------------------------";

   }
}
if($pieces[8] != 0){
  for($i=1;$i<=$pieces[8];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Standard Child"."<br>";
         echo"----------------------------";

   }
}
if($pieces[10] != 0){
  for($i=1;$i<=$pieces[10];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."First Class Adult"."<br>";
         echo"----------------------------";

   }
}
if($pieces[12] != 0){
  for($i=1;$i<=$pieces[12];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."First Class Child"."<br>";
         echo"----------------------------";

   }
}
if($pieces[14] != 0){
  for($i=1;$i<=$pieces[14];$i++){
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Silverado"."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[0]."<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>".$pieces[1].$pieces[2]."<br>";
         echo "<br>";
         echo "<br>";
         echo "<a style=font-size:90%;font-family:sans-serif;text-decoration:none;>"."Bean Bag"."<br>";
         echo"----------------------------";

   }

}


  $gt=array_sum($_SESSION['tscart']);
  $myfile = fopen("moviedb.txt", "a");
    fwrite($myfile, $mtprice);
    fwrite($myfile, $gt);
    fwrite($myfile, $txt);
    fclose($myfile);
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
$myfile = fopen("moviedb.txt", "a");
$gt1=array_sum($_SESSION['totcart']);
  fwrite($myfile, $mgprice);
  fwrite($myfile, $gt1);
  fwrite($myfile, $txt);
  fclose($myfile);

unset($_SESSION['totcart']);
}


echo "<a style=font-size:110%;font-family:sans-serif;text-decoration:none;>"."Thank You! Enjoy your movie";

//echo "<a href='moviedb.txt' download>Download Tickets.</a>";
unset($_SESSION['cart']);
unset($_SESSION['ccart']);




?>


<input type="button" name="Print Ticket" value = "Print Ticket" onclick="window.print();" />
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>
</body>
</html>
