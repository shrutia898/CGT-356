<?php
session_start();

$ProjectID = $_POST["projectID"];
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

if(($ProjectID == "") || ($ProjName == "") || ($ProjCategory == "- Categories -") || ($ProjDesc == "") || ($StartMonth == "- End Month -") || ($StartDay == "- Start Day -") || ($EndMonth == "- End Month -") || ($EndDay == "- End Day -"))
{
	$_SESSION["errorMessage"] = "You must enter a value for all boxes.";
	header("Location: insertProject.php");
	exit;
}
else if(!is_numeric($ProjectID))
{
	$_SESSION["errorMessage"] = "ProjectID needs to be a numeric value";
	header("Location: insertProject.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT ProjectID FROM Assign06Projects WHERE ProjectID=".$ProjectID;
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
	$_SESSION["errorMessage"] = "The ProjectID you entered already exists!";
	header("Location: insertProject.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

$StartDate = $StartMonth." ".$StartDay;
$EndDate = $EndMonth." ".$EndDay;

$sql = "INSERT INTO Assign06Projects(ProjectID, ProjName, ProjCategory, ProjDesc, StartDate, EndDate) VALUES(".$ProjectID.",'".$ProjName."','".$ProjCategory."','".$ProjDesc."','".$StartDate."','".$EndDate."')";
echo($sql);

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
exit;


?>
