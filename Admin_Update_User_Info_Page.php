<?php
include_once("UserInfoController.php");
session_start();
// $userid = $username = $password = "";


?>
<!DOCTYPE html>
<html>
<head>
<title>Update User Info</title>
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
<h1 class="text-center">Update User Info</h1>
<br>
<div class="container">
<form id="AdminSearchUserInfoPage" method="POST" action="Admin_Update_User_Info_Page.php">
<div class="form-group">
  <label>Enter User ID: </label>
  <input type="text" class="form-control"id="UserId" name="UserId"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUserInfo'>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
  </div>
</form>
</div><br><br> 

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $phoneregex = "/^(^[689]{1})(\d{7})$/";
    $emailregex = "/^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/";
    $phonenumber_err = $emailaddress_err = "";
    $printresult = "";

    $UserId = $FirstName = $LastName = $BirthDate = $GenderCode = $PhoneNumber = $EmailAddress = "";

    if($_POST['action']==='SearchUserInfo')
    {
        $UserControl = new UserInfoController();
        $userinformation = $UserControl->searchUserInfo($_POST['UserId']);
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
            $printresult = "";
            echo "
            <div class='container'>
                <form id='AdminUpdateUserInfoPage' method='POST' action='Admin_Update_User_Info_Page.php'>
                <div class='form-group'>
                <label>$printresult</label><br><br>
                <label>User ID : $UserId</label><br><br> 
                <label>First Name : </label>
                <input type='text' class='form-control' id='FirstName' name='FirstName' value='$FirstName' required><br><br>
                <label>Last Name : </label>
                <input type='text' class='form-control' id='LastName' name='LastName' value='$LastName' required><br><br>
                <label>Birth Date: </label>
                <input type='date' class='form-control' id='BirthDate' name='BirthDate' value='$BirthDate' required><br><br>
                <label>Gender Code: </label>
                <select name = 'GenderCode' class='form-control form-select-sm' id='GenderCode' value='<?php $GenderCode'>
                    <option>$GenderCode</option>
                    <option value = 'M' >M</option>
                    <option value = 'F' >F</option>
                </select><br><br>
                <label>Phone Number: </label>
                <input type='tel' class='form-control' id='PhoneNumber' name='PhoneNumber' value='$PhoneNumber' required>
                <label class='error'>$phonenumber_err</label>
                <br><br>
                <label>Email Address: </label>
                <input type='email' class='form-control' id='EmailAddress' name='EmailAddress' value='$EmailAddress' required>
                <label class='error'>$emailaddress_err</label>
                <br><br>

                <input type='hidden' name = 'action' value = 'UpdateUserInfo'>

                <button class='btn btn-primary btn-lg' type='submit' value='Update'>Update</button>
                <div>
                </form>
            </div>";
        }
        elseif($userinformation==false)
        {
            $printresult = "User not found";
            echo"<div class='container'>
            <p>$printresult</p>
            </div>
            ";
        }

    }

    if($_POST['action']==='UpdateUserInfo')
    {
            if (!preg_match($phoneregex, $_POST["PhoneNumber"])) 
            {
                $phonenumber_err="Please enter a valid phone number."; 
            }
                
            elseif (!preg_match($emailregex, $_POST["EmailAddress"])) 
            {
                $emailaddress_err="Please enter a valid email address.";
            }
        
            elseif($phonenumber_err != "" || $emailaddress_err != "")
            {
                echo "<p>User Info not updated</p>";
                echo "<p>$phonenumber_err</p>";
                echo "<p>$emailaddress_err</p>";
            }

            elseif($phonenumber_err == "" && $emailaddress_err == "")
            {
                $UserControl = new UserInfoController();
                $validation = $UserControl ->updateUserInfo($_SESSION['UserId'],$_POST['FirstName'],$_POST['LastName'],
                $_POST['BirthDate'],$_POST['GenderCode'],$_POST['PhoneNumber'],$_POST['EmailAddress']);

                if($validation==true)
                {
                    echo "<p>User Info updated successfully</p>";
                }
                else
                {
                    echo "<p>User Info not updated</p>";
                }
            }
    } 
}

?>
<br>
<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 10px 0 0;">Back</button></a></p>
</body>
</html>