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

<form id="PharmacistUpdatePrescription" method="POST" action="Pharmacist_Update_Prescription.php">
  <label>Enter Prescription ID: </label>
  <input type="text" id="PrescriptionId" name="PrescriptionId"><br><br>
  <label>Prescription Status</label>
  <select name="PrescriptionStatus" id="PrescriptionStatus">
      <option value="Collected">Collected</option>
      <option value="Not Collected">Not Collected</option>
  </select><br><br>
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

    if($_SERVER['REQUEST_METHOD']=='POST'){
      $PrescriptionId=$_POST['PrescriptionId'];
      $PrescriptionStatus=$_POST['PrescriptionStatus'];
      $PharmacistId=$_SESSION['UserProfileID'];
      $PrescriptionControl = new PrescriptionControl();
      $prescriptionDetails = $PrescriptionControl->updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId);
      if($prescriptionDetails==true)
      {
        echo '<script>alert("Prescription Status Updated succesfully")</script>';
      }
      else
      {
        echo '<script>alert("Unable to Update Prescription.'. $_SESSION['errmsg'] . '")</script>';
        unset($_SESSION['errmsg']);
      }
    }

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
