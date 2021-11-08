<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Search Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">

</head>

<body>

  <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
  <p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
  <h1>Search Prescription</h1>
  <form method="POST">
    <label>Prescription ID</label>
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
      $PrescriptionControl = new PrescriptionControl();
      $prescriptionSearched = $PrescriptionControl->searchPrescription($_POST['prescriptionId']);

      for($i = 0; $i < count($prescriptionSearched); $i++) {
        echo "<tr>";
        echo "<td>" . $prescriptionSearched[$i]['PrescriptionId'] . "</td>";
        echo "<td>" . $prescriptionSearched[$i]['PrescriptionDetails'] . "</td>";
        echo "<td>" . $prescriptionSearched[$i]['PrescriptionStatus'] . "</td>";
        echo "<td>" . $prescriptionSearched[$i]['DoctorId'] . "</td>";
        echo "<td>" . $prescriptionSearched[$i]['PatientId'] . "</td>";
        echo "<td>" . $prescriptionSearched[$i]['PharmacistId'] . "</td>";
        echo "</tr>";
      }

    }
      ?>
      </tbody>
    </table>
</body>

</html>