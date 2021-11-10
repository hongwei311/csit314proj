<?php
include_once("UserController.php"); // include User Controller to call function
session_start(); // start session to manipulate session variables
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate New User</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Generate New User</h1>

<form id="AdminGenerateUsers" method="POST" action="GenerateUsers.php">
  <!-- create form wih post method to the same page -->
  <label>Username: </label>
  <input type="text" id="Username" name="Username" required><br><br>
  <!-- create input text for Username for user to input username text -->
  <label>Password: </label>
  <input type="Password" id="Password" name="Password" required><br><br>
  <!-- create password text for Username for user to input username text -->
  <label>User Profile</label>&ensp;<select name = "UserProfile" id="UserProfile">
            <option value = "admin" >Admin</option>
            <option value = "doctor" >Doctor</option>
            <option value = "patient" >Patient</option>
            <option value = "pharmacist" >Pharmacist</option>
        </select> <br><br>
   <!-- create option input for User Profile for user to select user profile -->
  <button class="button" type="submit" value="Submit">Submit</button>
</form> 
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $UserProfile = $_POST['UserProfile'];
for ($i=1; $i<=100; $i++){
  $UserControl = new UserControl(); // create User Controller to run function
  $validation = $UserControl->addUser($Username++,$Password++,$UserProfile); //assign output from addUser function to validation
  }
}
?>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

