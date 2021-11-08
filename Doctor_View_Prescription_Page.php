<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>View Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

  <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
  <p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
  <h2>View Prescription</h2>
  <label>Select Prescription Type</label>&ensp;
  <form method="POST">
    <button type="submit" name="new" value="Not Collected">Not Collected</button>
    <button type="submit" name="past" value="Collected">Collected</button>
  </form>

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
      
      echo count($prescriptiondetails);
      print_r(array_filter($prescriptiondetails));

      for($i = 0; $i < count($prescriptiondetails); $i++) {
            echo "<tr>";
            echo "<td>" . $prescriptiondetails[$i]['PrescriptionId'] . "</td>";
            echo "<td>" . $prescriptiondetails[$i]['PrescriptionDetails'] . "</td>";
            echo "<td>" . $prescriptiondetails[$i]['PrescriptionStatus'] . "</td>";
            echo "<td>" . $prescriptiondetails[$i]['DoctorId'] . "</td>";
            echo "<td>" . $prescriptiondetails[$i]['PatientId'] . "</td>";
            echo "<td>" . $prescriptiondetails[$i]['PharmacistId'] . "</td>";
            echo "</tr>";
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
        
        for($i = 0; $i < count($prescriptiondetails); $i++) {
              echo "<tr>";
              echo "<td>" . $prescriptiondetails[$i]['PrescriptionId'] . "</td>";
              echo "<td>" . $prescriptiondetails[$i]['PrescriptionDetails'] . "</td>";
              echo "<td>" . $prescriptiondetails[$i]['PrescriptionStatus'] . "</td>";
              echo "<td>" . $prescriptiondetails[$i]['DoctorId'] . "</td>";
              echo "<td>" . $prescriptiondetails[$i]['PatientId'] . "</td>";
              echo "<td>" . $prescriptiondetails[$i]['PharmacistId'] . "</td>";
              echo "</tr>";
            }
   
        
      }

        ?>
        </tbody>
      </table>
</body>

</html>