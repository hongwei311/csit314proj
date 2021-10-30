<?php
include_once("User.php");
class LoginControl
{
    function onSubmit($Username, $Password)
    {
        $User = new User();
        $validation = $User->validateLogin($Username, $Password);
        return $validation;
    }
}

?>