<?php
include_once("UserProfile.php");

class UserProfileController
{
    
    function searchUserProfile($UserProfile, $UserId)
    {
        $UserProfile = new UserProfile();
        $userinformation = $UserProfile->search($UserProfile, $UserId);
        return $userinformation;
    }

    function updateUserProfile($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress)
    {
        $UserProfile = new UserProfile();
        $userinformation = $UserProfile->update($UserId,$FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress);
        return $userinformation;
    }
	
	function viewUserProfile()
	{
		$UserProfile = new UserProfile();
		$userinformation = $UserProfile->view();
		return $userinformation;
	}

}

?>
