<?php
#first parameter is location of DB
#second parameter is username
#third parameter is password

#connection to the database
@ $db = mysqli_connect("goss.tech.purdue.edu", "cgt356web1b", "Essential1b5138");

#connection to particular db
mysqli_select_db($db, "cgt356web1b") or die(mysqli_error());

if(!$db)
{
	echo("Error: could not connect to database. Please try again later.");
	exit;
}

?>