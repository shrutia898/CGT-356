<?php
//if the school input field is empty; it redirects user to go to indexB.php -- if not user can stay at getFormDataB.php
	session_start();
if(empty($_SESSION["project_id"]))
{
	header("Location:index3.php");
	exit;
}
$_SESSION["errorMessage"] = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 04 - Project Form</title>
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
		div#nav{width: 400px; position:absolute; top: 330px; left:500px;}
		div#nav1{float:left;}
		div span#nav2{float:right;}
    </style>
</head>
<body>

<h1>Assign 03 - displayInfo Page</h1>
	<caption><a href="index.php">Click here to go to index.php</a></caption> <br />
	<caption><a href="inde2.php">Click here to go to index2.php</a></caption>

<form id="form0" method="post" action="getFormData2.php">
    <fieldset>
        <div class="container">
            <div class="row">
                <!-- School Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="school" class="form-label">Project ID<span>*</span></label>
                        <p><?php echo($_SESSION["project_id"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Project Name<span>*</span></label>
                        <p><?php echo($_SESSION["project_name"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="project_description" class="form-label">Project Description<span>*</span></label>
                        <p><?php echo($_SESSION["project_description"]);?></p>
                    </div>
					<div class="mb-3">
                        <label for="manager_name" class="form-label">Manager Name<span>*</span></label>
                        <p><?php echo($_SESSION["manager_name"]);?></p>
                    </div>
					<div class="mb-3">
                        <label for="manager_email" class="form-label">Manager Email<span>*</span></label>
                       <p><?php echo($_SESSION["manager_email"]);?></p>
                    </div>
                    <div class="mb-3">
                        <label for="manager_phone" class="form-label">Manager Phone<span>*</span></label>
                        <p><?php echo($_SESSION["manager_phone"]);?></p>
                    </div>
                    
                </div>
                
         
            </div>
            
        </div>
    </fieldset>
</form>
	
	<div id="nav">
<span id="nav1"><a href = "index3.php">Continue Updating</a></span>
<span id="nav2"><a href="finishedUpdate.php">Finished Updating</a></span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
