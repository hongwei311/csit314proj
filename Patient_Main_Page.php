<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Patient Main Page</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>


<div class="span2 text-center">
  <h1>Welcome, <?php echo $_SESSION['username']?>  </h1>

<!-- <p><a href="Patient_Current_Prescription.php"><button class="button navigate">Current Prescription</button></p></a></p> -->
<p>
<form id="PatientCurrentPrescription" method="POST" action="Patient_Current_Prescription.php">
<input type="submit" value="Current Prescription" class="btn btn-primary btn-lg">
</form>  
</p>

<p><a href="Patient_Past_Prescription.php"><button class="btn btn-primary btn-lg">Past Prescription</button></a></p>

<p><a href="Patient_Search_Prescription.php"><button class="btn btn-primary btn-lg">Search Prescription</button></a></p>

<p><a href="Update_Personal_User_Info.php"><button class="btn btn-primary btn-lg">Update Your Personal User Info</button></p></a>

<p><a href="Logout.php"><button class="btn btn-danger btn-lg" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</div>
</body>
</html>
