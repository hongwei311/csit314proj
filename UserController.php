<?php
include_once("User.php");
class UserControl
{
    function addUser($Username, $Password, $Usertype)
    {
        $User = new User();
        $validation = $User->add($Username, $Password, $Usertype);
        return $validation;
    }
}

?>
