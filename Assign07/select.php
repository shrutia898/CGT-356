<?php
session_start();
include("includes/openDBConn.php");
$_SESSION["errorMessage"] = "";
?>
<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Assign07 - Select</title>
</head>
<?php
	#writing query and storing in variable called sql
	$sql = "SELECT ProjectID, ProjName, ProjCategory, ProjDesc, StartDate, EndDate FROM Assign06Projects ORDER BY ProjectID ASC";

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
	<h1 style="text-align: center">Assign07 - Select</h1>
	<?php
	include("includes/menu.php");
	?>
	
	<table style="border: 0px; width: 700px; padding:0px auto; border-spacing:0px; margin: 0 auto" title="Listing of Projects">
		<thead>
			<tr>
				<th colspan = "6" style="font-weight: bold; background-color: #add8e6; text-align: center; text-decoration: underline; ">Assign06Projects table</th>
			</tr>
			<tr>
				<th style = "background-color: #add8e6; font-weight: bold;">ProjectID</th>
				<th style = "background-color: #add8e6; font-weight: bold;">ProjName</th>
				<th style = "background-color: #add8e6; font-weight: bold;">ProjCategory</th>
				<th style = "background-color: #add8e6; font-weight: bold;">ProjDesc</th>
				<th style = "background-color: #add8e6; font-weight: bold;">StartDate</th>
				<th style = "background-color: #add8e6; font-weight: bold;">EndDate</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="6" style="text-align: center; font-style: italic; padding:10px;">Information pulled from MySQL database</td>
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
					<td style="border-right:1px solid #000000";><?php echo( trim($row["ProjectID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["ProjName"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["ProjCategory"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["ProjDesc"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["StartDate"]) );?></td>
					<td><?php echo(trim ($row["EndDate"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>
	<?php
	#writing query and storing in variable called sql
	$sql = "SELECT CarID, CarMake, CarModel, CarYear, CarColor, CarHybrid FROM Assign06Cars ORDER BY CarID ASC";

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
	<table style="border: 0px; width: 500px; padding:0px auto; border-spacing:0px; margin: 0 auto; padding:30px 0px;  background-color: add8e6;" title="Listing of Cars">
		<thead>
			<tr>
				<th colspan = "6" style="font-weight: bold; background-color: add8e6; text-align: center; text-decoration: underline; ">Assign06Cars table</th>
			</tr>
			<tr>
				<th style = "background-color: #add8e6; font-weight: bold;">CarID</th>
				<th style = "background-color: #add8e6; font-weight: bold;">CarMake</th>
				<th style = "background-color: #add8e6; font-weight: bold;">CarModel</th>
				<th style = "background-color: #add8e6; font-weight: bold;">CarYear</th>
				<th style = "background-color: #add8e6; font-weight: bold;">CarColor</th>
				<th style = "background-color: #add8e6; font-weight: bold;">CarHybrid</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="6" style="text-align: center; font-style: italic; padding:10px;">Information pulled from MySQL database</td>
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
					<td style="border-right:1px solid #000000";><?php echo( trim($row["CarID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["CarMake"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["CarModel"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["CarYear"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["CarColor"]) );?></td>
					
					<td><?php echo(trim ($row["CarHybrid"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>

</body>
</html>