<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Patient Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
