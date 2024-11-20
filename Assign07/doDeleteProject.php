<?php 

session_start();

include("includes/openDBConn.php");

$sql = "DELETE FROM Assign06Projects WHERE ProjectID = 46";

$result = mysqli_query($db, $sql);


include("includes/closeDBConn.php");

header("Location:select.php");
?>