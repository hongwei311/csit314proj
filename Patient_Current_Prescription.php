<?php
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Today Prescription</title>
<style>
table, th, td {
  border:1px solid black;
}

.button {
  border: none;
  color: white;
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
</style>
</head>
<body>

<h1>Today's Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $PrescriptionControl = new PrescriptionControl();
  $prescriptiondetails = $PrescriptionControl->viewPrescription("Current");
  if($prescriptiondetails[0]=="")
  {
    echo "Fail";
  }
  else
  {
    print_r($prescriptiondetails); 
  }
}
?>
</body>

</html>
