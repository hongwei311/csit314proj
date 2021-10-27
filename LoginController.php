<?php
include_once("User.php");
class LoginControl
{
    function onSubmit($Username, $Password, $Usertype)
    {
        $User = new User();
        $validation = $User->validateLogin($Username, $Password, $Usertype);
        return $validation;
    }
}

?>