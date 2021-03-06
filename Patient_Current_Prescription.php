<?php
session_start();
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Current Prescription</title>
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
    p{
      font-size:25px;
    }

</style>
</head>
<body>
  
<h1 class="text-center">Current Prescription</h1>
<br>

<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		
		<tbody>
		<?php
                    // Attempt select query execution
                    $PrescriptionControl = new PrescriptionControl();
                    $PatientId = $_SESSION['UserProfileID'];
                    $validation = $PrescriptionControl->viewPrescription($PatientId,"Not Collected");
                    if($validation= true)
                    {
                      ?><thead>
                      <tr>
                        <th>PrescriptionId</th>
                        <th>PrescriptionDetails</th>
                        <th>PrescriptionStatus</th>
                        <th>DoctorId</th>
                        <th>PatientId</th>
                        <th>PharmacistId</th>
                        <th>CreatedDateTime</th>
                        <th>DispensedDateTime</th>
                      </tr>
                    </thead><?php
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
                    }
                    
                    
         ?>
		</tbody>
</table>

<br>
<a href="Patient_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>

</html>
