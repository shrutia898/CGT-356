<?php 
session_start();

if(empty($_SESSION["errorMessage"]))
{
	$_SESSION["errorMessage"] = "";
}

$id=$_GET["id"];

include("includes/openDBConn.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Cache-control" content="no-cache" />
    <title>Lab 6 - Update</title>
	<style type="text/css">
        form { width:400px; margin:0px auto;}
        ul{ list-style:none; margin-top:5px;}
        ul li { display:block; float:left; width:100%; height:1%; }
        ul li label { float:left; padding:7px; }
		ul li span { color:#0000ff; font-weight:bold;}
        ul li input { float:right; margin-right:10px; border:1px solid #000; padding:3px; width:240px;}
		input#submit {width:248px;}
		li input:focus { border:1px solid #999; }
		fieldset{ padding:10px; border:1px solid #000; width:420px; overflow:auto; margin:10px;}
		legend{ color:#000000; margin:0 10px 0 0; padding:0 5px; font-size:11pt; font-weight:bold; }
    </style>
</head>
 
<body>
<h1 style="text-align:center">&nbsp;</h1>
<h1 style="text-align:center">Lab 6 - Update User</h1>
<?php
	include("includes/menu.php");

$sql = "SELECT UserID, LastName, FirstName, Title from usersLab5 WHERE userID=".$id;

$result = mysqli_query($db, $sql); 

if(empty($result)){
	$num_results = 0;
}
else{
	$num_results = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
}

if($num_results == 0){
	$_SESSION["errorMessage"] = "You must first insert a shipper with ID 2.";
}
?>
<form id="form0" method="post" action="doUpdateUser.php">
	<fieldset>
		<legend>Update User table</legend>
        <ul>
            <li><label title="UserID" for="userIDis">User ID</label>
            	<input type="text" name="userIDis" id="userIDis" size="20" maxlength="20" 
					   value="<?php if($num_results != 0){echo(trim($row["UserID"] ) );}?>" disabled="disabled" />
            	<input name="userID" id="userID" type="hidden" 
					   value="<?php if($num_results != 0){echo(trim($row["UserID"] ) );}?>"/></li>
			
            <li><label title="LastName" for="LastName">Last Name</label><input name="LastName" id="LastName" type="text" size="20" maxlength="20"
					value="<?php if($num_results != 0){echo(trim( $row["LastName"] ) );}?>"/></li>
            <li><label title="FirstName" for="FirstName">First Name</label><input name="FirstName" id="FirstName" type="text" size="20" maxlength="20" 
					value="<?php if($num_results != 0){echo(trim( $row["FirstName"] ) );}?>"/></li>
			  <li><label title="Title" for="Title">Title</label><input name="Title" id="Title" type="text" size="20" maxlength="20" 
					value="<?php if($num_results != 0){echo(trim( $row["Title"] ) );}?>"/></li>
            <li><span><?php echo($_SESSION["errorMessage"]); ?></span></li>
            <li><input type="submit" value="Update Info" name="submit" id="submit" /></li>
        </ul>
	</fieldset>
</form>
	<?php
		$_SESSION["errorMessage"] = "";
		include("includes/closeDBConn.php");
	?>

<script type="text/javascript">
	document.getElementById("companyName").focus();
</script>
</body>
</html>