<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist View Prescription Page</title>
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

<h1>View Prescription Status</h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<label>Select Prescription Type</label>&ensp;
<form  method="POST">
<button type="submit" name="new" value="Not Collected">Not Collected</button>
<button type="submit" name="past" value="Collected">Collected</button>
</form>
<br><br>

<table style="width: 70%;"> <!-- Auto input data from the dates -->
        <tr>
            <th>Prescription</th>
            <th>Status</th>
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
