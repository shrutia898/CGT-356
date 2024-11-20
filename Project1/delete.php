<?php 

session_start();

include("includes/openDBConn.php");

$sql = "DELETE FROM P1Books WHERE BookID = 2";

$result = mysqli_query($db, $sql);


include("includes/closeDBConn.php");

header("Location:select.php");
?>