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

.navigate {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.navigate:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<h1>Search Past Prescription</h1>

<p><a href="Patient_Main_Page.php"><button class="button navigate">Main Page</button></p></a></p>

<form action="Search.PHP ?????????">
    <label for="date">Date: </label>
    <select name="date" id="date">
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
            <th>Dates</th>
            <th>Medications</th>
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
