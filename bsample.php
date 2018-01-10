<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>TODO supply a title </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<?php include("header.html");?>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post"/>
<table border="1" style="width:100%">
  <tr>
Name:<input type="text" name="movie"><br>
 Day:<input type="text" name="day" value="<?php  echo date("l");?>"><br>
Time:<input type="text" name="time"><br>
 <tr>
</table>
<table border="1" style="width:100%">
<tr>
   <th>Ticket Type</th>
   <th>Quantity</th>
   <th>Subtotal price</th>
 </tr>
  <tr>
    <td>Adult (name = "SA")<input type="hidden" name="SA"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>		
    <td></td>
  </tr>
  <tr>
    <td>Concession (name = "SP")<input type="hidden" name="SP"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>		
    <td></td>
  </tr>
  <tr>
    <td>Child (name = "SC")<input type="hidden" name="SC"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
 <tr>
    <td>First Class Adult (name = "FA")<input type="hidden" name="FA"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
  <tr>
    <td>First Class Child (name = "FC")<input type="hidden" name="FC"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
  <tr>
    <td>Beanbag - 1 Person (name = "B1")<input type="hidden" name="B1"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
 <tr>
    <td>Beanbag - 2 Person (name = "B2")<input type="hidden" name="B2"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
  <tr>
    <td>Beanbag - 3 Person (name = "B3")<input type="hidden" name="B3"/></td>
    <td><select name="qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select></td>
    <td></td>
  </tr>
  <tr>
    <td>Total price<input type="hidden" name="price"/></td>
     <td colspan="2"></td>		
    
  </tr>
</table>
<input type="submit" value="order"/>

</form>
<?php include("footer.html");?>
</body>
</html>