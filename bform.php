<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>


<form action="action_page.php" method="post">
  Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5">*
  <input type="number" name="price" value="15"><br>
  <input type="submit" name= "calculate">
</form>


<?php
print_r($_SESSION);
?>

</body>
</html>
