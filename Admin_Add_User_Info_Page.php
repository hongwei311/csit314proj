<?php
  include_once("UserController.php");
  include_once("UserInfoController.php");
  session_start();
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
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

<head>
  <title>Add User Profile</title>
</head>

<body>
<h1>Add User Profile</h1>

<form id="AdminAddUserInfoPage" method="POST" action="Admin_Add_User_Info_Page.php?action=SearchUser">
  <label>Enter User ID: </label>
  <input type="text" id="Userid" name="userid"><br><br>
  <a href="Admin_Main_Page.php"><button class="button">Back</button></a>
  <input type='hidden' name = 'action' value = 'SearchUserInfo'>
  <input type="submit" value="Search">
</form><br><br> 

<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if($_POST['action']==='SearchUserInfo')
    { 
      $_SESSION['userid']=$_POST['userid'];
      $UserController = new UserControl();
      $userdetails = $UserController->searchUser($_POST['userid']);

      $UserInfoController = new UserInfoController();
      $userinformation = $UserInfoController->searchUserInfo($_POST['userid']);
     
      if(is_null($userdetails["0"]) != 1) // if user exists in the user table (has user id)
      {
        $userid = $userdetails["0"];
      ?>
      <?php 
        if(is_null($userinformation["1"])) //if the user's firstname is null
        {    
      ?>
          <form id="AdminAdminAddUserInfoPage" method="POST" action="Admin_Add_User_Info_Page.php">
            <label>User ID :  <?php echo $userid;?></label><br><br> 
            <label>First Name : </label>
            <input type="text" id="FirstName" name="FirstName"><br><br>
            <label>Last Name: </label>
            <input type="text" id="LastName" name="LastName"><br><br>
            <label>Birth Date: </label>
            <input type="text" id="BirthDate" name="BirthDate"><br><br>
            <label>Gender: </label>&ensp;
            <select name="GenderCode" id="GenderCode">
              <option value = "M" >M</option>
              <option value = "F" >F</option>
            </select> <br><br>
            <label>Email Address: </label>
            <input type="text" id="EmailAddress" name="EmailAddress"><br><br>
            <input type="hidden" name = "action" value = "AddUserInfo">
            <input type="submit" value="Add">        
          </form>
      <?php
        }
          else
          {
            echo ("User profile aleady added");
          }
      }
        else
        {
          echo("User not found");
        }
    }
    elseif($_POST['action']==='AddUserInfo')
    {
      $UserInfoController = new UserInfoController();
      $validation = $UserInfoController ->addUserInfo($_POST['FirstName'],$_POST['LastName'],$_POST['BirthDate'],$_POST['GenderCode'],$_POST['EmailAddress']);
      if($validation==true)
      {
          echo "User info added successfully";
          unset($_SESSION['userid']);
      }
      else
      {
          echo "User info not added";
      }
    }
      ?>
      <br><br>
      <a href="Admin_Main_Page.php"><button class="button">Back To Homepage</button></a>
    <?php
}
?>

</body>
</html>