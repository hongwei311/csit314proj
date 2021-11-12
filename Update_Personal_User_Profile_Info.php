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
<h1 class="text-center">Welcome, <?php echo $_SESSION['UserProfile']?>  </h1>
<h1 class="text-center">Welcome, <?php echo $_SESSION['userid']?>  </h1>
<h1 class="text-center">Update User Profile Info</h1>
<br>


<?php
$_SESSION['UserProfile']=$UserProfile;
$_SESSION['userid']=$UserId;
$UCUserProfile = ucfirst($UserProfile); // changes userprofile first letter to capital

echo $UCUserProfile;

    if($_SESSION['UserProfile'] === 'doctor'){
        
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($UserProfile, $UserId);
        
        $printresult = "";

        if($validation==true)
        {
            $DoctorId = $_SESSION['validation']["0"];
            $UserId = $_SESSION['validation']["1"];
            $HealthFacility = $_SESSION['validation']["2"];
            $Profession = $_SESSION['validation']["3"];
            $DoctorYearsOfExperience = $_SESSION['validation']["4"];
            $printresult = "Found";
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }

    if($_SESSION['UserProfile']==='patient'){
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($_SESSION['UserProfile'], $_SESSION['userid']);
        
        $printresult = "";

        if($validation==true)
        {
            $PatientId = $_SESSION['validation']["0"];
            $UserId = $_SESSION['validation']["1"];
            $DrugAllergy = $_SESSION['validation']["2"];
            $PrescriptionNotification = $_SESSION['validation']["3"];
            $printresult = "";
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }

    if($_SESSION['UserProfile']==='pharmacist'){
        $UserControl = new UserProfileController();
        $validation = $UserControl->searchUserProfile($_SESSION['UserProfile'], $_SESSION['userid']);
        
        $printresult = "";

        if($validation==true)
        {
            $PharmacistId = $_SESSION['validation']["0"];
            $UserId = $_SESSION['validation']["1"];
            $PharmacyName = $_SESSION['validation']["2"];
            $PharmacyLocation = $_SESSION['validation']["3"];
            $PharmacistYearsOfExperience = $_SESSION['validation']["4"];
            $printresult = "";
        }
        elseif($validation==false)
        {
            echo '<script>alert("User Profile Information Not Found!")</script>';
        }
    }

    if($_SERVER['REQUEST_METHOD']=='POST') {
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

<div class="container">
        <form id="UpdatePersonalUserProfileInfo" method="POST" action="Update_Personal_User_Profile_Info.php">
                <div class="form-group">
                    <label><?php echo $UserId;?></label><br><br>
                    <label><?php echo $UserProfile;?></label><br><br>
                    <label><?php echo $printresult;?></label><br><br>
                    <label>Doctor Id : <?php echo $DoctorId;?></label><br><br> 
                    <label>User ID : <?php echo $UserId;?></label><br><br> 
                    <label>Health Facility : </label>
                    <input type="text" class="form-control" id="HealthFacility" name="HealthFacility" value="<?php echo $HealthFacility;?>" required><br><br>
                    <label>Profession : </label>
                    <input type="text" class="form-control" id="Profession" name="Profession" value="<?php echo $Profession;?>" required><br><br>
                    <label>Years Of Experience: </label>
                    <input type="number " class="form-control" id="DoctorYearsOfExperience" name="DoctorYearsOfExperience" value="<?php echo $DoctorYearsOfExperience;?>" required>
                    <br><br>
                    <input type="hidden" name = "action" value = "UpdateUserProfile">
                    <button class="btn btn-primary btn-lg" type="submit" value="Update">Update</button>
                </div>
        </form>
</div>

<br>
<form id="Back" method="POST" action="Update_Personal_User_Profile_Info.php">
<input type='hidden' name = 'action' value = 'Back'>
<button type="submit" name="back" class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button>
</form>


</body>
</html>