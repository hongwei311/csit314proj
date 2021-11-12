<?php
include_once("UserController.php"); // include User Controller to call function
session_start(); // start session to manipulate session variables
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      h1{
        margin: 0 0 0 50px;
      }
    .container{
      width:50%;
    }
    p{
      font-size:30px;
      text-align:center;
    }
    </style>

</head>
<body>
<br>
<h1 class="text-center">Add New User</h1>

<div class="container">
<form id="AdminAddUserPage" method="POST" action="Admin_Add_User_Page.php">
  <div class="form-group">
  <!-- create form wih post method to the same page -->
  <label>Username: </label>
  <input type="text" class="form-control" id="Username" name="username" placeholder="Username" required><br><br>
  <!-- create input text for Username for user to input username text -->
  <label>Password: </label>
  <input type="Password" class="form-control" id="Password" name="password" placeholder="Password" required><br><br>
  <!-- create password text for Username for user to input username text -->
  <label for="sel1">User Profile</label>&ensp;
  <select class="form-control form-select-sm" name = "userprofile" id="userprofile">
            <option value = "admin" >Admin</option>
            <option value = "doctor" >Doctor</option>
            <option value = "patient" >Patient</option>
            <option value = "pharmacist" >Pharmacist</option>
        </select> <br><br>
   <!-- create option input for User Profile for user to select user profile -->
  <button class="btn btn-primary btn-lg" type="submit" value="Submit">Submit</button>
  </div>
</form> 
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $UserControl = new UserControl(); // create User Controller to run function
  $validation = $UserControl->addUser($_POST['username'],$_POST['password'],$_POST['userprofile']); //assign output from addUser function to validation
  if($validation==true)
  {
    echo '<script>alert("User added succesfully")</script>';
  }
  else
  {
    echo '<script>alert("Unable to add user")</script>';
    unset($_SESSION['errmsg']);
  }
}
?>

<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>

</body>
</html>

