<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
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

.Patient_Current_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.Patient_Current_Prescription:hover {
  background-color: #4CAF50;
  color: white;
}

.Patient_Past_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Patient_Past_Prescription:hover {
    background-color: #4CAF50;
  color: white;
}

.Patient_Search_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Patient_Search_Prescription:hover {
    background-color: #4CAF50;
  color: white;
}
.Logout {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Logout:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>


<label>Select Prescription Type</label>&ensp;
<button type="submit" name="past" value="PastPrescription">Past</button>
<button type="submit" name="new" value="NewPrescription">New</button>
<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
      {
        $PrescriptionControl = PrescriptionControl();
        $validation = $PrescriptionControl->viewPastPrescription($_POST['PrescriptionStatus']);
        if($)
        {
          echo "User added successfully";
        }
  else
  {
    echo "User not added";
  }
}

?>
<table style="width: 70%;">
        <tr>
            <th>Quantity</th>
            <th>Medications</th>
        </tr>
        <tr>
            <td>PHP code to auto input</td>
            <td>PHP code to auto input</td>
        </tr>
        <tr>
            <td>PHP code to auto input</td>
            <td>PHP code to auto input</td>
        </tr>
        <tr>
            <td>PHP code to auto input</td>
            <td>PHP code to auto input</td>
        </tr>

    </table>

</body>
</html>