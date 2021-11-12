<?php
include_once("UserInfo.php");

class UserInfoController
{
    function addUserInfo($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress)
    {
        $UserInfo = new UserInfo();
        $validation = $UserInfo->add($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress);
        return $validation;
    }

    function searchUserInfo($UserId)
    {
        $UserInfo = new UserInfo();
        $validation = $UserInfo->search($UserId);
        return $validation;
    }

    function updateUserInfo($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress)
    {
        $UserInfo = new UserInfo();
        $validation = $UserInfo->update($UserId,$FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress);
        return $validation;
    }
	
	function viewUserInfo()
	{
		$UserInfo = new UserInfo();
		$validation = $UserInfo->view();
		return $validation;
	}

    function generateUserInfo($UserId, $FirstName, $LastName, $BirthDate, $GenderCode)
	{
		$UserInfo = new UserInfo();
		$validation = $UserInfo->generate($UserId, $FirstName, $LastName, $BirthDate, $GenderCode);
		return $validation;
	}
}

?>
