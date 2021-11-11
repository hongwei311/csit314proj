<?php
include_once("PrescriptionController.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Patient Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
	.table{
	width: 80%;
	margin: 0 0 0 50px;
	text-align:left;"
	cellspacing="0"
  }
  h1 {
    margin: 0 0 0 50px;
  }

</style>
</head>
<body>
<br>
<h1 class="text-center">Search Patient Prescription</h1>
<br>

<div class="container">
<form id="PharmacistSearchPrescription" method="POST" action="Pharmacist_Search_Patient_Prescription.php">
<div class="form-group">
  <label>Enter Prescription ID: </label>
  <input type="text" class="form-control" id="PrescriptionId" name="PrescriptionId" required><br><br>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
  </div>
</form>
</div>
<br><br> 

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
        $PrescriptionControl = new PrescriptionControl();
        $prescriptionDetails = $PrescriptionControl->searchPatientPrescription($_POST['PrescriptionId'], "Not Collected");
        $_SESSION['PrescriptionId']=$_POST['PrescriptionId'];
        $PrescriptionId = $prescriptionDetails["0"];
        $searchedPrescriptionDetails = $prescriptionDetails["1"];
        $PrescriptionStatus = $prescriptionDetails["2"];
        $DoctorId = $prescriptionDetails["3"];
        $PatientId = $prescriptionDetails["4"];
        $PharmacistId = $prescriptionDetails["5"];
        $CreatedDateTime = $prescriptionDetails["6"];
        $DispensedDateTime = $prescriptionDetails["7"];
        $printresult = "";

        if($prescriptionDetails==true)
        {
            echo "<form>
            <label>Prescription Id : $PrescriptionId</label><br><br> 
            <label>Prescription Details : $searchedPrescriptionDetails</label><br><br>
            <label>Prescription Status : $PrescriptionStatus</label><br><br>
            <label>Doctor Id : $DoctorId</label><br><br>
            <label>Patient Id : $PatientId</label><br><br>
            <label>Pharmacist Id : $PharmacistId</label><br><br>
            <label>Created Date Time : $CreatedDateTime</label><br><br>
            <label>Dispensed Date Time : $DispensedDateTime</label><br><br>

            <label>$printresult</label><br><br>
            </form>";
            unset($_SESSION['PrescriptionId']);
        }
        else
        {
            echo '<script>alert("Prescription ID not found!")</script>';
        }
        
}

?>
<br>
<a href="Pharmacist_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a>

</body>
</html>
