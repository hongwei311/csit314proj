<?php
include_once("UserInfoController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Search User Info</title>
<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Search User Info</h1>
<form id="AdminSearchUserInfoPage" method="POST" action="Admin_Search_User_Info_Page.php">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="UserId"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUserInfo'>
  <button class="button" type="submit" value="Search">Search</button>
</form><br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
    
        $UserInfoControl = new UserInfoController();
        $userinformation = $UserInfoControl->searchUserInfo($_POST['UserId']);
        $_SESSION['UserId']=$_POST['UserId'];
        $UserId = $userinformation["0"];
        $FirstName = $userinformation["1"];
        $LastName = $userinformation["2"];
        $BirthDate = $userinformation["3"];
        $GenderCode = $userinformation["4"];
        $PhoneNumber = $userinformation["5"];
        $EmailAddress = $userinformation["6"];
        $printresult = "";

        if($userinformation==true)
        {
            echo "<form>
            <label>User ID : $UserId</label><br><br> 
            <label>First Name : $FirstName</label><br><br> 
            <label>Last Name : $LastName</label><br><br> 
            <label>Birth Date (YYYY-MM-DD) : $BirthDate</label><br><br> 
            <label>Gender Code (M/F): $GenderCode</label><br><br> 
            <label>Phone Number : $PhoneNumber</label><br><br> 
            <label>Email Address: $EmailAddress</label><br><br> 
            
            <label>$printresult</label><br><br>
            </form>";
            unset($_SESSION['UserId']);
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