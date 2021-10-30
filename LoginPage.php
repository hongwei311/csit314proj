<?php
    include_once("LoginController.php");
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
            // $password = $validation["2"];
            $UserProfile = $validation["3"];
            //create session variables
            $_SESSION['userid']=$userid;
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['UserProfile']=$UserProfile;
            
            
            
            if ($_SESSION['UserProfile']!=null){
                switch($_SESSION['UserProfile'])
                {
                    case 'Admin':
                        header("Location:Admin_Main_Page.php");
                        break;

                    case 'Doctor':
                        header("Location:Doctor_Main_Page.php");
                        break;

                    case 'Patient':
                        header("Location:Patient_Main_Page.php");
                        break;

                    case 'Pharmacist':
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
