<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Update Prescription Page</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Update Prescription Status</h1>

<p><a href="Pharmacist_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>


<label>Update Prescription Status</label>&ensp;
<form  method="POST">
<label for="prescriptionID">Prescription ID:  </label>
    <select name="prescriptionID" id="prescriptionID">
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
      <option value="prescriptionID">Auto input from DB</option>
    </select>
<br>
<label for="status">Status</label>
<select name="status" id="status">
      <option value="Collected">Collected</option>
      <option value="Not Collected">Not Collected</option>
      
    </select>
<br>
<br>
<button type="submit" name="update" value="Update">UPDATE</button> <!-- Post to DB -->
</form>


</body>
</html>
