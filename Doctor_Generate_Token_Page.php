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
</head>
<body>
 
<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>
<p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
<h1>Generate Token</h1>
<form method="POST" action="Doctor_Generate_Token_Page.php">
  <label>Prescription ID</label>
  <input type="text" id="Prescription ID" name="prescriptionId"><br><br>
  <input type="hidden" name = "action" value = "GenerateToken">
  <input type="submit" value="Generate" name="Generate">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['action']==="GenerateToken")
  {
    $TokenControl = new TokenControl();
    $validation = $TokenControl->generateToken($_POST['prescriptionId']);
    
    $PrescriptionControl = new PrescriptionControl();
    $prescriptionDetails = $PrescriptionControl->searchPrescription($_POST['prescriptionId']);
    $_SESSION['patientid'] = $prescriptionDetails['PatientId'];
    $_SESSION['prescriptionid'] = $_POST['prescriptionId'];

    if($validation==true)
    {
      echo "Token generated successfully";
?>
      <form id="DoctorGenerateTokenPage" method="POST" action="Doctor_Generate_Token_Page.php">
        <input type="hidden" name = "action" value = "SendToken">
        <input type="submit" value="Send" name="Send">
      </form>
<?php
    }
      
    elseif($validation==false)
    {
      echo "Token not generated";
    }
  }
  if($_POST['action']==="SendToken")
  {
    $TokenControl = new TokenControl();
    $validation2 = $TokenControl->sendToken($_SESSION['patientid'], $_SESSION['prescriptionid']);
    if($validation2===true)
    {
      echo "Token sent successfully";
    }
    else
    {
      echo "Token not sent.";
    }
  }
}

?>

</body>
</html>