<?php
session_start();
include("includes/openDBConn.php");
$_SESSION["errorMessage"] = "";
?>
<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Lab 6 - Select</title>
</head>
<body>
	<h1 style="text-align: center">Assign06 - Select</h1>
<?php
	include("includes/menu.php");
	#writing query and storing in variable called sql
	$sql = "SELECT UserID, LastName, FirstName, Title FROM usersLab5";

	#mysql_query takes two parameters: first one is the specific db connection and the second is the sql query variable; runs query;
	$result = mysqli_query($db, $sql);

	if(empty($result))
	{
		$num_results = 0;
	}
	else
	{
		$num_results = mysqli_num_rows($result);
	}
?>
	
	<table style="border: 0px; width: 600px; padding:0px auto; border-spacing:0px; margin: 0 auto" title="Listing of Users">
		<thead>
			<tr>
				<th colspan = "5" style="font-weight: bold; background-color: b1946c; text-align: center; text-decoration: underline; ">usersLab5 table</th>
			</tr>
			<tr>
				<th style="font-weight: bold; background-color:#b1946c;">&nbsp;</th>
				<th style = "background-color: #b1946c; font-weight: bold;">UserID</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Last Name</th>
				<th style = "background-color: #b1946c; font-weight: bold;">First Name</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Title</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="5" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
			</tr>
		</tfoot>
		<tbody>
		<?php
			#making a for loop to get each row of the db
			for($i = 0; $i < $num_results; $i++)
			{
				#fetches sql arrays of each row
				$row = mysqli_fetch_array($result);
				
				?>
				<tr>
					<td style="border-right: 1px solid #000000">
						<a href="updateUser.php?id=<?php echo(trim($row["UserID"]));?>">edit</a>
						<a href="deleteUser.php?id=<?php echo(trim($row["UserID"]));?>">delete</a>
					</td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["UserID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["LastName"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["FirstName"]) );?></td>
					<td><?php echo(trim ($row["Title"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>
	
	<p>&nbsp;</p>
	<?php

	#writing query and storing in variable called sql
	$sql = "SELECT ShipperID, CompanyName, Phone FROM shippersLab5";

	#mysql_query takes two parameters: first one is the specific db connection and the second is the sql query variable; runs query;
	$result = mysqli_query($db, $sql);

	if(empty($result))
	{
		$num_results = 0;
	}
	else
	{
		$num_results = mysqli_num_rows($result);
	}
?>
	<table style="border: 0px; width: 500px; padding:0px auto; border-spacing:0px; margin: 0 auto; padding:30px 0px" title="Listing of Shippers">
		<thead>
			<tr>
				<th colspan = "4" style="font-weight: bold; background-color: b1946c; text-align: center; text-decoration: underline; ">shippersLab5 table</th>
			</tr>
			<tr>
				<th style="font-weight: bold; background-color:#b1946c;">&nbsp;</th>
				<th style = "background-color: #b1946c; font-weight: bold;">ShipperID</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Company Name</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Phone</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="4" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
			</tr>
		</tfoot>
		<tbody>
		<?php
			#making a for loop to get each row of the db
			for($i = 0; $i < $num_results; $i++)
			{
				#fetches sql arrays of each row
				$row = mysqli_fetch_array($result);
				
				?>
				<tr>
					<td style="border-right: 1px solid #000000">
						<a href="update.php?id=<?php echo(trim($row["ShipperID"]));?>">edit</a>
						<a href="delete.php?id=<?php echo(trim($row["ShipperID"]));?>">delete</a>
					</td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["ShipperID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["CompanyName"]) );?></td>
					<td><?php echo(trim ($row["Phone"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>

</body>
</html>