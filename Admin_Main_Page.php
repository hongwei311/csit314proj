<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
<style>
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

.Patient_Current_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.Patient_Current_Prescription:hover {
  background-color: #4CAF50;
  color: white;
}

.Patient_Past_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Patient_Past_Prescription:hover {
    background-color: #4CAF50;
  color: white;
}

.Patient_Search_Prescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Patient_Search_Prescription:hover {
    background-color: #4CAF50;
  color: white;
}
.Logout {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Logout:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>

<p><a href="Admin_Add_User_Page.php"><button class="button Patient_Current_Prescription">Add new users</button></p></a></p>

<p><a href=""><button class="button Patient_Past_Prescription">Search for users</button></a></p>

<p><a href=""><button class="button Patient_Search_Prescription">Update users</button></a></p>

<p><a href=""><button class="button Patient_Search_Prescription">view users</button></a></p>

<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>