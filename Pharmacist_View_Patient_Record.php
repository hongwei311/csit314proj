<?php
session_start();
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist View Patient Record</title>
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
<h1 class="text-center">View Patient Record (First 20 Records)</h1>
<br>

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
                   $validation = $PrescriptionControl->viewPrescriptionRecord("Collected");
                   if($validation==true)
                   {
                                for($i = 0; $i < 20; $i++) {
                                  echo "<tr>";
                                  if(isset($_SESSION['validation'][$i]['PrescriptionId']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['PrescriptionId'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  
                                  if(isset($_SESSION['validation'][$i]['PrescriptionDetails']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['PrescriptionDetails'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  
                                  if(isset($_SESSION['validation'][$i]['PrescriptionStatus']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['PrescriptionStatus'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  
                                  if(isset($_SESSION['validation'][$i]['DoctorId']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['DoctorId'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  
                                  if(isset($_SESSION['validation'][$i]['PatientId']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['PatientId'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  if(isset($_SESSION['validation'][$i]['PharmacistId']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['PharmacistId'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  
                                  if(isset($_SESSION['validation'][$i]['CreatedDateTime']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['CreatedDateTime'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  if(isset($_SESSION['validation'][$i]['DispensedDateTime']))
                                  {
                                    echo "<td>" . $_SESSION['validation'][$i]['DispensedDateTime'] . "</td>";
                                  }
                                  else
                                  {
                                    echo "<td> NIL </td>";
                                  }
                                  echo "</tr>";
                                }
                   }
                   else
                   {
                       echo '<script>alert("Records not found!")</script>';
                   }
                   ?>
		</tbody>
</table>
<br>
<a href="Pharmacist_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>
</html>
