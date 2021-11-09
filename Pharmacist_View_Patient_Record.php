<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist View Patient Record</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>View Patient Record </h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<form action="ViewPatientRecord">
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
