<?php
include_once("UserController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Search User</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Search user</h1>


<form id="AdminSearchUserPage" method="POST" action="Admin_Search_User_Page.php">
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
        $userprofile = $userdetails["3"];
        ?>
        <form id="AdminSearchUserPage" method="POST" action="Admin_Search_User_Page.php">
            <label>User ID : <?php echo $userid;?></label><br><br> 
            <label>Username : <?php echo $username;?></label><br><br>
            <label>Password : <?php echo $password;?></label><br><br>
            <label>UserProfile : <?php echo $userprofile;?></label><br><br>
            
            <input type="hidden" name = "action" value = "SearchUser">
        <?php
    }
    elseif($_POST['action']==='SearchUser')
    {
        $UserControl = new UserControl();
        $validation = $UserControl ->searchUser($_SESSION['userid'],$_POST['username'],$_POST['password'],$_POST['usertype']);
        if($validation==true)
        {
            echo "User Searched successfully";
            unset($_SESSION['userid']);
        }
        else
        {
            echo "User not found";
        }
    }
    
}

?>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>