<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Update Prescription Page</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Update Prescription Status</h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<label>Update Prescription Status</label>&ensp;

<form  method="POST">
<label for="prescriptionID">Prescription ID:  </label>
    <select name="prescriptionID" id="prescriptionID">
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
    </select>
<br>
<label for="status">Status</label>
<select name="status" id="status">
      <option value="Collected">Collected</option>
      <option value="Not Collected">Not Collected</option>
      
    </select>
<br>
<br>
<button type="submit" name="update" value="Update">UPDATE</button> <!-- Post to DB -->
</form>



<form id="PharmacistUpdatePrescription" method="POST" action="Pharmacist_Update_Prescription.php">
  <label>Enter Prescription ID: </label>
  <input type="text" id="UserId" name="UserId"><br><br>
  
<input type='hidden' name = 'action' value = 'Update'>
<button type="submit" class="button" value="Update">Update</button>
</form>

<br><br>

<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Prescription Id</th>
				<th>Prescription Details</th>
				<th>Prescription Status</th>
        <th>Doctor Id</th>
        <th>Patient Id</th>
        <th>Pharmacist Id</th>
        <th>Created Date Time</th>
        <th>Dispensed Date Time</th>
			</tr>
		</thead>
		<tbody>
      
		<?php

    $PrescriptionControl = new PrescriptionControl();
    $prescriptionDetails = $PrescriptionControl->viewPrescriptionStatus();
    if($prescriptionDetails==true)
    {
      for($i = 0; $i < count($prescriptionDetails); $i++) {
            echo "<tr>";
            echo "<td>" . $prescriptionDetails[$i]['PrescriptionId'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['PrescriptionDetails'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['PrescriptionStatus'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['DoctorId'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['PatientId'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['PharmacistId'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['CreatedDateTime'] . "</td>";
            echo "<td>" . $prescriptionDetails[$i]['DispensedDateTime'] . "</td>";
            echo "</tr>";
      }
    }
    else
    {
        echo '<script>alert("Records not found!")</script>';
    }

    ?>
</body>
</html>
