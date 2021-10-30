<?php
include_once("User.php");
class UserControl
{
    function addUser($Username, $Password, $UserProfile)
    {
        $User = new User();
        $validation = $User->add($Username, $Password, $UserProfile);
        return $validation;
    }

    function searchUser($UserId)
    {
        $User = new User();
        $userdetails = $User->search($UserId);
        return $userdetails;
    }

    function updateUser($UserId,$Username, $Password, $UserProfile)
    {
        $User = new User();
        $validation = $User->update($UserId,$Username, $Password, $UserProfile);
        return $validation;
    }
	
	function viewUser()
	{
		$User = new User();
		$validation = $User->view();
		return $validation;
	}
}

?>
