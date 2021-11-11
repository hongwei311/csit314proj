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

<?php

$phoneregex = "/^(^[689]{1})(\d{7})$/";
$emailregex = "/^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/";
$phonenumber_err = $emailaddress_err = "";

if($_SERVER['REQUEST_METHOD']=='POST')
{

  if (!preg_match($phoneregex, $_POST["PhoneNumber"])) {
    $phonenumber_err="Please enter a valid phone number."; 
    }
    
  if (!preg_match($emailregex, $_POST["EmailAddress"])) {
    $emailaddress_err="Please enter a valid email address.";
    }

    $UserId = $_POST['UserId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $BirthDate = $_POST['BirthDate'];
    $GenderCode = $_POST['GenderCode'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $EmailAddress = $_POST['EmailAddress'];

    if($phonenumber_err =="" && $emailaddress_err == ""){
    for ($i=1; $i<=302; $i++){
  $UserInfoControl = new UserInfoController(); // create User Controller to run function
  $validation = $UserInfoControl->updateUserInfo($UserId++, $FirstName++,$LastName++,$BirthDate,$GenderCode,$PhoneNumber++,$EmailAddress++); //assign output from addUser function to validation
  }
  if($validation==true)
  {
      echo "<p>User Info updated successfully</p>";
  }
  else
  {
      echo "<p>User Info not updated</p>";
  }
}
}
?>

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
    </select>
    <br><br>
  <label>Phone Number: </label>
  <input type="tel" id="PhoneNumber" name="PhoneNumber" required>
  <label class="error"><?php echo $phonenumber_err; ?></label>
  <br><br>
  <label>Email Address: </label>
  <input type="email" id="EmailAddress" name="EmailAddress" required>
  <label class="error"><?php echo $emailaddress_err; ?></label>
    <br><br>
   <!-- create option input for User Profile for user to select user profile -->
  <button class="btn btn-primary btn-lg" type="submit" value="Submit">Submit</button>
</form>



<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

