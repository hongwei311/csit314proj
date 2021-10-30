<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Prescription</title>
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

<h1>Add Prescription</h1>

<form method="POST" >
  <label>Patient ID</label>
  <input type="text" id="Patient ID" name="patientId"><br><br>
  <label>Prescription</label>
  <input type="text" id="Prescription Details" name="prescriptionDetails"><br><br>
  <input type="submit" value="Submit">
</form> 
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $PrescriptionControl = new PrescriptionControl();
  $validation = $PrescriptionControl->addPrescription($_POST['patientId'], $_POST['prescriptionDetails'], 'Not Collected', '1');
  if($validation==true)
  {
    echo "Prescription added successfully";
  }
  else
  {
    echo "Prescripton not added";
  }
}
?>

</body>
</html>

