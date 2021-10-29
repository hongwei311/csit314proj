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

<form id="DoctorAddPrecriptionPage" method="POST" action="Doctor_Add_Prescription_Page.php">
  <label>Patient ID</label>
  <input type="text" id="Patient ID" name="patiendID"><br><br>
  <label>Prescription</label>
  <input type="text" id="Text" name="text"><br><br>
  <label>User Type</label>&ensp;<select name = "usertype" id="usertype">
            <option value = "Admin" >Admin</option>
            <option value = "Doctor" >Doctor</option>
            <option value = "Patient" >Patient</option>
            <option value = "Pharmacist" >Pharmacist</option>
        </select> <br><br>
  <input type="submit" value="Submit">
</form> 
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $PrecriptionControl = new PrescriptionControl();
  $validation = $PrescriptionControl->addUser($_POST['username'],$_POST['password'],$_POST['usertype']);
  if($validation==true)
  {
    //echo "User added successfully";
  }
  else
  {
    //echo "User not added";
  }
}
?>


<p><a href="Logout.php"><button class="button" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</body>
</html>

