<?php
include_once("UserController.php");
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $UserControl = new UserControl();
  $validation = $UserControl->addUser($_POST['username'],$_POST['password'],$_POST['usertype']);
  $_SESSION['username']=$_POST['username'];
  if($validation==true)
  {
    echo '<script>alert("User added successfully")</script>';
  }
  else
  {
    echo '<script>alert("User not added successfully")</script>';
  }
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Add New User</title>
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


.Logout {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.Logout:hover {
  background-color: #008CBA;
  color: white;
}
</style>
</head>
<body>

<h1>Add new user</h1>

<p><a href="Admin_Main_Page.php"><button class="button">Main Page</button></p></a></p>

<form action="UserController.php">
  <label>Username: </label>
  <input type="text" id="Username" name="Username"><br><br>
  <label>Password: </label>
  <input type="Password" id="Password" name="Password"><br><br>
  <label>User Type</label>&ensp;<select name = "usertype" id="usertype">
            <option value = "Admin" >Admin</option>
            <option value = "Doctor" >Doctor</option>
            <option value = "Patient" >Patient</option>
            <option value = "Pharmacist" >Pharmacist</option>
        </select> <br><br>
  <input type="submit" value="Submit">
</form> 



<p><a href="Logout.php"><button class="button" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</body>
</html>

