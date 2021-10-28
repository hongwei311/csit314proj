<?php?>
<!DOCTYPE html>
<html>
<head>
<title>Search Current Prescription</title>
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

<h1>Search Current Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button Patient_Main_Page">Main Page</button></p></a></p>

<form action="Search.php ????????">
  <label for="PatientID">Patient ID: </label>
  <input type="text" id="PatientID" name="PatientID"><br><br>
  <input type="submit" value="Submit">
</form> 

<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</body>
</html>
