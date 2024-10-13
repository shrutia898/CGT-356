<?php
session_start(); //starts the session and allows you to use session variables
header("Cache-Control: no-cache");


if(!empty($_POST["school"]))
	$_SESSION["school"] = $_POST["school"];
if(!empty($_POST["schoolAddress"]))
	$_SESSION["schoolAddress"] = $_POST["schoolAddress"];
if(!empty($_POST["schoolCity"]))
	$_SESSION["schoolCity"] = $_POST["schoolCity"];
if(!empty($_POST["schoolZipCode"]))
	$_SESSION["schoolZipCode"] = $_POST["schoolZipCode"];
if(!empty($_POST["schoolState"]))
	$_SESSION["schoolState"] = $_POST["schoolState"];
if(!empty($_POST["schoolType"]))
	$_SESSION["schoolType"] = $_POST["schoolType"];
if(!empty($_POST["major"]))
	$_SESSION["major"] = $_POST["major"];
if(!empty($_POST["dorm"]))
	$_SESSION["dorm"] = $_POST["dorm"];
if(!empty($_POST["minor"]))
	$_SESSION["minor"] = $_POST["minor"];
if(!empty($_POST["clubs"]))
	$_SESSION["clubs"] = $_POST["clubs"];
if(!empty($_POST["courses"]))
	$_SESSION["courses"] = $_POST["courses"];
if(!empty($_POST["gpa"]))
	$_SESSION["gpa"] = $_POST["gpa"];

//prevent people from navigating directly to this page

if( (empty($_POST["school"])) || (empty($_POST["schoolCity"]))||
	(empty($_POST["schoolAddress"])) || (empty($_POST["schoolZipCode"]))||	
	(empty($_POST["schoolState"])) || (empty($_POST["schoolType"]))|| 
	(empty($_POST["major"])) || (empty($_POST["dorm"]))
  )							
	{
		$_SESSION["errorMessage"] = "* Please fill out all the required form elements";
		header("Location:index2.php");
		exit;
	}
								

//if the shipping name, copy the billing info into shipping

if(empty($_POST["dormCity"]))
{
	//Shipping name is empty - we have to assign the name variables to sname - etc
	$_SESSION["dormCity"] = $_SESSION["schoolCity"];
	$_SESSION["dormState"] = $_SESSION["schoolState"];
	$_SESSION["dormZip"] = $_SESSION["schoolZipCode"];
}
else
{
	//Shipping name contained a value, so get the rest of the shipping info
	$_SESSION["dormCity"] = $_POST["dormCity"];
	$_SESSION["dormState"] = $_POST["dormState"];
	$_SESSION["dormZip"] = $_POST["dormZip"];
}

header("Location:displayInfo2.php")

?>