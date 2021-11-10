<?php
include_once("UserInfoController.php"); // include User Controller to call function
session_start(); // start session to manipulate session variables
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate New User Info</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Generate New User Info</h1>

<form id="AdminGenerateUsersInfo" method="POST" action="GenerateUserInfo.php">
  <!-- create form wih post method to the same page -->
  <label>First User Id (300 Records): </label>
  <input type="text" id="UserId" name="UserId" required><br><br>
  <label>First Name: </label>
  <input type="text" id="FirstName" name="FirstName" required><br><br>
  <!-- create input text for Username for user to input username text -->
  <label>Last Name: </label>
  <input type="text" id="LastName" name="LastName" required><br><br>
  <!-- create password text for Username for user to input username text -->
  <label>Birth Date: </label>
  <input type='date' id='BirthDate' name='BirthDate' value='BirthDate' required><br><br>
  <label>Gender Code</label>&ensp;
    <select name = "GenderCode" id="GenderCode">
            <option value = "M" >M</option>
            <option value = "F" >F</option>
    </select> <br><br>
   <!-- create option input for User Profile for user to select user profile -->
  <button class="btn btn-primary btn-lg" type="submit" value="Submit">Submit</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $UserId = $_POST['UserId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $BirthDate = $_POST['BirthDate'];
    $GenderCode = $_POST['GenderCode'];
for ($i=1; $i<=300; $i++){
  $UserInfoControl = new UserInfoController(); // create User Controller to run function
  $userinformation = $UserInfoControl->generateUserInfo($UserId++, $FirstName++,$LastName++,$BirthDate,$GenderCode); //assign output from addUser function to validation
  }
  if($userinformation==true)
  {
      echo "<p>User Info updated successfully</p>";
  }
  else
  {
      echo "<p>User Info not updated</p>";
  }
}
?>

<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

