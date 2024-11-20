<?php 

session_start();

$id = $_GET["id"];

include("includes/openDBConn.php");

$sql = "DELETE FROM usersLab5 WHERE UserID =".$id;

$result = mysqli_query($db, $sql);


include("includes/closeDBConn.php");

header("Location:select.php");
?>