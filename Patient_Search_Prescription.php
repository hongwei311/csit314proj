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

<h1>Search Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<p><a href="Patient_Search_Current_Prescription.php"><button class="button navigate">Search Current Prescription</button></a></p>

<p><a href="Patient_Search_Past_Prescription.php"><button class="button navigate">Search Past Prescription</button></a></p>

</body>
</html>
