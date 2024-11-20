<?php
session_start();

$ProjectID = 46;
$ProjName = addslashes( $_POST["projName"] );
$ProjCategory = addslashes( $_POST["projCategory"] );
$ProjDesc = addslashes( $_POST["projDesc"] );
$StartMonth = addslashes( $_POST["startMonth"] );
$StartDay = addslashes( $_POST["startDay"] );
$EndMonth = addslashes( $_POST["endMonth"] );
$EndDay = addslashes( $_POST["endDay"] );

$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );
$ProjName = str_replace($removeThese, "", $ProjName);
$ProjDesc = str_replace($removeThese, "", $ProjDesc);

if(($ProjectID == " ") || ($ProjName == " ") || ($ProjCategory == "- Category -") || ($ProjDesc == " ") || ($StartMonth == "- Month -") || ($StartDay == "- Day - ") || ($EndMonth == "- Month -") || ($EndDay == "- Day -"))
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: updateProject.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

if(!is_numeric($ProjectID))
{
	$_SESSION["errorMessage"] = "ProjectID needs to be a numeric value";
	header("Location: updateProject.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");


$StartDate = $StartMonth." ".$StartDay;
$EndDate = $EndMonth." ".$EndDay;

$sql = "UPDATE Assign06Projects SET ProjName='".$ProjName."', ProjCategory = '".$ProjCategory."', ProjDesc='".$ProjDesc."', StartDate='".$StartDate."', EndDate='".$EndDate."' WHERE ProjectID=46";

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
