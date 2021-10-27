<?php
include("User.php");
class LoginControl
{
    function onSubmit($Username, $Password, $Usertype)
    {
        $validation = validateLogin($Username, $Password, $Usertype);
        return $validation;
    }
}

?>