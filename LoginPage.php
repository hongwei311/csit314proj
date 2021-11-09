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
            echo "Wrong Username/Password";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    margin: 0 0 0 0;
    font-size: 15px;
    font-weight: bold;
}
img{
    width: 100%;
    height: auto;
}
    </style>
</head>

<body>
    <div class="login-form">
    <form  method="POST" action="LoginPage.php">
        <h2 class="text-center">Log in</h2>
        <p><img src="logo.jpeg" alt="logo"></p>    
        <label>Username</label>&ensp;<input type="text" class="form-control" name="username" placeholder="Username" required> <br>
        <label>Password</label>&ensp;<input type="password" class="form-control" name="password" placeholder="Password" required> <br>
        <br>
        <button type="submit" class="btn btn-primary btn-block" name="submit" value="Login">Login</button>
    </form>
</div> 
</body>

</html>
