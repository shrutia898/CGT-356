<?php 

session_start();

include("includes/openDBConn.php");

$sql = "DELETE FROM Assign06Cars WHERE CarID = 23";

$result = mysqli_query($db, $sql);


include("includes/closeDBConn.php");

header("Location:select.php");
?>