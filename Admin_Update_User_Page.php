<?php
include_once("UserController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Update User</title>
<style>
table, th, td {
  border:1px solid black;
}

.button {
  border: none;
  color: black;
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

<h1>Update user</h1>

<p><a href="Admin_Main_Page.php"><button class="button">Main Page</button></p></a></p>

<form id="AdminUpdateUserPage" method="POST" action="Admin_Update_User_Page.php?action=SearchUser">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="userid"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUser'>
  <input type="submit" value="Search">
</form><br><br> 



<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST['action']==='SearchUser')
    {
        $UserControl = new UserControl();
        $userdetails = $UserControl->searchUser($_POST['userid']);
        $_SESSION['userid']=$_POST['userid'];
        $userid = $userdetails["0"];
        $username = $userdetails["1"];
        $password = $userdetails["2"];    
        ?>
        <form id="AdminUpdateUserPage" method="POST" action="Admin_Update_User_Page.php">
            <label>User ID : <?php echo $userid;?></label><br><br> 
            <label>Username : </label>
            <input type="text" id="Username" name="username" value="<?php echo $username;?>"><br><br>
            <label>Password : </label>
            <input type="text" id="Password" name="password" value="<?php echo $password;?>"><br><br>
            <label>User Type</label>&ensp;<select name = "usertype" id="usertype">
                        <option value = "Admin" >Admin</option>
                        <option value = "Doctor" >Doctor</option>
                        <option value = "Patient" >Patient</option>
                        <option value = "Pharmacist" >Pharmacist</option>
                    </select> <br><br>
            <input type="hidden" name = "action" value = "UpdateUser">
            <input type="submit" value="Update">
        <?php
    }
    elseif($_POST['action']==='UpdateUser')
    {
        $UserControl = new UserControl();
        $validation = $UserControl ->updateUser($_SESSION['userid'],$_POST['username'],$_POST['password'],$_POST['usertype']);
        if($validation==true)
        {
            echo "User updated successfully";
            unset($_SESSION['userid']);
        }
        else
        {
            echo "User not updated";
        }
    }
    
}

?>





<p><a href="Logout.php"><button class="button" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>
</body>
</html>