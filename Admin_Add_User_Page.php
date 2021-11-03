<?php
include_once("UserController.php"); // include User Controller to call function
session_start(); // start session to manipulate session variables
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New User</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Add New User</h1>

<form id="AdminAddUserPage" method="POST" action="Admin_Add_User_Page.php">
  <!-- create form wih post method to the same page -->
  <label>Username: </label>
  <input type="text" id="Username" name="username" required><br><br>
  <!-- create input text for Username for user to input username text -->
  <label>Password: </label>
  <input type="Password" id="Password" name="password" required><br><br>
  <!-- create password text for Username for user to input username text -->
  <label>User Profile</label>&ensp;<select name = "userprofile" id="userprofile">
            <option value = "Admin" >Admin</option>
            <option value = "Doctor" >Doctor</option>
            <option value = "Patient" >Patient</option>
            <option value = "Pharmacist" >Pharmacist</option>
        </select> <br><br>
   <!-- create option input for User Profile for user to select user profile -->
  <button class="button" type="submit" value="Submit">Submit</button>
</form> 
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $UserControl = new UserControl(); // create User Controller to run function
  $validation = $UserControl->addUser($_POST['username'],$_POST['password'],$_POST['userprofile']); //assign output from addUser function to validation
  if($validation==true)
  {
    echo "<p>User added successfully</p>";
  }
  else
  {
    echo "<p>User not added</p>";
  }
}
?>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

