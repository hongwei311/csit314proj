<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Search Prescription</title>
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
	text-align:left;"
	cellspacing="0"
}
    </style>


</head>

<body>
<br>
  <br>
  <h1 class="text-center">Search Prescription</h1>
  <div class="container">
  <form method="POST">
  <div class="form-group">
    <label>Prescription ID</label>
    <input type="text" class="form-control" id="Prescription ID" name="prescriptionId" required><br><br>
    <input type="submit" class="btn btn-primary btn-lg" value="Search" name="search">
  </div>
  </form>
  </div>

  <?php
  if (isset($_POST['search'])) {
  ?>
    <table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th >PrescriptionId</th>
          <th >PrescriptionDetails</th>
          <th >PrescriptionStatus</th>
          <th >DoctorId</th>
          <th >PatientId</th>
          <th >PharmacistId</th>
          <th >CreatedDateTime</th>
          <th >DispensedDateTime</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $PrescriptionControl = new PrescriptionControl();
      $prescriptionDetails = $PrescriptionControl->doctorSearchPrescription($_POST['prescriptionId']);
      // Attempt select query execution
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

    }
      ?>
      </tbody>
    </table>
    <br>
    <a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>
</body>

</html>