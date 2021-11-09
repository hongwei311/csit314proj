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

      // Attempt select query execution
      $conn = mysqli_connect("localhost", "root", "", "csit314");
      $sql = "SELECT * FROM prescription" . " where PrescriptionId ='"  . $_POST['prescriptionId'] . "'";
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