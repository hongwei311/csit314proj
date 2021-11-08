<?php
include_once("UserInfoController.php"); // include User Controller to call function
include("GlobalClass.php");
session_start(); // start session to manipulate session variables

?>
<!DOCTYPE html>
<html>
<head>
<title>Add New User Info</title>
<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
      h1{
        margin: 0 0 0 50px;
      }
    .container{
      width:50%;
    }
    </style>
</head>
<body>


<?php
$phoneregex = "/^(^[689]{1})(\d{7})$/";
$emailregex = "/^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/";
$phonenumber_err = $emailaddress_err = "";
$printReturn = "";

if($_SERVER['REQUEST_METHOD']=='POST')
{

  if (!preg_match($phoneregex, $_POST["PhoneNumber"])) {
    $phonenumber_err="Please enter a valid phone number."; 
    }
    
  if (!preg_match($emailregex, $_POST["EmailAddress"])) {
    $emailaddress_err="Please enter a valid email address.";
    }
  
  if($phonenumber_err =="" && $emailaddress_err == ""){
  $UserInfoControl = new UserInfoController(); // create User Controller to run function
  $validation = $UserInfoControl->addUserInfo($_POST['UserId'],$_POST['FirstName'],$_POST['LastName'],$_POST['BirthDate'],
  $_POST['GenderCode'],$_POST['PhoneNumber'],$_POST['EmailAddress']); //assign output from addUser function to validation
  if($validation==true)
  {
    $printReturn = "<p>User Info added successfully</p>";
  }
  else
  {
    $printReturn = "<p>User Info not added</p>";
  }
}
}
?>
<br>
<h1>Add New User Info</h1>
<div class="container">
<form id="AdminAddUserInfoPage" method="POST" action="Admin_Add_User_Info_Page.php">
  <div class="form-group">
  <!-- create form wih post method to the same page -->
  <label>User Id: </label>
  <input type="text"class="form-control id="UserId" name="UserId" required><br><br>
  <!-- create input text for Username for user to input username text -->
  <label>First Name: </label>
  <input type="text"class="form-control id="FirstName" name="FirstName" required><br><br>
  <!-- create password text for Username for user to input username text -->
  <label>Last Name: </label>
  <input type="text"class="form-control id="LastName" name="LastName" required><br><br>
  <label>Birth Date: </label>
  <input type="date" class="form-control id="BirthDate" name="BirthDate" required><br><br>
  <label>Gender Code: </label>
  <select class="form-control form-select-sm" name = "GenderCode" id="GenderCode">
            <option value = "M" >M</option>
            <option value = "F" >F</option>
  </select><br><br>
  <label>Phone Number: </label>
  <input type="tel" class="form-control id="PhoneNumber" name="PhoneNumber" required>
  <label class="error"><?php echo $phonenumber_err; ?></label>
  <br><br>
  <label>Email Address: </label>
  <input type="email" class="form-control id="EmailAddress" name="EmailAddress" required>
  <label class="error"><?php echo $emailaddress_err; ?></label>
  <br><br>
  <label><?php echo $printReturn; ?></label>

  <button class="btn btn-primary btn-lg" type="submit" value="Submit">Submit</button>
  </div>
</form>
</div>


<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

