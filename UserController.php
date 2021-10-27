<?php
include("User.php");

class UserControl
{
    function addUser($Username, $Password, $Usertype)
    {
        $validation = add($Username, $Password, $Usertype);
        return $validation;
    }
}

?>
