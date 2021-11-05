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
	<h1>View Full Admin123213</h1>
	<div class="block">
	<div class="form-style">
	<br>
	<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>User Id</th>
				<th>Admin Id</th>
				<th>User Name</th>
				<th>User Profile</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Gender Code</th>
				<th>Phone Number</th>
				<th>Email Address</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullAdmin();
					for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
						echo "<td>" . $userdetails[$i]['AdminId'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
						echo "<td>" . $userdetails[$i]['FirstName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['Lastname'] . "</td>";
                        echo "<td>" . $userdetails[$i]['BirthDate'] . "</td>";
						echo "<td>" . $userdetails[$i]['GenderCode'] . "</td>";
						echo "<td>" . $userdetails[$i]['PhoneNumber'] . "</td>";
						echo "<td>" . $userdetails[$i]['EmailAddress'] . "</td>";
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
				<th>User Id</th>
				<th>Doctor Id</th>
				<th>User Name</th>
				<th>User Profile</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Gender Code</th>
				<th>Phone Number</th>
				<th>Email Address</th>
				<th>Health Facility</th>
				<th>Profession</th>
				<th>Years Of Experience</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullDoctor();
					for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
						echo "<td>" . $userdetails[$i]['DoctorId'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
						echo "<td>" . $userdetails[$i]['FirstName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['Lastname'] . "</td>";
                        echo "<td>" . $userdetails[$i]['BirthDate'] . "</td>";
						echo "<td>" . $userdetails[$i]['GenderCode'] . "</td>";
						echo "<td>" . $userdetails[$i]['PhoneNumber'] . "</td>";
						echo "<td>" . $userdetails[$i]['EmailAddress'] . "</td>";
						echo "<td>" . $userdetails[$i]['HealthFacility'] . "</td>";
						echo "<td>" . $userdetails[$i]['Profession'] . "</td>";
						echo "<td>" . $userdetails[$i]['YearsOfExperience'] . "</td>";
                        echo "</tr>";
                      }
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
				<th>User Id</th>
				<th>Patient Id</th>
				<th>User Name</th>
				<th>User Profile</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Gender Code</th>
				<th>Phone Number</th>
				<th>Email Address</th>
				<th>Drug Allergy</th>
				<th>Presciription Notification</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullPatient();
					for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
						echo "<td>" . $userdetails[$i]['PatientId'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
						echo "<td>" . $userdetails[$i]['FirstName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['Lastname'] . "</td>";
                        echo "<td>" . $userdetails[$i]['BirthDate'] . "</td>";
						echo "<td>" . $userdetails[$i]['GenderCode'] . "</td>";
						echo "<td>" . $userdetails[$i]['PhoneNumber'] . "</td>";
						echo "<td>" . $userdetails[$i]['EmailAddress'] . "</td>";
						echo "<td>" . $userdetails[$i]['DrugAllergy'] . "</td>";
						echo "<td>" . $userdetails[$i]['PrescriptionNotifcation'] . "</td>";
                        echo "</tr>";
                      }
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
				<th>User Id</th>
				<th>Pharmacist Id</th>
				<th>User Name</th>
				<th>User Profile</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Gender Code</th>
				<th>Phone Number</th>
				<th>Email Address</th>
				<th>Pharmacy Name</th>
				<th>Pharmacy Location</th>
				<th>Years Of Experience</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewFullPharmacist();
					for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
						echo "<td>" . $userdetails[$i]['PharmacistId'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
						echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
						echo "<td>" . $userdetails[$i]['FirstName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['Lastname'] . "</td>";
                        echo "<td>" . $userdetails[$i]['BirthDate'] . "</td>";
						echo "<td>" . $userdetails[$i]['GenderCode'] . "</td>";
						echo "<td>" . $userdetails[$i]['PhoneNumber'] . "</td>";
						echo "<td>" . $userdetails[$i]['EmailAddress'] . "</td>";
						echo "<td>" . $userdetails[$i]['PharmacyName'] . "</td>";
						echo "<td>" . $userdetails[$i]['PharmacyLocation'] . "</td>";
						echo "<td>" . $userdetails[$i]['YearsOfExperience'] . "</td>";
                        echo "</tr>";
                      }
                    ?>
		</tbody>
	</table>
	</div>
	</div>

	<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
	
</body>
</html>