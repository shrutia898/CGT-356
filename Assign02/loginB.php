<?php
$userID = $_POST["userID"];
$password = $_POST["password"];


if(($userID == "page1B") && ($password == "page1Bpass"))
{
	header("Location:page1B.php");
}
else if(($userID == "page2B") && ($password == "page2Bpass"))
{
	header("Location:page2B.php");
}
else if(($userID == "page3B") && ($password == "page3Bpass"))
{
	header("Location:page3B.php");
}
else if(($userID == "page4B") && ($password == "page4Bpass")){
	header("Location:page4B.php");
}
else
{
	header("Location:error.php");
}

?>