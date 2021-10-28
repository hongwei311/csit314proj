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

    function searchUser($UserId)
    {
        $User = new User();
        $userdetails = $User->search($UserId);
        return $userdetails;
    }

    function updateUser($UserId,$Username, $Password, $Usertype)
    {
        $User = new User();
        $validation = $User->update($UserId,$Username, $Password, $Usertype);
        return $validation;
    }
}

?>
