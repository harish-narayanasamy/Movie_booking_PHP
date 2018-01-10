<?Php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>Confirm</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>


<body>
  <div class="transbox">
<?php include_once("rh.php");?>
<form  class="fc" name ="CONTACT" action="cf.php"  method="post">
<fieldset>
<legend>Confirm</legend>

Name: <br>
<input type="text" name="name" pattern="[a-zA-Z'-. ]+" required/><br>
E-mail: <br>
<input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required/><br>
Mobile-number: <br>
<input type="text" name="mobile" pattern="^(\(04\)|04|\+614)([ ]?\d){8}$"  required/><br>
  <br>
    <br>

  <input type="submit" value="Submit">
  <br>
</form>
</fieldset>
<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</div>
</body>

</html>
