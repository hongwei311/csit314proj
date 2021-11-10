<?php
session_start();
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Search Patient Record</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Search Patient Record</h1>

<form id="PharmacistSearchPatientRecord" method="POST" action="Pharmacist_Search_Patient_Record.php">
  <label>Enter Patient Id: </label>
  <input type="text" id="PatientId" name="PatientId" required><br><br>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
</form><br><br> 

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
           if($_SERVER['REQUEST_METHOD']=='POST')
           {        
                   $PrescriptionControl = new PrescriptionControl();
                   $prescriptionDetails = $PrescriptionControl->searchPrescriptionRecord($_POST['PatientId'],"Collected");
                   $_SESSION['PatientId']=$_POST['PatientId'];
           
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
                       unset($_SESSION['PatientId']);
                   }
                   else
                   {
                       echo '<script>alert("Patient ID not found!")</script>';
                   }
                   
           }?>
		</tbody>
</table>

<a href="Pharmacist_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>
</html>
