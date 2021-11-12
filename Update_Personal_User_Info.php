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
</head>
<body>

<h1 class="text-center">Update User Info</h1>

<?php

    $phoneregex = "/^(^[689]{1})(\d{7})$/";
    $emailregex = "/^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/";
    $phonenumber_err = $emailaddress_err = "";
    $printresult = "";

    $UserId = $FirstName = $LastName = $BirthDate = $GenderCode = $PhoneNumber = $EmailAddress = "";
        $UserControl = new UserInfoController();
        $validation = $UserControl->searchUserInfo($_SESSION['userid']);

        if($validation==true)
        {
            $UserId = $_SESSION['validation']["0"];
            $FirstName = $_SESSION['validation']["1"];
            $LastName = $_SESSION['validation']["2"];
            $BirthDate = $_SESSION['validation']["3"];
            $GenderCode = $_SESSION['validation']["4"];
            $PhoneNumber = $_SESSION['validation']["5"];
            $EmailAddress = $_SESSION['validation']["6"];
        }
        elseif($validation==false)
        {
            $printresult = "User not found";
        }

?>
<div class="container">
    <form id="UpdatePersonalUserInfo" method="POST" action="Update_Personal_User_Info.php">
    <div class="form-group">
     <label><?php echo $printresult;?></label><br><br>
            <label>User ID : <?php echo $UserId;?></label><br><br> 
            <label>First Name : </label>
            <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $FirstName;?>" required><br><br>
            <label>Last Name : </label>
            <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $LastName;?>" required><br><br>
            <label>Birth Date: </label>
            <input type="date" class="form-control" id="BirthDate" name="BirthDate" value="<?php echo $BirthDate;?>" required><br><br>
            <label>Gender Code: </label>
            <select name = "GenderCode" class="form-control" id="GenderCode" value="<?php $GenderCode;?>">
                <option><?php echo $GenderCode;?></option>
                <option value = "M" >M</option>
                <option value = "F" >F</option>
            </select>
            <br><br>
            <label>Phone Number: </label>
            <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $PhoneNumber;?>" required>
            <label class="error"><?php echo $phonenumber_err; ?></label>
            <br><br>
            <label>Email Address: </label>
            <input type="email" class="form-control" id="EmailAddress" name="EmailAddress" value="<?php echo $EmailAddress;?>" required>
            <label class="error"><?php echo $emailaddress_err; ?></label>
            <br><br>
            <input type="hidden" name = "action" value = "UpdateUserInfo">
            <button class="btn btn-primary btn-lg" type="submit" value="Update">Update</button>
        </div>
        </form>
    </div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
        
        if (!preg_match($phoneregex, $_POST["PhoneNumber"])) {
                $phonenumber_err="Please enter a valid phone number."; 
                }
                
        if (!preg_match($emailregex, $_POST["EmailAddress"])) {
                $emailaddress_err="Please enter a valid email address.";
                }
        

        if($phonenumber_err == "" && $emailaddress_err == ""){
        $UserControl = new UserInfoController();
        $validation = $UserControl ->updateUserInfo($_SESSION['userid'],$_POST['FirstName'],$_POST['LastName'],
        $_POST['BirthDate'],$_POST['GenderCode'],$_POST['PhoneNumber'],$_POST['EmailAddress']);

        if($validation==true)
        {
            echo '<script>alert("User Info Updated succesfully")</script>';
            echo "<meta http-equiv='refresh' content='0'>";
        }
        else
        {
            echo "User Info not updated";
        }
        }
        elseif($phonenumber_err != "" || $emailaddress_err != ""){
            echo '<script>alert("Unable to update user info. '. $phonenumber_err . $emailaddress_err . ' ")</script>';
        }

        if($_POST['action']==='Back') {
            if ($_SESSION['UserProfile']!=null){
                switch($_SESSION['UserProfile'])
                {
                    case 'admin':
                        header("Location:Admin_Main_Page.php");
                        break;
            
                    case 'doctor':
                        header("Location:Doctor_Main_Page.php");
                        break;
            
                    case 'patient':
                        header("Location:Patient_Main_Page.php");
                        break;
            
                    case 'pharmacist':
                        header("Location:Pharmacist_Main_Page.php");
                        break;
                }
             }
            }
    
}

?>
<br>
<form id="UpdatePersonalUserInfo" method="POST" action="Update_Personal_User_Info.php">
<input type='hidden' name = 'action' value = 'Back'>
<button type="submit" name="back" class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button>
</form>


</body>
</html>