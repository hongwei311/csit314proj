<?php
    include_once("LoginController.php");
    include_once("UserController.php");
      session_start();
      $_SESSION = array();
	  
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
		//create logincontrol variable
        $LoginControl = new LoginControl();
		//send validation to login controller class
        $validation = $LoginControl->onSubmit($_POST['username'],$_POST['password']);
		//retrieve information from controller
		
        if($validation["0"]=="")
        {
            echo '<script>alert("Wrong Username/Password")</script>';
        }
        else{
            $userid = $validation["0"];
            $username = $validation["1"];
            //$password = $validation["2"];
            $UserProfile = $validation["3"];
            //create session variables
            $_SESSION['userid']=$userid;
            $_SESSION['username']=$username;
            //$_SESSION['password']=$password;
            $_SESSION['UserProfile']=$UserProfile;

            $UserControl = new UserControl(); //create new user controller class to run retrieveUserProfileID function
            $userdetails = $UserControl->retrieveUserProfileID($userid,$UserProfile); // retrieves UserProfile info using userid and userprofile
            $UserProfileInfo = $userdetails["0"]; // uses first entry of userprofile info
            $UCUserProfile = ucfirst($UserProfile); // changes userprofile first letter to capital
            $ProfileID = $UCUserProfile."Id"; // add ID to userprofile to reference to the desired userprofileid
            $UserProfileID = $UserProfileInfo[$ProfileID]; // assigns to the userprofileid
            $_SESSION['UserProfileID']=$UserProfileID; //assigns to the session userprofileid
            
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
<html>

<head>
	<title>Electronic Prescription System</title>
	<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>

<body>
    <form id="LoginPageForm" method="POST" action="LoginPage.php">
        <label>Username</label>&ensp;<input type="text" name="username" placeholder="Username" required> <br>
        <label>Password</label>&ensp;<input type="password" name="password" placeholder="Password" required> <br>
        <br>
        <button type="submit" name="submit" value="Login">Login</button>
    </form> 
</body>

</html>
