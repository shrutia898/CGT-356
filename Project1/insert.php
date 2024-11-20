<?php
session_start();

if(empty($_SESSION["errorMessage"])){
	$_SESSION["errorMessage"] = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Library System- Insert</title>
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
<h1 style="text-align:center">Library System - Insert</h1>
<?php
	include("includes/menu.php");
?>

<form id="form0" method="post" action="doInsert.php">
	<fieldset>
		<legend>Insert into Shipper table</legend>
        <ul>
            <li><label title="BookID" for="BookID">BookID</label>
            	<input type="text" name="BookID" id="BookID" size="20" maxlength="13"/></li>
			<li><label title="Title" for="Title">Title</label>
            	<input type="text" name="Title" id="Title" size="20" maxlength="50"/></li>
            <li><label title="Author" for="Author">Author</label><input name="Author" id="Author" type="text" size="50" maxlength="50"/></li>
            <li style="text-align: end">
			<label title="Topic" for="Topic">Topic</label>
			<select name="Topic" id="Topic">
			  <option value="Literature">Literature</option>
			  <option value="Dystopian">Dystopian</option>
			  <option value="Classic">Classic</option>
			  <option value="Adventure">Adventure</option>
			  <option value="Political">Political</option>
			  <option value="Comedy">Comedy</option>
			  <option value="Romance" >Romance</option>
			  <option value="Historical" >Historical</option>
			  <option value="Religion" >Religion</option>
			  <option value="Epic">Epic</option>
			  <option value="Bibliography">Bibliography</option>
			  <option value="Fantasy">Fantasy</option>
			  <option value="Children's">Children's</option>
			  <option value="Economy">Economy</option>
			  <option value="Science">Science</option>
			  <option value="Technology">Technology</option>
			  </select>
            </li>
	<li>
    <label title="Genre" for="Genre">Genre</label><br />
    <div class="radio-group">
        <div class="radio-column">
            <label><input type="radio" name="Genre" value="Classic"> Classic</label><br>
            <label><input type="radio" name="Genre" value="Fiction"> Fiction</label><br>
            <label><input type="radio" name="Genre" value="Non Fiction" > Non Fiction</label><br>
            <label><input type="radio" name="Genre" value="Science Fiction" > Science Fiction</label><br>
            <label><input type="radio" name="Genre" value="Mystery"> Mystery</label><br>
            <label><input type="radio" name="Genre" value="Biography"> Biography</label><br>
            <label><input type="radio" name="Genre" value="Thriller"> Thriller</label><br>
            <label><input type="radio" name="Genre" value="Adventure"> Adventure</label><br>
        </div>
    </div>
</li>
			<li><label title="ISBN" for="ISBN">ISBN</label><input name="ISBN" id="ISBN" type="text" size="13" maxlength="13" minlength = "13"/></li>
			<li>
				<label title="DatePublished" for="DatePublished">Date Published</label>
				<input name="DatePublished" id="DatePublished" type="date"
				 />
			</li>
			<li>
				<label title="Hardcover" for="Hardcover">Hardcover</label><br />
				<div class="checkbox-group-inline" style="display:block; margin: 20px;">
					<label>
						<input type="checkbox" name="Hardcover" value="Yes"> Yes
					</label>
					<label>
						<input type="checkbox" name="Hardcover" value="No"> No
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
?>

<script type="text/javascript">
	document.getElementById("BookID").focus();
</script>

</body>
</html>