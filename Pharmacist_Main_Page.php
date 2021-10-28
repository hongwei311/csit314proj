<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Main Page</title>
<style>
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

<h1>Welcome Pharmacist XXX</h1>

<p><a href="Patient_Current_Prescription.php"><button class="button navigate">Current Prescription</button></p></a></p>

<p><a href="Patient_Past_Prescription.php"><button class="button navigate">Past Prescription</button></a></p>

<p><a href="Patient_Search_Prescription.php"><button class="button navigate">Search Prescription</button></a></p>

<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
