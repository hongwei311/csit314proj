<?php
// Initialize the session
session_start();
 


include "GlobalClass.php";
include_once("UserController.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic Prescription System</title>
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    <h1 class="header">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
	<div class="form-style">
	<div id="logout" class="question-text">
		<button><a href="Admin_Main_Page.php" class="submit">Back</a></button>
    </div>
	</div>
	
	
	<div class="form-style">
	<label class="naming">Products</label>
	</div>
	<div class="block">
	<div class="form-style">
	

	
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th width="5%">UserId</th>
				<th>DoctorId</th>
				<th>UserName</th>
				<th width="10%">Password</th>
				<th>UserProfile</th>
				<th>FirstName</th>
				<th width="5%">LastName</th>
				<th width="5%">BirthDate</th>
				<th width="5%">GenderCode</th>
				<th width="5%">PhoneNumber</th>
				<th width="5%">EmailAddress</th>
				<th width="5%">HealthFacility</th>
				<th width="5%">Profession</th>
				<th width="10%">YearsOfExperience</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullDoctor();
					print_r($userdetails);
                    ?>
		</tbody>
	</table>
	</div>
	</div>

	
	
</body>
</html>