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

if(($CarID == "") || ($CarMake == "- Make -") || ($CarModel == "") || ($CarYear == "- Year -") || ($CarColor == "") || ($Hybrid == ""))
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: insertCar.php");
	exit;
}
else if(!is_numeric($CarID))
{
	$_SESSION["errorMessage"] = "CarID needs to be a numeric value";
	header("Location: insertCar.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT CarID FROM Assign06Cars WHERE CarID=".$CarID;
//echo($sql);

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
	$_SESSION["errorMessage"] = "The CarID you entered already exists!";
	header("Location: insertCar.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}
$sql = "INSERT INTO Assign06Cars(CarID, CarMake, CarModel, CarYear, CarColor, CarHybrid) VALUES(".$CarID.",'".$CarMake."','".$CarModel."','".$CarYear."','".$CarColor."','".$Hybrid."')";
echo($sql);

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
