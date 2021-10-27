<?php?>
<!DOCTYPE html>
<html>
<head>
<title>Search Prescription</title>
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

.Patient_Main_Page {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.Patient_Main_Page:hover {
  background-color: #4CAF50;
  color: white;
}

.Patient_Search_Past_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.Patient_Search_Past_Prescription:hover {
  background-color: #4CAF50;
  color: white;
}

.Patient_Search_Current_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Patient_Search_Current_Prescription:hover {
    background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<h1>Search Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button Patient_Main_Page">Main Page</button></p></a></p>


<p><a href="Patient_Search_Current_Prescription.php"><button class="button Patient_Search_Current_Prescription">Search Current Prescription</button></a></p>

<p><a href="Patient_Search_Past_Prescription.php"><button class="button Patient_Search_Past_Prescription">Search Past Prescription</button></a></p>

</body>
</html>
