<?php
// Start the session

?>
<html>
<body>
<?php
$a = $_POST["quantity"]; 
$b = $_POST["price"]; 
$c = $a * $b;
echo $c;
?>
<?php
// Set session variables
$_SESSION["favcolor"] = $_POST["quantity"];
echo   $_SESSION["favcolor"] ;
?>
<?php
// Set session variables
$_SESSION["favani"] = $_POST["price"];
echo   $_SESSION["favani"] ;
?>
<?php
// Set session variables
$_SESSION["favtree"] = $c;
echo   $_SESSION["favtree"] ;
?>
</body>
</html>