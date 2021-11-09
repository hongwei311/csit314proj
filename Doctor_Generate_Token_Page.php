<?php
include_once("TokenController.php");
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate Token</title>
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
 <h1 class="text-center">Generate Token</h1>
<br>
<div class="container">
<form method="POST">
  <div class="form-group">
  <label>Prescription ID</label>
  <input type="text"class="form-control id="Prescription ID" name="prescriptionId"><br><br>
  <input type="submit" class="btn btn-primary btn-lg" value="Generate" name="Generate">
</div>
</form>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $TokenControl = new TokenControl();
  $validation = $TokenControl->generateToken($_POST['prescriptionId']);
  if($validation==true)
  {
    echo "<p>Token generated successfully</p>";
    // $PrescriptionControl = new PrescriptionControl();
    // $prescriptionDetails = $PrescriptionControl->searchPrescription($_POST['prescriptionId']);
    // $patientId = $prescriptionDetails['PatientId'];
    // $sendToken = $TokenControl->sendToken();
  }
  else
  {
    echo "<p>Token not generated</p>";
  }
}
?>
<br>
        <a href="Doctor_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>
</html>