<?php
session_start();

$BookID = $_POST["BookID"];
$Author = addslashes( $_POST["Author"] );
$Title = addslashes( $_POST["Title"] );
$Topic = addslashes( $_POST["Topic"] );
$Genre = addslashes( $_POST["Genre"] );
$ISBN = addslashes( $_POST["ISBN"] );
$DatePublished = addslashes( $_POST["DatePublished"] );
$Hardcover = addslashes( $_POST["Hardcover"] );

$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );

$Title = str_replace($removeThese, "", $Title);
$Author = str_replace($removeThese, "", $Author);
$ISBN = str_replace($removeThese, "", $ISBN);

if(($BookID == "") || ($Author == "") || ($Title == "") || ($Topic == "") || ($Genre == "") || ($ISBN == "") || ($DatePublished == "") || ($Hardcover == "") )
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: insert.php");
	exit;
}
else if(!is_numeric($BookID))
{
	$_SESSION["errorMessage"] = "BookID needs to be a numeric value";
	header("Location: insert.php");
	exit;
}
else if(!is_numeric($ISBN))
{
	$_SESSION["errorMessage"] = "ISBN needs to be a numeric value";
	header("Location: insert.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT BookID FROM P1Books WHERE BookID=".$BookID;
echo($sql);

$result = mysqli_query($db, $sql);

if(empty($result))
{
	$num_results = 0;
}
else
{
	$num_results = mysqli_num_rows($result);
	
}
if($num_results != 0)
{
	$_SESSION["errorMessage"] = "The BookID you entered already exists!";
	header("Location: insert.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}
$sql = "INSERT INTO P1Books(BookID, Title, Author, Topic, Genre, ISBN, DatePublished, Hardcover) VALUES(".$BookID.",'".$Title."','".$Author."' ,'".$Topic."' ,'".$Genre."' ,'".$ISBN."' ,'".$DatePublished."' ,'".$Hardcover."')";
echo($sql);

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
