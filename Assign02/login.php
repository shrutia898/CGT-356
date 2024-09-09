<?php
$userID = $_POST["userID"];
$password = $_POST["password"];


if(($userID == "page1") && ($password == "alpha"))
{
	header("Location:page1.php");
}
else if(($userID == "page2") && ($password == "beta"))
{
	header("Location:page2.php");
}
else if(($userID == "page3") && ($password == "gamma"))
{
	header("Location:page3.php");
}
else
{
	header("Location:error.php");
}

?>