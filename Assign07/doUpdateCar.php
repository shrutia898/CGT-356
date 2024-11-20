<?php
session_start();

$CarID = $_POST["carID"];
$CarMake = addslashes( $_POST["carMake"] );
$CarModel = addslashes( $_POST["carModel"] );
$CarYear = addslashes( $_POST["carYear"] );
$CarColor = addslashes( $_POST["carColor"] );
$Hybrid = addslashes( $_POST["carHybrid"] );


$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );
$CarModel = str_replace($removeThese, "", $CarModel);
$CarColor = str_replace($removeThese, "", $CarColor);

if(empty($CarID))
	header("Location:select.php");

if(($CarID == "") || ($CarMake == "- Make -") || ($CarModel == "") || ($CarYear == "- Year -") || ($CarColor == "") || ($Hybrid == ""))
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: updateCar.php");
	exit;
}
else if(!is_numeric($CarID))
{
	$_SESSION["errorMessage"] = "CarID needs to be a numeric value";
	header("Location: updateCar.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");


{
	$_SESSION["errorMessage"] = "";
}

$sql = "UPDATE Assign06Cars SET CarMake='".$CarMake."', CarModel='".$CarModel."', CarYear='".$CarYear."', CarColor='".$CarColor."', CarHybrid='".$CarHybrid."' WHERE CarID=".$CarID;

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
