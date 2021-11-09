<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist View Prescription Page</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
