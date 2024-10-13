<?php
//if the school input field is empty; it redirects user to go to indexB.php -- if not user can stay at getFormDataB.php
	session_start();
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
		divErrorMsg{color:red; font-weight: bold; font-size: 12pt; position: absolute; top: 420px;}
    </style>
</head>
<body>

<h1>Assign 04 - Project Form</h1>
	<caption><a href="index.php">Click here to go to index.php</a></caption><br/>
	<caption><a href="index3.php">Click here to go to index3.php</a></caption>

<form id="form0" method="post" action="storeInfo3.php">
    <fieldset>
        <div class="container">
            <div class="row">
                <!-- School Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="project_id" class="form-label">Project ID<span>*</span></label>
                        <input type="text" class="form-control" id="project_id" name="project_id" value="<?php if(!empty($_SESSION["project_id"])){echo($_SESSION["project_id"]);} ?>">
                    </div>
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Project Name<span>*</span></label>
                        <input type="text" class="form-control" id="project_name" name="project_name"value="<?php if(!empty($_SESSION["project_name"])){echo($_SESSION["project_name"]);} ?>">
                    </div>
                    <div class="mb-3">
                        <label for="project_description" class="form-label">Project Description<span>*</span></label>
                        <input type="text" class="form-control" id="project_description" name="project_description" value="<?php if(!empty($_SESSION["project_description"])){echo($_SESSION["project_description"]);} ?>">
                    </div>
					<div class="mb-3">
                        <label for="manager_name" class="form-label">Manager Name<span>*</span></label>
                        <input type="text" class="form-control" id="manager_name" name="manager_name" value="<?php if(!empty($_SESSION["manager_name"])){echo($_SESSION["manager_name"]);} ?>">
                    </div>
					<div class="mb-3">
                        <label for="manager_email" class="form-label">Manager Email<span>*</span></label>
                        <input type="text" class="form-control" id="manager_email" name="manager_email"value="<?php if(!empty($_SESSION["manager_email"])){echo($_SESSION["manager_email"]);} ?>">
                    </div>
                    <div class="mb-3">
                        <label for="manager_phone" class="form-label">Manager Phone<span>*</span></label>
                        <input type="text" class="form-control" id="manager_phone" name="manager_phone" value="<?php if(!empty($_SESSION["manager_phone"])){echo($_SESSION["manager_phone"]);} ?>">
                    
                </div>
                
                <!-- Dorm Information -->

            </div>
            
            <!-- Submit Button -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
