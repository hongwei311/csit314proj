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
    text-align:left;"
    cellspacing="0"
  }
    </style>
</head>

<body>
  <br>
  <h1 class="text-center">View Prescription</h1>
  <br>
  <div class="container">
  <p>Select Prescription Type Below</p>&ensp;
  <form method="POST">
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg" name="new" value="Not Collected">Not Collected</button>
    <button type="submit" class="btn btn-primary btn-lg" name="past" value="Collected">Collected</button>
  </div>
  </form>
  </div>

  <?php

  if (isset($_POST['past'])) {
  ?>
    <table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="5%">PrescriptionId</th>
          <th width="10%">PrescriptionDetails</th>
          <th width="5%">PrescriptionStatus</th>
          <th width="5%">DoctorId</th>
          <th width="5%">PatientId</th>
          <th width="5%">PharmacistId</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $PrescriptionControl = new PrescriptionControl();
      $prescriptiondetails = $PrescriptionControl->viewPrescription($_POST['past']);

      echo $prescriptiondetails['PrescriptionId'];
      // Attempt select query execution
      $conn = mysqli_connect("localhost", "root", "", "csit314");
      $sql = "SELECT * FROM prescription" . " where PrescriptionStatus ='"  . 'Collected' . "'";
      if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['PrescriptionId'] . "</td>";
            echo "<td>" . $row['PrescriptionDetails'] . "</td>";
            echo "<td>" . $row['PrescriptionStatus'] . "</td>";
            echo "<td>" . $row['DoctorId'] . "</td>";
            echo "<td>" . $row['PatientId'] . "</td>";
            echo "<td>" . $row['PharmacistId'] . "</td>";
            echo "</tr>";
          }
          // Free result set
          $result->free();
        } else {
          echo "<p class='question-text'>No records were found.</p>";
        }
      }
    }
      ?>
      </tbody>
    </table>
    <?php

    if (isset($_POST['new'])) {
    ?>
      <table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">PrescriptionId</th>
            <th width="10%">PrescriptionDetails</th>
            <th width="5%">PrescriptionStatus</th>
            <th width="5%">DoctorId</th>
            <th width="5%">PatientId</th>
            <th width="5%">PharmacistId</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $PrescriptionControl = new PrescriptionControl();
        $prescriptiondetails = $PrescriptionControl->viewPrescription($_POST['new']);
        // Attempt select query execution
        $conn = mysqli_connect("localhost", "root", "", "csit314");
        $sql = "SELECT * FROM prescription" . " where PrescriptionStatus ='"  . 'Not Collected' . "'";
        if ($result = $conn->query($sql)) {
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
              echo "<tr>";
              echo "<td>" . $row['PrescriptionId'] . "</td>";
              echo "<td>" . $row['PrescriptionDetails'] . "</td>";
              echo "<td>" . $row['PrescriptionStatus'] . "</td>";
              echo "<td>" . $row['DoctorId'] . "</td>";
              echo "<td>" . $row['PatientId'] . "</td>";
              echo "<td>" . $row['PharmacistId'] . "</td>";
              echo "</tr>";
            }
            // Free result set
            $result->free();
          } else {
            echo "<p class='question-text'>No records were found.</p>";
          }
        }
      }

        ?>
        </tbody>
      </table>
      <br>
        <a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>
</body>

</html>