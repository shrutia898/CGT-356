<?php
session_start();
include("includes/openDBConn.php");
$_SESSION["errorMessage"] = "";
?>
<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Library DB Select</title>
</head>
<?php
	#writing query and storing in variable called sql
	$sql = "SELECT BookID, Title, Author, Topic, Genre, ISBN, DatePublished, Hardcover FROM P1Books";

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
	<h1 style="text-align: center">Library DB - Select</h1>
	<?php
	include("includes/menu.php");
	?>
	
	<table style="border: 0px; width: 900px; padding:0px auto; border-spacing:0px; margin: 0 auto" title="Listing of Users">
		<thead>
			<tr>
				<th colspan = "8" style="font-weight: bold; background-color: b1946c; text-align: center; text-decoration: underline; ">Book Collection</th>
			</tr>
			<tr>
				<th style = "background-color: #b1946c; font-weight: bold;">BookID</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Title</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Author</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Topic</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Genre</th>
				<th style = "background-color: #b1946c; font-weight: bold;">ISBN</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Date Published</th>
				<th style = "background-color: #b1946c; font-weight: bold;">Hardcover</th>
			</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="8" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
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
					<td style="border-right:1px solid #000000";><?php echo( trim($row["BookID"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["Title"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["Author"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo( trim($row["Topic"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["Genre"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["ISBN"]) );?></td>
					<td style="border-right:1px solid #000000";><?php echo(trim ($row["DatePublished"]) );?></td>
					<td><?php echo(trim ($row["Hardcover"]) );?></td>
				</tr>
			
				<?php
				#end of for loop
			}
		?>
		</tbody>
	</table>
</body>
</html>