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
</head>

<body>

  <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
  <p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
  <h1>Add Prescription</h1>
  <form method="POST">
    <label>Patient ID : </label>
    <input type="text" id="Patient ID" name="patientId"><br><br>
    <label>Prescription Details : </label>
    <input type="text" id="Prescription Details" name="prescriptionDetails"><br><br>
    <input type="submit" value="Submit">
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $PrescriptionControl = new PrescriptionControl();
    $validation = $PrescriptionControl->addPrescription($_POST['patientId'], $_POST['prescriptionDetails'], 'Not Collected', $_SESSION['UserProfileID']);
    if ($validation == true) {
      echo "Prescription added successfully";
    } else {
      echo "Prescripton not added";
    }
  }
  ?>

</body>

</html>