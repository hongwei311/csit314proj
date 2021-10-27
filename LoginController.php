<?php
include("User.php");
class LoginController
{
    public $validationcheck;

    function setValidationcheck($validationcheck)
    {
        $this -> validationcheck = $validationcheck;
    }

    function getValidationcheck()
    {
        return $this -> validationcheck;
    }

    function onSubmit($Username, $Password, $Usertype)
    {
        $validation = validateLogin($Username, $Password, $Usertype);
        return $validation;
    }
}

?>