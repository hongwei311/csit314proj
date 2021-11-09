<?php?>
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

<h1>Welcome Pharmacist XXX</h1>

  <div class="button">
    <div class="button-align">
      <a href="Pharmacist_View_Patient_Record.php"><button class="button navigate">View Patients Records</button></a>
      <a href="Pharmacist_View_Prescription.php"><button class="button navigate">View Prescription</button></a> <!-- Currently same as VIEW Prescription Status -->

  </div>
    </div>
    <br>
    <div class="button">
      <div class="button-align">
        <a href="Pharmacist_search_patient_record.php"><button class="button navigate">Search Patient's Records</button></a>
        <a href="Pharmacist_View_Prescription.php"><button class="button navigate">View Prescription Status</button></a>
  
    </div>
      </div>
      <br>
      <div class="button">
        <div class="button-align">
          <a href="Pharmacist_Search_Patient_Prescription.php"><button class="button navigate">Search Patient's Prescription</button></a>
          <a href="Pharmacist_Update_Prescription.php"><button class="button navigate">Update Prescription Status</button></a>
    
      </div>
        </div>


<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
