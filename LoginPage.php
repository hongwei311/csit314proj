<?php
    include_once("LoginController.php");
      session_start();
      $_SESSION = array();
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $LoginControl = new LoginControl();
        $validation = $LoginControl->onSubmit($_POST['username'],$_POST['password'],$_POST['usertype']);
        $_SESSION['username']=$_POST['username'];
        if($validation==true)
        {
            switch($_POST['usertype'])
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
        else
        {
            echo "Wrong username/password";
        }
    }
?>
<html>


<body>
    <form id="LoginPageForm" method="POST" action="LoginPage.php">
        <label>Username</label>&ensp;<input type="text" name="username" placeholder="Username"> <br>
        <label>Password</label>&ensp;<input type="password" name="password" placeholder="Password"> <br>
        <label>User Type</label>&ensp;<select name = "usertype" id="usertype">
            <option value = "Admin" >Admin</option>
            <option value = "Doctor" >Doctor</option>
            <option value = "Patient" >Patient</option>
            <option value = "Pharmacist" >Pharmacist</option>
        </select> <br>
        <button type="submit" name="submit" value="Login">Login</button>
    </form> 
</body>

</html>
