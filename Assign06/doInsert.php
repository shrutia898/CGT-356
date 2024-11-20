<?php
session_start();

$ShipperID = $_POST["shipperID"];
$CompanyName = addslashes( $_POST["companyName"] );
$Phone = addslashes( $_POST["phone"] );

$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );
$CompanyName = str_replace($removeThese, "", $CompanyName);
$Phone = str_replace($removeThese, "", $Phone);

if(($ShipperID == "") || ($CompanyName == "") || ($Phone == "") )
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: insert.php");
	exit;
}
else if(!is_numeric($ShipperID))
{
	$_SESSION["errorMessage"] = "ShipperID needs to be a numeric value";
	header("Location: insert.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT ShipperID FROM shippersLab5 WHERE ShipperID=".$ShipperID;
echo($sql."<br />");

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
	$_SESSION["errorMessage"] = "The ShipperID you entered already exists!";
	header("Location: insert.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}
$sql = "INSERT INTO shippersLab5(ShipperID, CompanyName, Phone) VALUES(".$ShipperID.",'".$CompanyName."','".$Phone."')";
echo($sql."<br />");

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
