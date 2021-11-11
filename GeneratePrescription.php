<?php
include_once("PrescriptionController.php"); // include User Controller to call function
session_start(); // start session to manipulate session variables
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate New User</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>


<div class="container">
<h1>Generate Prescription</h1>
<div class="form-group">
<form id="DoctorGeneratePrescription" method="POST" action="GeneratePrescription.php">
  <!-- create form wih post method to the same page -->
    <label>Patient ID (10 Prescriptions will be generated for this Patient Id): </label>
    <input type="text" class="form-control" id="Patient ID" name="patientId" required></input>
    <br><br>
    <label>Prescription Details: </label>
    <input type="text" class="form-control" id="PrescriptionDetails" name="prescriptionDetails" required></input>
    <br><br>
    <button class="btn btn-primary btn-lg" type="submit" value="Submit">Submit</button>
</form>
</div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
for ($i=1; $i<=10; $i++){
    $PrescriptionControl = new PrescriptionControl();
    $validation = $PrescriptionControl->addPrescription($_POST['patientId'], $_POST['prescriptionDetails'], 'Not Collected', $_SESSION['UserProfileID']);
}
if ($validation == true) {
    echo '<script>alert("Prescriptions Generated Successfully")</script>';
  } else {
    echo '<script>alert("Prescriptions Could Not be Generated")</script>';
  }
}
?>

<p><a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

