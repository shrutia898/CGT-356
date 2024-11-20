<?php 
session_start();

include("includes/openDBConn.php");

$BookID = 2;
$Title = addslashes($_POST["Title"]);
$Author = addslashes($_POST["Author"]);
$Topic = addslashes($_POST["Topic"]);
$Genre = addslashes($_POST["Genre"]);
$ISBN = addslashes($_POST["ISBN"]);
$DatePublished = addslashes($_POST["DatePublished"]);
$Hardcover = addslashes($_POST["Hardcover"]);


$removeThese = array("<?php", "<?", "</", "<", "?>", "/>", ";" );

$Title = str_replace($removeThese, "", $Title);
$Author = str_replace($removeThese, "", $Author);
$ISBN = str_replace($removeThese, "", $ISBN);

if(empty($BookID)){
	header("Location:select.php");
}

$sql = "UPDATE P1Books SET Title='".$Title."', Author='".$Author."', Topic='".$Topic."', Genre='".$Genre."', ISBN='".$ISBN."', DatePublished='".$DatePublished."', Hardcover='".$Hardcover."' WHERE BookID='".$BookID."'";
echo($sql);
//echo($sql);

$result = mysqli_query($db, $sql);

include("includes/closeDBConn.php");

header("Location:select.php");
?>