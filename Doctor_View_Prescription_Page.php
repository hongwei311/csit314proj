<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>View Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
      h1{
        margin: 0 0 0 50px;
      }
    .container{
      width:50%;
    }
    p{
      font-size:30px;
      text-align:center;
    }
    .table{
    width: 80%;
    margin: 0 0 0 50px;
    text-align:left;
    cellspacing="0";
  }
    </style>

</head>
<body>
  
  <h1 class="text-center">View Prescription</h1>
  <br>
  <div class="container">
  <p>Select Prescription Type Below</p>&ensp;
  
  <p>
<form id="DoctorViewPrescription" method="POST" action="Doctor_View_Prescription_Page.php">
<input type='hidden' name = 'action' value = 'Combined'>
<button type="submit" class="btn btn-primary btn-lg" value="Combined">Combined (First 20 Records)</button>
</form>
</p>

<p>
<form id="DoctorViewPrescription" method="POST" action="Doctor_View_Prescription_Page.php">
<input type='hidden' name = 'action' value = 'Not Collected'>
<button type="submit" class="btn btn-primary btn-lg" value="Not Collected">Not Collected</button>
</form>
</p>

<p>
<form id="DoctorViewPrescription" method="POST" action="Doctor_View_Prescription_Page.php">
<input type='hidden' name = 'action' value = 'Collected'>
<button type="submit" class="btn btn-primary btn-lg" value="Collected">Collected</button>
</form>
</p>
  </div>

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

      if($_POST['action']==='Combined'){
            $PrescriptionControl = new PrescriptionControl();
            $validation = $PrescriptionControl->viewPrescriptionStatus();
            if($validation==true)
            {
						for($i = 0; $i < 20; $i++) {
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
            else
            {
                echo '<script>alert("Records not found!")</script>';
            }
        }

        if($_POST['action']==='Not Collected'){
          $PrescriptionControl = new PrescriptionControl();
          $validation = $PrescriptionControl->viewPrescriptionRecord("Not Collected");
          if($validation==true)
          {
            for($i = 0; $i < count($_SESSION['validation']); $i++) { 
						//for($i = 0; $i < 20; $i++) {
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
          else
          {
              echo '<script>alert("Records not found!")</script>';
          }
      }

      if($_POST['action']==='Collected'){
        $PrescriptionControl = new PrescriptionControl();
        $validation = $PrescriptionControl->viewPrescriptionRecord("Collected");
        if($validation==true)
        {
          for($i = 0; $i < count($_SESSION['validation']); $i++) { 
						//for($i = 0; $i < 20; $i++) {
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
        else
        {
            echo '<script>alert("Records not found!")</script>';
        }
      }

  }
        ?>
        </tbody>
      </table>
      <br>

      <p><a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>

</html>