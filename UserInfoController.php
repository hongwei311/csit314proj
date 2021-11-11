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
        $userinformation = $UserInfo->search($UserId);
        return $userinformation;
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
		$userinformation = $UserInfo->view();
		return $userinformation;
	}

    function generateUserInfo($UserId, $FirstName, $LastName, $BirthDate, $GenderCode)
	{
		$UserInfo = new UserInfo();
		$userinformation = $UserInfo->generate($UserId, $FirstName, $LastName, $BirthDate, $GenderCode);
		return $userinformation;
	}
}

?>
