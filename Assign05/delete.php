<?php 

session_start();

include("includes/openDBConn.php");

$sql = "DELETE FROM shippersLab5 WHERE ShipperID = 2";

$result = mysqli_query($db, $sql);


include("includes/closeDBConn.php");

header("Location:select.php");
?>