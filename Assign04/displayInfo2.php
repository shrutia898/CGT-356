<?php
//if the school input field is empty; it redirects user to go to indexB.php -- if not user can stay at getFormDataB.php
	session_start();
if(empty($_SESSION["school"]))
{
	header("Location:index2.php");
	exit;
}
$_SESSION["errorMessage"] = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 04 - displayInfo Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #B9B8B8;
            padding: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
        }
        fieldset {
            background-color: white;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: 600;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        span {
            color: red;
        }
		caption{
			text-decoration: none;
			
		}
		a{
			text-decoration: none;
		}
		div#nav{width: 400px; position:absolute; top: 330px; left:200px;}
		div#nav1{float:left;}
		div span#nav2{float:right;}
    </style>
</head>
<body>

<h1>Assign 03 - displayFormDataB Page</h1>
	<caption><a href="index.php">Click here to go to index.php</a></caption>

<form id="form0" method="post" action="getFormData2.php">
    <fieldset>
        <div class="container">
            <div class="row">
                <!-- School Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="school" class="form-label">School<span>*</span></label>
                        <p><?php echo($_SESSION["school"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="schoolAddress" class="form-label">School Address<span>*</span></label>
                        <p><?php echo($_SESSION["schoolAddress"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="schoolCity" class="form-label">City<span>*</span></label>
                        <p><?php echo($_SESSION["schoolCity"]);?></p>
                    </div>
					<div class="mb-3">
                        <label for="schoolState" class="form-label">State<span>*</span></label>
                        <p><?php echo($_SESSION["schoolState"]);?></p>
                    </div>
					<div class="mb-3">
                        <label for="schoolZip" class="form-label">Zip Code<span>*</span></label>
                       <p><?php echo($_SESSION["schoolZipCode"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="schoolType" class="form-label">School Type<span>*</span></label>
                        <p><?php echo($_SESSION["schoolType"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Major<span>*</span></label>
                        <p><?php echo($_SESSION["major"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="minor" class="form-label">Minor<span>*</span></label>
                        <p><?php echo($_SESSION["minor"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="clubs" class="form-label">Clubs<span>*</span></label>
                        <p><?php echo($_SESSION["clubs"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="courses" class="form-label">Current Courses<span>*</span></label>
                       <p><?php echo($_SESSION["courses"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="gpa" class="form-label">GPA<span>*</span></label>
                        <p><?php echo($_SESSION["gpa"]);?></p>
                    </div>
                </div>
                
                <!-- Dorm Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="dorm" class="form-label">Dorm Address<span>*</span></label>
                        <p><?php echo($_SESSION["dorm"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="dormCity" class="form-label">City</label>
                        <p><?php echo($_SESSION["dormCity"]);?></p>
                    </div>
					<div class="mb-3">
                        <label for="dormState" class="form-label">State</label>
                        <p><?php echo($_SESSION["dormState"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="dormZip" class="form-label">Zip Code</label>
                       <p><?php echo($_SESSION["dormZip"]);?></p>
                    </div>
                </div>
            </div>
            
        </div>
    </fieldset>
</form>
	
	<div id="nav">
<span id="nav1"><a href = "index.php">Continue Updating</a></span>
<span id="nav2"><a href="finishedUpdate.php">Finished Updating</a></span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
