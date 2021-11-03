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
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script> -->
</head>
<body>
    <h1 class="header">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
	<h1>View Full Admin</h1>
	<div class="block">
	<div class="form-style">
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>UserId</th>
				<th>DoctorId</th>
				<th>UserName</th>
				<th>UserProfile</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>BirthDate</th>
				<th>GenderCode</th>
				<th>PhoneNumber</th>
				<th>EmailAddress</th>
				<th>HealthFacility</th>
				<th>Profession</th>
				<th>YearsOfExperience</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullDoctor();
					print_r($userdetails);
					for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
                        echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
                        echo "</tr>";
                      }
                    ?>
		</tbody>
	</table>
	</div>
	</div>

	<h1>View Full Doctor</h1>
	<div class="block">
	<div class="form-style">
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>UserId</th>
				<th>DoctorId</th>
				<th>UserName</th>
				<th>UserProfile</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>BirthDate</th>
				<th>GenderCode</th>
				<th>PhoneNumber</th>
				<th>EmailAddress</th>
				<th>HealthFacility</th>
				<th>Profession</th>
				<th>YearsOfExperience</th>
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

	<h1>View Full Patient</h1>
	<div class="block">
	<div class="form-style">
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>UserId</th>
				<th>DoctorId</th>
				<th>UserName</th>
				<th>UserProfile</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>BirthDate</th>
				<th>GenderCode</th>
				<th>PhoneNumber</th>
				<th>EmailAddress</th>
				<th>HealthFacility</th>
				<th>Profession</th>
				<th>YearsOfExperience</th>
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

	<h1>View Full Pharmacist</h1>
	<div class="block">
	<div class="form-style">
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>UserId</th>
				<th>DoctorId</th>
				<th>UserName</th>
				<th>UserProfile</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>BirthDate</th>
				<th>GenderCode</th>
				<th>PhoneNumber</th>
				<th>EmailAddress</th>
				<th>HealthFacility</th>
				<th>Profession</th>
				<th>YearsOfExperience</th>
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

	<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
	
</body>
</html>