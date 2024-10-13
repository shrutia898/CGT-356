<?php
session_start();
if(empty($_SESSION["name"]))
{
	header("Location:index.php");
	exit;
}
$_SESSION["errorMessage"] = "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Assign 04 - displaYinfoPage</title> 
	<style type="text/css">
		ul{ list-style:none; margin-top:5px;}
		ul li{ display:block; float:left; width:100%; height:1%;}
		ul li label{ float:left; padding:7px; color:#6666ff}
		ul li input, ul li textarea{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
		li input:focus, li textarea:focus{ border:1px solid #666; }
		fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
		legend{ color:#000099; margin:0 10px 0 0; padding:0 5px; font-size:11pt; font-weight:bold; }
		ul li span{color:#000099; margin-left: 10px; font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif"}
		fieldset#billing {position:absolute; top:60px; left:20px; }
		fieldset#shipping {position:absolute; top:60px; left:460px; }
		div#nav{width: 400px; position:absolute; top: 330px; left:200px;}
		div#nav1{float:left;}
		div span#nav2{float:right;}
	
		
	</style>
</head>
<body>
<h1 style="font-size:14pt; text-indent:360px;">Assign 04 - displayInfo</h1>

<form id="form0" method="post" action="getFormData.php"> 
    <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
            <li><span><?php echo($_SESSION["name"]);?></span></li>
			<li><span><?php echo($_SESSION["address"]);?></span></li>
			<li><span><?php echo($_SESSION["city"]);?>, <?php echo($_SESSION["state"]);?>, <?php echo($_SESSION["zip"]);?></span></li>
			<li><span><?php echo($_SESSION["country"]);?></span></li>
			<li><span><?php echo($_SESSION["phone"]);?></span></li>
			<li><span><?php echo($_SESSION["email"]);?></span></li>
			<li><span><br>Comments:</br><?php echo($_SESSION["comments"]);?></span></li>
            
        </ul>
    </fieldset>
    <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
            <li><span><?php echo($_SESSION["Sname"]);?></span></li>
			<li><span><?php echo($_SESSION["Saddress"]);?></span></li>
			<li><span><?php echo($_SESSION["Scity"]);?>, <?php echo($_SESSION["Sstate"]);?>, <?php echo($_SESSION["Szip"]);?></span></li>
			<li><span><?php echo($_SESSION["Scountry"]);?></span></li>
        </ul>
    </fieldset>
</form>

<div id="nav">
<span id="nav1"><a href = "index.php">Continue Updating</a></span>
<span id="nav2"><a href="finishedUpdate.php">Finished Updating</a></span>
</div>


</body>
</html>
