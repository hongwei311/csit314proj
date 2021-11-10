<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Main Page</title>

	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1 class="text-center">Welcome, <?php echo $_SESSION['username']?>  </h1>
<div class="span2 text-center">

          <p><a href="Pharmacist_View_Patient_Record.php"><button class="btn btn-primary btn-lg">View Patients Records</button></a></p>
          <p><a href="Pharmacist_View_Prescription.php"><button class="btn btn-primary btn-lg">View Prescription</button></a></p> <!-- Currently same as VIEW Prescription Status -->
          <p><a href="Pharmacist_search_patient_record.php"><button class="btn btn-primary btn-lg">Search Patient's Records</button></a></p>
          <p><a href="Pharmacist_View_Prescription.php"><button class="btn btn-primary btn-lg">View Prescription Status</button></a></p>
          <p><a href="Pharmacist_Search_Patient_Prescription.php"><button class="btn btn-primary btn-lg">Search Patient's Prescription</button></a></p>
          <p><a href="Pharmacist_Update_Prescription.php"><button class="btn btn-primary btn-lg">Update Prescription Status</button></a></p>
    
      </div>




      <p><a href="Logout.php"><button class="btn btn-danger btn-lg" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
