<?php
session_start();

$_SESSION["name"] = "";
$_SESSION["address"] = "";
$_SESSION["city"] = "";
$_SESSION["state"] = "";
$_SESSION["zip"] = "";
$_SESSION["email"] = "";
$_SESSION["phone"] = "";
$_SESSION["country"] = "";
$_SESSION["comments"] = "";
$_SESSION["Sname"] = "";
$_SESSION["Saddress"] = "";
$_SESSION["Scity"] = "";
$_SESSION["Sstate"] = "";
$_SESSION["Szip"] = "";
$_SESSION["Scountry"] = "";
$_SESSION["errorMessage"] = "";

session_unset();   //frees all session variables
session_destroy(); //destorys all data associated with current session

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Assign04 - Finished Update Page</title>
</head>

<body>
	<h1 style="font-start:14pt; text-indent:360px;">Assign04 - finished update page</h1>
	<p>Your information has been successfully updated in our database.</p>
</body>
</html>