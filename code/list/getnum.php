<?php 
echo "<script>alert(\"".$_GET['lat']."\");</script>";
echo "</br>";
echo $_GET['lng'];
$_GET['id'] += 1;
header("Location: ./getnum.php?id=".$_GET['id']);
 ?>
