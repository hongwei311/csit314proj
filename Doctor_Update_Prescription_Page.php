<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

  <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
  <p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
  <h1>Update Prescription</h1>
  <form method="POST">
    <label>Prescription ID to update</label>
    <input type="text" id="Prescription ID" name="prescriptionId" required><br><br>
    <input type="submit" value="Search" name="search">
  </form>

  <?php

  if (isset($_POST['search'])) {
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
        $prescriptionId = $_POST['prescriptionId'];
        $PrescriptionControl = new PrescriptionControl();
        $prescriptionSearch = $PrescriptionControl->searchPrescription($_POST['prescriptionId']);


        for($i = 0; $i < count($userinformation); $i++) {
          echo "<tr>";
          echo "<td>" . $row['PrescriptionId'] . "</td>";
          echo "<td>" . $row['PrescriptionDetails'] . "</td>";
          echo "<td>" . $row['PrescriptionStatus'] . "</td>";
          echo "<td>" . $row['DoctorId'] . "</td>";
          echo "<td>" . $row['PatientId'] . "</td>";
          echo "<td>" . $row['PharmacistId'] . "</td>";
          echo "</tr>";
        }
        $_SESSION['prescriptionID'] = $prescriptionId;


        ?>
        <form method="POST">
          <label>Prescription ID:</label>
          <?php echo $_POST['prescriptionId']; ?>
          <br>
          <label>Enter prescription Details to update</label>
          <input type="text" id="Prescription Details" name="prescriptionDetails" required><br><br>
          <input type="submit" value="Update" name="update">
        </form>
      <?php
    }
    if (isset($_POST['update'])) {
      $PrescriptionControl = new PrescriptionControl();
      $prescriptionUpdate = $PrescriptionControl->updatePrescription($_SESSION['prescriptionID'], $_POST['prescriptionDetails']);

      echo 'Successfully updated!!';
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
                for($i = 0; $i < count($userinformation); $i++) {
                  echo "<tr>";
                  echo "<td>" . $row['PrescriptionId'] . "</td>";
                  echo "<td>" . $row['PrescriptionDetails'] . "</td>";
                  echo "<td>" . $row['PrescriptionStatus'] . "</td>";
                  echo "<td>" . $row['DoctorId'] . "</td>";
                  echo "<td>" . $row['PatientId'] . "</td>";
                  echo "<td>" . $row['PharmacistId'] . "</td>";
                  echo "</tr>";
                }
          unset($_SESSION['prescriptionID']);
        }




          ?>
          </tbody>
        </table>

</body>

</html>