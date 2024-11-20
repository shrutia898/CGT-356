<?php 
session_start();

if(empty($_SESSION["errorMessage"]))
{
	$_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Library Database - Update</title>
	<style type="text/css">
        form { width:600px; margin:0px auto;}
        ul{ list-style:none; margin-top:5px;}
        ul li { display:block; float:left; width:100%; height:1%; }
        ul li label { float:left; padding:7px; }
		ul li span { color:#0000ff; font-weight:bold;}
        ul li input { float:right; margin-right:10px; border:1px solid #000; padding:3px; width:240px;}
		input#submit {width:248px;}
		li input:focus { border:1px solid #999; }
		fieldset{ padding:10px; border:1px solid #000; width:500px; overflow:auto; margin:10px;}
		legend{ color:#000000; margin:0 10px 0 0; padding:0 5px; font-size:11pt; font-weight:bold; }
		.radio-group{display:flex; justify-content: flex-end; width: 300px; margin:30px;}
    </style>
</head>
 
<body>
<h1 style="text-align:center">&nbsp;</h1>
	<h1 style="text-align:center">Library Database - Update</h1>
<?php
	include("includes/menu.php");

$sql = "SELECT BookID, Author, Title, Topic, Genre, ISBN, DatePublished, Hardcover from P1Books WHERE BookID=2";

$result = mysqli_query($db, $sql); 

if(empty($result)){
	$num_results = 0;
}
else{
	$num_results = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
}

if($num_results == 0){
	$_SESSION["errorMessage"] = "You must first insert a BookID with ID.";
}
?>
<form id="form0" method="post" action="doUpdate.php">
	<fieldset>
		<legend>Update Book Table</legend>
        <ul>
            <li><label title="BookID" for="BookID">BookID</label>
            	<input type="text" name="BookID" placeholder="2" value="<?php if($num_results != 0){echo(trim( $row["BookID"] ) );}?>" disabled /></li>
			<li><label title="Title" for="Title">Title</label>
            	<input type="text" name="Title" id="Title" size="20" maxlength="50" 
					   value="<?php if($num_results != 0){echo(trim($row["Title"] ) );}?>"  /></li>
            <li><label title="Author" for="Author">Author</label><input name="Author" id="Author" type="text" size="50" maxlength="50"
					value="<?php if($num_results != 0){echo(trim( $row["Author"] ) );}?>"/></li>
            <li style="text-align: end">
			<label title="Topic" for="Topic">Topic</label>
			<select name="Topic" id="Topic">
			  <option value="Literature" <?php if ($num_results != 0 && trim($row["Topic"]) == "Literature") echo 'selected'; ?>>Literature</option>
			  <option value="Dystopian" <?php if ($num_results != 0 && trim($row["Topic"]) == "Dystopian") echo 'selected'; ?>>Dystopian</option>
			  <option value="Classic" <?php if ($num_results != 0 && trim($row["Topic"]) == "Classic") echo 'selected'; ?>>Classic</option>
			  <option value="Adventure" <?php if ($num_results != 0 && trim($row["Topic"]) == "Adventure") echo 'selected'; ?>>Adventure</option>
			  <option value="Political" <?php if ($num_results != 0 && trim($row["Topic"]) == "Political") echo 'selected'; ?>>Political</option>
			  <option value="Comedy" <?php if ($num_results != 0 && trim($row["Topic"]) == "Comedy") echo 'selected'; ?>>Comedy</option>
			  <option value="Romance" <?php if ($num_results != 0 && trim($row["Topic"]) == "Romance") echo 'selected'; ?>>Romance</option>
			  <option value="Historical" <?php if ($num_results != 0 && trim($row["Topic"]) == "Historical") echo 'selected'; ?>>Historical</option>
			  <option value="Religion" <?php if ($num_results != 0 && trim($row["Topic"]) == "Religion") echo 'selected'; ?>>Religion</option>
			  <option value="Epic" <?php if ($num_results != 0 && trim($row["Topic"]) == "Epic") echo 'selected'; ?>>Epic</option>
			  <option value="Bibliography" <?php if ($num_results != 0 && trim($row["Topic"]) == "Bibliography") echo 'selected'; ?>>Bibliography</option>
			  <option value="Fantasy" <?php if ($num_results != 0 && trim($row["Topic"]) == "Fantasy") echo 'selected'; ?>>Fantasy</option>
			  <option value="Children's" <?php if ($num_results != 0 && trim($row["Topic"]) == "Children's") echo 'selected'; ?>>Children's</option>
			  <option value="Economy" <?php if ($num_results != 0 && trim($row["Topic"]) == "Economy") echo 'selected'; ?>>Economy</option>
			  <option value="Science" <?php if ($num_results != 0 && trim($row["Topic"]) == "Science") echo 'selected'; ?>>Science</option>
			  <option value="Technology" <?php if ($num_results != 0 && trim($row["Topic"]) == "Technology") echo 'selected'; ?>>Technology</option>
			  </select>
            </li>
	<li>
    <label title="Genre" for="Genre">Genre</label><br />
    <div class="radio-group">
        <div class="radio-column">
            <label><input type="radio" name="Genre" value="Classic" <?php if ($num_results != 0 && trim($row["Genre"]) == "Classic") echo 'checked'; ?>> Classic</label><br>
            <label><input type="radio" name="Genre" value="Fiction" <?php if ($num_results != 0 && trim($row["Genre"]) == "Fiction") echo 'checked'; ?>> Fiction</label><br>
            <label><input type="radio" name="Genre" value="Non Fiction" <?php if ($num_results != 0 && trim($row["Genre"]) == "Non Fiction") echo 'checked'; ?>> Non Fiction</label><br>
            <label><input type="radio" name="Genre" value="Science Fiction" <?php if ($num_results != 0 && trim($row["Genre"]) == "Science Fiction") echo 'checked'; ?>> Science Fiction</label><br>
            <label><input type="radio" name="Genre" value="Mystery" <?php if ($num_results != 0 && trim($row["Genre"]) == "Mystery") echo 'checked'; ?>> Mystery</label><br>
            <label><input type="radio" name="Genre" value="Biography" <?php if ($num_results != 0 && trim($row["Genre"]) == "Biography") echo 'checked'; ?>> Biography</label><br>
            <label><input type="radio" name="Genre" value="Thriller" <?php if ($num_results != 0 && trim($row["Genre"]) == "Thriller") echo 'checked'; ?>> Thriller</label><br>
            <label><input type="radio" name="Genre" value="Adventure" <?php if ($num_results != 0 && trim($row["Genre"]) == "Adventure") echo 'checked'; ?>> Adventure</label><br>
        </div>
    </div>
</li>
			<li><label title="ISBN" for="ISBN">ISBN</label><input name="ISBN" id="ISBN" type="text" size="13" maxlength="13"
					value="<?php if($num_results != 0){echo(trim( $row["ISBN"] ) );}?>"/></li>
			<li>
				<label title="DatePublished" for="DatePublished">Date Published</label>
				<input name="DatePublished" id="DatePublished" type="date"
					   value="<?php if($num_results != 0){echo(trim( $row["DatePublished"] ) );}?>" />
			</li>
			<li>
				<label title="Hardcover" for="Hardcover">Hardcover</label><br />
				<div class="checkbox-group-inline" style="display:block; margin: 20px;">
					<label>
						<input type="checkbox" name="Hardcover" value="Yes" <?php if ($num_results != 0 && trim($row["Hardcover"]) == "Yes") echo 'checked'; ?>> Yes
					</label>
					<label>
						<input type="checkbox" name="Hardcover" value="No" <?php if ($num_results != 0 && trim($row["Hardcover"]) == "No") echo 'checked'; ?>> No
				</label>
    			</div>
</li>
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
	document.getElementById("BookID").focus();
</script>
</body>
</html>

