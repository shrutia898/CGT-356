<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 03 - Index Page</title>
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
    </style>
</head>
<body>

<h1>Assign 03 - IndexB Page</h1>
	<caption><a href="index.php">Click here to go to index.php</a></caption>

<form id="form0" method="post" action="getFormData2.php">
    <fieldset>
        <div class="container">
            <div class="row">
                <!-- School Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="school" class="form-label">School<span>*</span></label>
                        <input type="text" class="form-control" id="school" name="school">
                    </div>
                    <div class="mb-3">
                        <label for="schoolAddress" class="form-label">School Address<span>*</span></label>
                        <input type="text" class="form-control" id="schoolAddress" name="schoolAddress">
                    </div>
                    <div class="mb-3">
                        <label for="schoolCity" class="form-label">City<span>*</span></label>
                        <input type="text" class="form-control" id="schoolCity" name="schoolCity">
                    </div>
					<div class="mb-3">
                        <label for="schoolState" class="form-label">State<span>*</span></label>
                        <input type="text" class="form-control" id="schoolState" name="schoolState">
                    </div>
					<div class="mb-3">
                        <label for="schoolZip" class="form-label">Zip Code<span>*</span></label>
                        <input type="text" class="form-control" id="schoolZipCode" name="schoolZipCode">
                    </div>
                    <div class="mb-3">
                        <label for="schoolType" class="form-label">School Type<span>*</span></label>
                        <input type="text" class="form-control" id="schoolType" name="schoolType" placeholder="School of Science, Polytechnic...">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Major<span>*</span></label>
                        <input type="text" class="form-control" id="major" name="major">
                    </div>
                    <div class="mb-3">
                        <label for="minor" class="form-label">Minor</label>
                        <input type="text" class="form-control" id="minor" name="minor">
                    </div>
                    <div class="mb-3">
                        <label for="clubs" class="form-label">Clubs</label>
                        <input type="text" class="form-control" id="clubs" name="clubs">
                    </div>
                    <div class="mb-3">
                        <label for="courses" class="form-label">Current Courses</label>
                        <input type="text" class="form-control" id="courses" name="courses">
                    </div>
                    <div class="mb-3">
                        <label for="gpa" class="form-label">GPA</label>
                        <input type="text" class="form-control" id="gpa" name="gpa">
                    </div>
                </div>
                
                <!-- Dorm Information -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="dorm" class="form-label">Dorm Address<span>*</span></label>
                        <input type="text" class="form-control" id="dorm" name="dorm">
                    </div>
                    <div class="mb-3">
                        <label for="dormCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="dormCity" name="dormCity">
                    </div>
					<div class="mb-3">
                        <label for="dormState" class="form-label">State</label>
                        <input type="text" class="form-control" id="dormState" name="dormState">
                    </div>
                    <div class="mb-3">
                        <label for="dormZip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="dormZip" name="dormZip">
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	document.getElementById("name").focus();</script>

</body>
</html>
