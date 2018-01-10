<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

<script>

window.onload = function()
{
   myFunction();		
}

function validateForm() {
    var x = document.forms["TESTING"]["OUTPUT1"].value;
    if (x == null || x == "") {
        alert("Please select a seat");
        return false;
    }

function validateTime() {
   
        alert("Please select VALID TIME ");
        
    }
}
</script>

  <title>Booking form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/formcalculations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<?php include("rh.html");?>
<form  class="fc1" name ="TESTING"action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" id="bookform" onsubmit="return validateForm()" method="post";>
<fieldset>
              
<label >Name:</label><input type="text" name="movie" value="<?php echo $_SESSION['M2N'];?>" readonly>
<label >Day:</label><input type="text" name="day" value="<?php echo $_SESSION['MU3D'];?>" readonly>
<label >Time:</label><input type="text" name="time" value="<?php echo $_SESSION['MU3T'];?>" readonly>

<br>
<table class="table-condensed">
<tr>
   <th>Ticket Type</th>
   <th>Price</th>
   <th>Quantity</th>
   <th>Subtotal price</th>
 </tr>
<tr>
<td><input type="text" name="SA" value="Adult" readonly/></td>
<td><input type="number" name="price" value="18" readonly></td>
<td><select class="selectpicker" id="ti1" name="ti1"  onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td> <p id="tPrice1"  ></p></td>
</tr>
<tr>
<td><input type="text" name="SP" value="Concession" readonly/></td>
<td><input type="number" name="price" value="15" readonly></td>
<td><select id="ti2" name="ti2" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice2"></p></td>
</tr>
<tr>
<td><input type="text" name="SC" value="Child" readonly/></td>
<td><input type="number" name="price" value="12" readonly></td>
<td><select id="ti3" name="ti3" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice3"></p></td>
</tr>
<tr>
<td><input type="text" name="FA" value="First Class Adult" readonly/></td>
<td><input type="number" name="price" value="30" readonly></td>
<td><select id="ti4" name="ti4" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice4"></p></td>
</tr>
<tr>
<td><input type="text" name="FC" value="First Class child" readonly/></td>
<td><input type="number" name="price" value="25" readonly></td>
<td><select id="ti5" name="ti5" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice5"></p></td>
</tr>
<tr>
<td><input type="text" name="B1" value="Beanbag-1 Person" readonly/></td>
<td><input type="number" name="price" value="20" readonly></td>
<td><select id="ti6" name="ti6" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice6"></p></td>
</tr>
<tr>
<td><input type="text" name="B2" value="Beanbag-2 Person" readonly/></td>
<td><input type="number" name="price" value="20" readonly></td>
<td><select id="ti7" name="ti7" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice7"></p></td>
</tr>
<tr>
<td><input type="text" name="B3" value="Beanbag-3 Person" readonly/></td>
<td><input type="number" name="price" value="20" readonly></td>
<td><select id="ti8" name="ti8" onchange="calculateTotal()">
    <option value="None">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br></td>
<td><p id="tPrice8"></p></td>
</tr>
<tr>
<td colspan="3">Ticket price</td>
<td ><p id="totalPrice"></p></td>
</tr>
<td colspan="3">Total amount(AUD)</td>
<td ><input type="number" name="OUTPUT1" id="totalPrice" readonly ></td>
</table>  

<input type='submit' id='submit' value='Submit'>
</fieldset>
</form>

<?php include("footer.html");?>

</body>

</html>