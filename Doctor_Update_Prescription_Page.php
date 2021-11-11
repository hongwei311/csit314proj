<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Prescription</title>
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
  .update{
    width:30%;
    margin: 0 0 0 50px;
  }
    </style>

</head>

<body>
<br>
  <br>
  <h1 class="text-center">Update Prescription</h1>
  <br>
  <div class="container">
  <form method="POST">
  <div class="form-group">
    <label>Prescription ID to update</label>
    <input type="text" class="form-control id="Prescription ID" name="prescriptionId" required><br><br>
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
        $prescriptionId = $_POST['prescriptionId'];
        $PrescriptionControl = new PrescriptionControl();
        $prescriptionDetails = $PrescriptionControl->doctorSearchPrescription($_POST['prescriptionId']);
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

        $_SESSION['prescriptionID'] = $prescriptionId;

        ?>

        <div class="container">
          <div class="form-group">
        <form method="POST">
          <p>Prescription ID: <?php echo $_POST['prescriptionId']; ?></p>
          <br>
          <label class="update">Enter prescription Details to update</label>
          <input type="text" class="form-control update" id="Prescription Details" name="prescriptionDetails" required><br><br>
          <input type="submit" class="btn btn-primary btn-sm update" value="Update" name="update">
        </form>

          </div>
       </div>
        <br><br>

      <?php
    }
    if (isset($_POST['update'])) {
      $PrescriptionControl = new PrescriptionControl();
      $prescriptionUpdate = $PrescriptionControl->updatePrescription($_SESSION['prescriptionID'], $_POST['prescriptionDetails']);
      $prescriptionSearched = $PrescriptionControl->doctorSearchPrescription($_SESSION['prescriptionID']);

      echo '<script>alert("Prescription updated succesfully!")</script>';
      ?>
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
          // Attempt select query execution
          if($prescriptionSearched==true)
          {
            for($i = 0; $i < count($prescriptionSearched); $i++) {
                  echo "<tr>";
                  echo "<td>" . $prescriptionSearched[$i]['PrescriptionId'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['PrescriptionDetails'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['PrescriptionStatus'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['DoctorId'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['PatientId'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['PharmacistId'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['CreatedDateTime'] . "</td>";
                  echo "<td>" . $prescriptionSearched[$i]['DispensedDateTime'] . "</td>";
                  echo "</tr>";
            }
          }
        else
        {
            echo '<script>alert("Records not found!")</script>';
        }

          unset($_SESSION['prescriptionID']);
        }




          ?>
          </tbody>
        </table>
        <br>
        <a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>
</body>

</html>