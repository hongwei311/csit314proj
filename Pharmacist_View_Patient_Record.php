<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist View Patient Record</title>
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

<h1>View Patient Record </h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<form action="ViewPatientRecord!!!!!!!!!!!!!!">
    <label for="viewPatientRecord">Date: </label>
    <select name="viewPatientRecord" id="viewPatientRecord">
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
      <option value="date">Auto input date from DB</option>
    </select>
    <br>

    <input type="submit" value="Submit">
  </form>
<br><br>

<table style="width: 70%;"> <!-- Auto input data from the dates -->
        <tr>
            <th>Patient ID</th>
            <th>Prescription ID</th>
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
