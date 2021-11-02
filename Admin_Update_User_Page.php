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
</head>
<body>

<h1>Update user</h1>


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
            $printresult = "User Searched successfully";
        }
        elseif($userdetails==false)
        {
            $printresult = "User not found";
        }

?>      
        <form id="AdminUpdateUserPage" method="POST" action="Admin_Update_User_Page.php">
            <label><?php echo $printresult;?></label><br><br>
            <label>User ID : <?php echo $userid;?></label><br><br> 
            <label>Username : </label>
            <input type="text" id="Username" name="username" value="<?php echo $username;?>"><br><br>
            <label>Password : </label>
            <input type="text" id="Password" name="password" value="<?php echo $password;?>"><br><br>
            <label>Current User Profile : <?php echo $userprofile;?></label><br><br>
            <label>User Profile</label>&ensp;
                    <select name = "userprofile" id="userprofile">
                        <option value = "Admin" >Admin</option>
                        <option value = "Doctor" >Doctor</option>
                        <option value = "Patient" >Patient</option>
                        <option value = "Pharmacist" >Pharmacist</option>
                    </select> <br><br>
            <input type="hidden" name = "action" value = "UpdateUser">
            <button class="button" type="submit" value="Update">Update</button>
        </form>

<?php
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