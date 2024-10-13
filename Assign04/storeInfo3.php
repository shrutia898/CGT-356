<?php
session_start(); //starts the session and allows you to use session variables
header("Cache-Control: no-cache");


if(!empty($_POST["project_id"]))
	$_SESSION["project_id"] = $_POST["project_id"];
if(!empty($_POST["project_name"]))
	$_SESSION["project_name"] = $_POST["project_name"];
if(!empty($_POST["project_description"]))
	$_SESSION["project_description"] = $_POST["project_description"];
if(!empty($_POST["manager_name"]))
	$_SESSION["manager_name"] = $_POST["manager_name"];
if(!empty($_POST["manager_email"]))
	$_SESSION["manager_email"] = $_POST["manager_email"];
if(!empty($_POST["manager_phone"]))
	$_SESSION["manager_phone"] = $_POST["manager_phone"];

//prevent people from navigating directly to this page

if( (empty($_POST["project_id"])) || (empty($_POST["project_name"]))||
	(empty($_POST["project_description"])) || (empty($_POST["manager_name"]))||	
	(empty($_POST["manager_email"])) || (empty($_POST["manager_phone"]))
  )							
	{
		$_SESSION["errorMessage"] = "* Please fill out all the required form elements";
		header("Location:index3.php");
		exit;
	}


header("Location:displayInfo3.php")

?>