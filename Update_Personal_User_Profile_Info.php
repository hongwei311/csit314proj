<?php
include_once("UserProfileController.php");
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
	.table{
	width: 80%;
	margin: 0 0 0 50px;
	text-align:left;"
	cellspacing="0"
  }
  h1 {
    margin: 0 0 0 50px;
  }

</style>
</head>
<body>

<br>
<h1 class="text-center">Update User Profile Info</h1>
<br>


<?php
$UserProfile = $_SESSION['UserProfile'];
$StringUserProfile = ucfirst($UserProfile); // changes userprofile first letter to capital and a string

    if($StringUserProfile==='Doctor'){
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($_SESSION['UserProfile'], $_SESSION['userid']);
        $DoctorId = $_SESSION['validation']["0"];
        $UserId = $_SESSION['validation']["1"];
        $HealthFacility = $_SESSION['validation']["2"];
        $Profession = $_SESSION['validation']["3"];
        $DoctorYearsOfExperience = $_SESSION['validation']["4"];

        if($validation==true)
        {
            echo '<div class="container">';
                echo'<form id="UpdatePersonalUserProfileInfo" method="POST" action="Update_Personal_User_Profile_Info.php">';
                    echo'<div class="form-group">';
                            echo"<label>Doctor Id : $DoctorId </label><br><br>"; 
                            echo"<label>User ID : $UserId </label><br><br> ";
                            echo'<label>Health Facility : </label>';
                            echo"<input type='text' class='form-control' id='HealthFacility' name='HealthFacility' value='$HealthFacility' required><br><br>";
                            echo'<label>Profession : </label>';
                            echo"<input type='text' class='form-control' id='Profession' name='Profession' value='$Profession' required><br><br>";
                            echo'<label>Years Of Experience: </label>';
                            echo"<input type='number' class='form-control' id='DoctorYearsOfExperience' name='DoctorYearsOfExperience' value='$DoctorYearsOfExperience' required><br><br>";
                            echo'<br><br>';
                            echo"<input type='hidden' name = 'action' value = 'UpdateDoctorProfile'></input>";
                            echo'<button class="btn btn-primary btn-lg" type="submit" value="Update">Update</button>';
                    echo'</div>';
                echo'</form>';
            echo'</div>';
            
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }

    if($StringUserProfile==='Patient'){
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($_SESSION['UserProfile'], $_SESSION['userid']);
        $PatientId = $_SESSION['validation']["0"];
        $UserId = $_SESSION['validation']["1"];
        $DrugAllergy = $_SESSION['validation']["2"];
        $PrescriptionNotification = $_SESSION['validation']["3"];

        if($validation==true)
        {
            echo '<div class="container">';
                echo'<form id="UpdatePersonalUserProfileInfo" method="POST" action="Update_Personal_User_Profile_Info.php">';
                    echo'<div class="form-group">';
                            echo"<label>Patient Id : $PatientId </label><br><br>"; 
                            echo"<label>User ID : $UserId </label><br><br> ";
                            echo'<label>Drug Allergy : </label>';
                            echo"<input type='text' class='form-control' id='DrugAllergy' name='DrugAllergy' value='$DrugAllergy' required><br><br>";
                            echo'<label>Prescription Notification : </label>';
                            echo"<input type='text' class='form-control' id='PrescriptionNotification' name='PrescriptionNotification' value='$PrescriptionNotification' required><br><br>";
                            echo'<br><br>';
                            echo'<input type="hidden" name = "action" value = "UpdatePatientProfile"></input>';
                            echo'<button class="btn btn-primary btn-lg" type="submit" value="Update">Update</button>';
                    echo'</div>';
                echo'</form>';
            echo'</div>';
            
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }

    if($StringUserProfile==='Pharmacist'){
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($_SESSION['UserProfile'], $_SESSION['userid']);
        $PharmacistId = $_SESSION['validation']["0"];
        $UserId = $_SESSION['validation']["1"];
        $PharmacyName = $_SESSION['validation']["2"];
        $PharmacyLocation = $_SESSION['validation']["3"];
        $PharmacistYearsOfExperience = $_SESSION['validation']["4"]; 

        if($validation==true)
        {
            echo '<div class="container">';
                echo'<form id="UpdatePersonalUserProfileInfo" method="POST" action="Update_Personal_User_Profile_Info.php">';
                    echo'<div class="form-group">';
                            echo"<label>Pharmacist Id : $PharmacistId </label><br><br>"; 
                            echo"<label>User ID : $UserId </label><br><br> ";
                            echo'<label>Pharmacy Name : </label>';
                            echo"<input type='text' class='form-control' id='PharmacyName' name='PharmacyName' value='$PharmacyName' required><br><br>";
                            echo'<label>Pharmacy Location : </label>';
                            echo"<input type='text' class='form-control' id='PharmacyLocation' name='PharmacyLocation' value='$PharmacyLocation' required><br><br>";
                            echo'<label>Years Of Experience: </label>';
                            echo"<input type='number' class='form-control' id='PharmacistYearsOfExperience' name='PharmacistYearsOfExperience' value='$PharmacistYearsOfExperience' required><br><br>";
                            echo'<br><br>';
                            echo'<input type="hidden" name = "action" value = "UpdatePharmacistProfile"></input>';
                            echo'<button class="btn btn-primary btn-lg" type="submit" value="Update">Update</button>';
                    echo'</div>';
                echo'</form>';
            echo'</div>';
            
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }
?> 

<?php

    if($_SERVER['REQUEST_METHOD']=='POST') {
    
        if($_POST['action']==='UpdateDoctorProfile') {
            $UserControl = new UserProfileController();
            $updateinformation = $UserControl ->updateDoctorProfile($_SESSION['userid'],$_POST['HealthFacility'],$_POST['Profession'],$_POST['DoctorYearsOfExperience']);
                if($updateinformation==true)
                {
                    echo '<script>alert("User Profile Updated succesfully")</script>';
                    echo "<meta http-equiv='refresh' content='0'>";
                }
                else
                {
                    echo '<script>alert("Unable to update user profile.")</script>';
                }
        }

        if($_POST['action']==='UpdatePatientProfile') {
            $UserControl = new UserProfileController();
            $updateinformation = $UserControl ->updatePatientProfile($_SESSION['userid'],$_POST['DrugAllergy'],$_POST['PrescriptionNotification']);
                if($updateinformation==true)
                {
                    echo '<script>alert("User Profile Updated succesfully")</script>';
                    echo "<meta http-equiv='refresh' content='0'>";
                }
                else{
                    echo '<script>alert("Unable to update user profile.")</script>';
                }
        }

        if($_POST['action']==='UpdatePharmacistProfile') {
            $UserControl = new UserProfileController();
            $updateinformation = $UserControl ->updatePharmacistProfile($_SESSION['userid'],$_POST['PharmacyName'],$_POST['PharmacyLocation'],
            $_POST['PharmacistYearsOfExperience']);
                if($updateinformation==true)
                {
                    echo '<script>alert("User Profile Updated succesfully")</script>';
                    echo "<meta http-equiv='refresh' content='0'>";
                }
                else{
                    echo '<script>alert("Unable to update user profile.")</script>';
                }
        } 

        #Exit based on UserProfile
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

<form id="Back" method="POST" action="Update_Personal_User_Profile_Info.php">
<input type='hidden' name = 'action' value = 'Back'>
<button type="submit" name="back" class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button>
</form>

</body>
</html>