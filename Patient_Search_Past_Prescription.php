<?php?>
<!DOCTYPE html>
<html>
<head>
<title>Search Past Prescription</title>
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

<h1>Search Past Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button Patient_Main_Page">Main Page</button></p></a></p>

<form action="Search.PHP ?????????">
    <label for="date">Date: </label>
    <select name="date" id="date">
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
    </select>
    <br>
    <label for="Med">Med: </label>
    <select name="Med" id="Med">
      <option value="Med">Auto input Med from DB according to the date</option>
      <option value="Med">Auto input Med from DB according to the date</option>
      <option value="Med">Auto input Med from DB according to the date</option>
      <option value="Med">Auto input Med from DB according to the date</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>


  <p><a href="LOG OUT XXXXXXXX"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</body>
</html>
