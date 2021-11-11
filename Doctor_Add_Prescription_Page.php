<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Add Prescription</title>
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
    </style>

</head>

<body>
<br>
  <br>
  <h1 class="text-center">Add Prescription</h1>
  <div class="container">
  <form method="POST">
  <div class="form-group">
    <label>Patient ID : </label>
    <input type="text" class="form-control" id="Patient ID" name="patientId"><br><br>
    <label>Prescription Details : </label>
    <input type="text" class="form-control" id="Prescription Details" name="prescriptionDetails"><br><br>
    <input type="submit" class="btn btn-primary btn-lg" value="Submit">
  </div>
  </form>
  </div>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $PrescriptionControl = new PrescriptionControl();
    $validation = $PrescriptionControl->addPrescription($_POST['patientId'], $_POST['prescriptionDetails'], 'Not Collected', $_SESSION['UserProfileID']);
    if ($validation == true) {
      // echo "<p>Prescription added successfully</p>";
      echo '<script>alert("Prescription added succesfully!")</script>';
    } else {
      // echo "Prescripton not added";
      echo '<script>alert("Prescription not added!")</script>';
    }
  }
  ?>
<a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>
</body>

</html>