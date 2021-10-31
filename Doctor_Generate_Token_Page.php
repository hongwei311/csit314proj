<?php
include_once("TokenController.php");
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate Token</title>
<style>
table, th, td {
  border:1px solid black;
}

.button {
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.navigate {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.navigate:hover {
  background-color: #4CAF50;
  color: white;
}


.Logout {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.Logout:hover {
  background-color: #008CBA;
  color: white;
}
</style>
</head>
<body>
 
<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>
<p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
<h1>Generate Token</h1>
<form method="POST">
  <label>Prescription ID</label>
  <input type="text" id="Prescription ID" name="prescriptionId"><br><br>
  <input type="submit" value="Generate" name="Generate">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $TokenControl = new TokenControl();
  $validation = $TokenControl->generateToken($_POST['prescriptionId']);
  if($validation==true)
  {
    echo "Token generated successfully";
    // $PrescriptionControl = new PrescriptionControl();
    // $prescriptionDetails = $PrescriptionControl->searchPrescription($_POST['prescriptionId']);
    // $patientId = $prescriptionDetails['PatientId'];
    // $sendToken = $TokenControl->sendToken();
  }
  else
  {
    echo "Token not generated";
  }
}
?>

</body>
</html>