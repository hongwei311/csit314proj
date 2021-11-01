<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Main Page</title>
<style>

.button-align {
width: 200px;
margin: 0 auto;
display: inline;}

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

  <div class="button">
    <div class="button-align">
      <a href="Pharmacist_View_Patient_Record.php"><button class="button navigate">View Patients Records</button></a>
      <a href="Pharmacist_View_Prescription.php"><button class="button navigate">View Prescription</button></a> <!-- Currently same as VIEW Prescription Status -->

  </div>
    </div>
    <br>
    <div class="button">
      <div class="button-align">
        <a href="Pharmacist_search_patient_record.php"><button class="button navigate">Search Patient's Records</button></a>
        <a href="Pharmacist_View_Prescription.php"><button class="button navigate">View Prescription Status</button></a>
  
    </div>
      </div>
      <br>
      <div class="button">
        <div class="button-align">
          <a href="Pharmacist_Search_Patient_Prescription.php"><button class="button navigate">Search Patient's Prescription</button></a>
          <a href="Pharmacist_Update_Prescription.php"><button class="button navigate">Update Prescription Status</button></a>
    
      </div>
        </div>


<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
