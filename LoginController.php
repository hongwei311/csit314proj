<?php
// session_start();
include("User.php");

if(isset($_POST['submit']))
{
    $Username = stripslashes($_POST['username']);
    $Password = stripslashes($_POST['password']);
    $Usertype = stripslashes($_POST['usertype']);
    $validation = validateLogin($Username, $Password, $Usertype);
    if($validation==true)
    {
        echo "Login successful";
    }
    else
    {
        echo "Wrong username/password";
    }
}

?>