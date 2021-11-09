<?php
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Today Prescription</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Today's Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $PrescriptionControl = new PrescriptionControl();
  $prescriptiondetails = $PrescriptionControl->viewPrescription("Not Collected");
  if(empty($prescriptiondetails))
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
