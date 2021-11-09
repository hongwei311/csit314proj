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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Search User</h1>
<form id="AdminSearchUserPage" method="POST" action="Admin_Search_User_Page.php">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="userid" required><br><br>
  <input type='hidden' name = 'action' value = 'SearchUser'>
  <button class="button" type="submit" value="Search">Search</button>
</form><br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
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
            echo "<form>
            <label>User ID : $userid</label><br><br> 
            <label>Username : $username</label><br><br>
            <label>UserProfile : $userprofile</label><br><br>
            <label>$printresult</label><br><br>
            </form>";
            unset($_SESSION['userid']);
        }
        else
        {
            echo '<script>alert("User ID not found!")</script>';
        }
        
}

?>
        


<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>