<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Patient Prescription</title>
<style>
table, th, td {
  border:1px solid black;
}
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

<h1>Search Patient Prescription</h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<form action="/action_page.php">
  <label for="fname">Enter Prescription ID</label><br>
  <input type="text" id="fname" name="fname" value=""><br>

  <input type="submit" value="Submit"> <!-- search from DB then update the table below -->
</form> 

<table style="width: 70%;"> <!-- Auto input data from the dates -->
        <tr>
            <th>Date</th>
            <th>Medications</th>
        </tr>
        <tr>
            <td>PHP code to auto input</td>
            <td>PHP code to auto input</td>
        </tr>
        

    </table>

</body>
</html>
