<!DOCTYPE html>
<html>
<head>
<?php
$Movies = array
  (
'Name' => array(
'Zootopia'=> array('Monday'=>'1pm','Tuesday'=>'1pm','Wednesday'=>'6pm','Thursday'=>'6pm','Friday'=>'6pm','Saturday'=>'12pm','Sunday'=>'12pm'),
'Mustang'=> array('Monday'=>'6pm','Tuesday'=>'6pm','Saturday'=>'3pm','Sunday'=>'3pm'),
'Ki&Ka'=> array('Monday'=>'9pm','Tuesday'=>'9pm','Wednesday'=>'1pm','Thursday'=>'pm','Friday'=>'1pm','Saturday'=>'6pm','Sunday'=>'6pm'),
'Grimsby'=> array('Wednesday'=>'9pm','Thursday'=>'9pm','Friday'=>'9pm','Saturday'=>'9pm','Sunday'=>'9pm')
  )
);

$result = print_r($Movies);
echo "$result <br>";  
?>
</head>
<body>

</body>
</html>