<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Welcome Patient XXX</h1>

<!-- <p><a href="Patient_Current_Prescription.php"><button class="button navigate">Current Prescription</button></p></a></p> -->
<form id="PatientCurrentPrescription" method="POST" action="Patient_Current_Prescription.php">
<input type="submit" value="Current Prescription" class="button navigate"></form>  
<p><a href="Patient_Past_Prescription.php"><button class="button navigate">Past Prescription</button></a></p>

<p><a href="Patient_Search_Prescription.php"><button class="button navigate">Search Prescription</button></a></p>

<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
