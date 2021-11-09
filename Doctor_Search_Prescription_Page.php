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
        echo "<td>" . $row['PrescriptionId'] . "</td>";
        echo "<td>" . $row['PrescriptionDetails'] . "</td>";
        echo "<td>" . $row['PrescriptionStatus'] . "</td>";
        echo "<td>" . $row['DoctorId'] . "</td>";
        echo "<td>" . $row['PatientId'] . "</td>";
        echo "<td>" . $row['PharmacistId'] . "</td>";
        echo "</tr>";
      }

    }
      ?>
      </tbody>
    </table>
</body>

</html>