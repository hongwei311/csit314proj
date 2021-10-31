<?php
include_once("UserInfo.php");

class UserInfoController
{
    function addUserInfo($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress)
    {
        $UserInfo = new UserInfo();
        $validation = $UserInfo->add($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress);
        return $validation;
    }

    function searchUserInfo($UserId)
    {
        $UserInfo = new UserInfo();
        $userinformation = $UserInfo->search($UserId);
        return $userinformation;
    }

    function updateUserInfo($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress)
    {
        $UserInfo = new UserInfo();
        $validation = $UserInfo->update($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress);
        return $validation;
    }
	
	function viewUserInfo()
	{
		$UserInfo = new UserInfo();
		$validation = $UserInfo->view();
		return $validation;
	}
}

?>
