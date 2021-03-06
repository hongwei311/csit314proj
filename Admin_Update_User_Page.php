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
<h1 class="text-center">Update User</h1>
<br>
<div class="container">
<form id="AdminSearchUserPage" method="POST" action="Admin_Update_User_Page.php">
<div class="form-group">
  <label>Enter User ID: </label>
  <input class="form-control" type="text" id="UserId" name="UserId" Placeholder="User ID" required><br><br>
  <input type='hidden' name = 'action' value = 'SearchUser'>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
</div>
</form>
</div>
<br><br> 

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST['action']==='SearchUser')
    {
        $UserControl = new UserControl();
        $validation = $UserControl->searchUser($_POST['UserId']);
        $_SESSION['UserId']=$_POST['UserId'];

        if($validation==true)
        {
            $UserId = $_SESSION['validation']["0"];
            $username = $_SESSION['validation']["1"];
            $password = $_SESSION['validation']["2"];
            $userprofile = $_SESSION['validation']["3"];
            $printresult = "";
            
            echo"    <div class='container'>
            <form id='AdminUpdateUserPage' method='POST' action='Admin_Update_User_Page.php'>
                <div class='form-group'>
                <label><?php echo $printresult;?></label><br><br>
                <label>User ID : $UserId</label><br><br> 
                <label>Username : </label>
                <input type='text' class='form-control' id='Username' name='username' value='$username' required><br><br>
                <label>Password : </label>
                <input type='password' class='form-control' id='Password' name='password' required><br><br>
                <label>User Profile</label>&ensp;
                        <select class='form-control form-select-sm' name = 'userprofile' id='userprofile' value='$userprofile' required>
                            <option>$userprofile</option>
                            <option value = 'admin' >Admin</option>
                            <option value = 'doctor' >Doctor</option>
                            <option value = 'patient' >Patient</option>
                            <option value = 'pharmacist' >Pharmacist</option>
                        </select> <br><br>
                <input type='hidden' name = 'action' value = 'UpdateUser'>
                <button class='button btn btn-primary btn-lg' type='submit' value='Update'>Update</button>
                </div>
            </form>
        </div>";
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Id Not Found")</script>';
        }
    }
    if($_POST['action']==='UpdateUser')
    {
        $UserControl = new UserControl();
        $validation = $UserControl ->updateUser($_SESSION['UserId'],$_POST['username'],$_POST['password'],$_POST['userprofile']);
        if($validation==true)
        {
            echo '<script>alert("User Account Updated")</script>';
        }
        else
        {
            echo '<script>alert("User Account not Updated")</script>';
        }
    }
    
}

?>

<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>