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
    <style>
	.table{
	width: 80%;
	margin: 0 0 0 50px;
	text-align:left;"
	cellspacing="0"
  }
  h1 {
    margin: 0 0 0 50px;
  }

</style>
</head>
<body>

<br>
<h1 class="text-center">Search Patient Record</h1>
<br>

<div class="container">
<form id="PharmacistSearchPatientRecord" method="POST" action="Pharmacist_Search_Patient_Record.php">
<div class="form-group">
  <label>Enter Patient Id: </label>
  <input type="text" class="form-control" id="PatientId" name="PatientId" required><br><br>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
</div>
</form>
</div>
<br><br> 

<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			
		</thead>
		<tbody>
		<?php
           if($_SERVER['REQUEST_METHOD']=='POST')
           {        
                   $PrescriptionControl = new PrescriptionControl();
                   $validation = $PrescriptionControl->searchPrescriptionRecord($_POST['PatientId'],"Collected");
                   $_SESSION['PatientId']=$_POST['PatientId'];
           
                   if($validation==true)
                   {
                     ?>
                    <tr>
                    <th>Prescription Id</th>
                    <th>Prescription Details</th>
                    <th>Prescription Status</th>
                    <th>Doctor Id</th>
                    <th>Patient Id</th>
                    <th>Pharmacist Id</th>
                    <th>Created Date Time</th>
                    <th>Dispensed Date Time</th>
                  </tr><?php
                              for($i = 0; $i < count($_SESSION['validation']); $i++) {
                                  echo "<tr>";
                                  echo "<td>" . $_SESSION['validation'][$i]['PrescriptionId'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['PrescriptionDetails'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['PrescriptionStatus'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['DoctorId'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['PatientId'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['PharmacistId'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['CreatedDateTime'] . "</td>";
                                  echo "<td>" . $_SESSION['validation'][$i]['DispensedDateTime'] . "</td>";
                                  echo "</tr>";
                                }
                       unset($_SESSION['PatientId']);
                   }
                   elseif($validation==false)
                   {
                       echo '<script>alert("Patient ID not found!")</script>';
                   }
                   
           }?>
		</tbody>
</table>
<br>
<a href="Pharmacist_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>
</html>
