<?php 
session_start();


$ShipperID = $_POST["shipperID"];
$CompanyName = addslashes( $_POST["companyName"]);
$Phone = addslashes( $_POST["phone"]);

$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );
$CompanyName = str_replace($removeThese, "", $CompanyName);
$Phone = str_replace($removeThese, "", $Phone);

if(empty($ShipperID)){
	header("Location:select.php");
}

include("includes/openDBConn.php");


$sql = "UPDATE shippersLab5 SET CompanyName='".$CompanyName."', Phone='".$Phone."' WHERE ShipperID=".$ShipperID;
echo($sql);

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
?>