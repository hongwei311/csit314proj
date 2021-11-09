<?php
include_once("UserController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Update User</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Update User</h1>


<form id="AdminSearchUserPage" method="POST" action="Admin_Update_User_Page.php">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="userid"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUser'>
  <button class="button" type="submit" value="Search">Search</button>
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
        $userprofile = $userdetails["3"];
        $printresult = "";

        if($userdetails==true)
        {
            ?>
            <form id="AdminUpdateUserPage" method="POST" action="Admin_Update_User_Page.php">
            <label><?php echo $printresult;?></label><br><br>
            <label>User ID : <?php echo $userid;?></label><br><br> 
            <label>Username : </label>
            <input type="text" id="Username" name="username" value="<?php echo $username;?>" required><br><br>
            <label>Password : </label>
            <input type="password" id="Password" name="password" value="<?php echo $password;?>" required><br><br>
            <label>User Profile</label>&ensp;
                    <select name = "userprofile" id="userprofile" value="<?php $userprofile;?>" required>
                        <option><?php echo $userprofile;?></option>
                        <option value = "admin" >Admin</option>
                        <option value = "doctor" >Doctor</option>
                        <option value = "patient" >Patient</option>
                        <option value = "pharmacist" >Pharmacist</option>
                    </select> <br><br>
            <input type="hidden" name = "action" value = "UpdateUser">
            <button class="button" type="submit" value="Update">Update</button>
        </form><?php
        }
        else
        {
            echo '<script>alert("User ID not found!")</script>';
        }
         
        


    }
    if($_POST['action']==='UpdateUser')
    {
        $UserControl = new UserControl();
        $validation = $UserControl ->updateUser($_SESSION['userid'],$_POST['username'],$_POST['password'],$_POST['userprofile']);
        if($validation==true)
        {
            echo "User updated successfully";
        }
        else
        {
            echo "User not updated";
        }
    }
    
}

?>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>