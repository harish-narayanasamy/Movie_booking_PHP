<?Php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>Contact us</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>


<body>
  <div class="transbox">
<?php include_once("rh.php");?>
<form  class="fc" name ="CONTACT" action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php"  method="post">
<fieldset>
<legend>Contact us</legend>
Type: <select name="subject" class="selectpicker" required>
<option ></option>
<option value="General Enquiry">General Enquiry</option>
<option value="Group and Corporate Bookings">Group and Corporate Bookings</option>
<option value="Suggestions & Complaints">Suggestions & Complaints</option>
</select>

E-mail: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/><br>
Please enter your queries below<br>
<textarea name="message" rows="10" cols="30" color="#000" required></textarea>
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
