<?php
session_start();
include("includes/openDBConn.php");
$_SESSION["errorMessage"] = "";
?>
<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Lab 6 - Pet Table</title>
</head>
<?php
	#writing query and storing in variable called sql
	$sql = "SELECT PetID, Name, Descript FROM Pet";

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
	<h1 style="text-align: center">Pet Example</h1>
	<?php
	include("includes/menu.php");
	?>
	
	<table style="border: 0px; width: 500px; padding:0px auto; border-spacing:0px; margin: 0 auto" title="Listing of Users">
		<thead>
			<tr>
				<th colspan = "3" style="font-weight: bold; background-color: b1946c; text-align: center; text-decoration: underline; ">Pet table</th>
			</tr>
			<tr>
				<th style = "background-color: #b1946c; font-weight: bold;">PetID</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Name</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Descript</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="3" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
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
					<td style="border-right:1px solid #000000";><?php echo( trim($row["PetID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["Name"]) );?></td>
					<td><?php echo(trim ($row["Descript"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>
	
</body>
</html>