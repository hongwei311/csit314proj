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
		$userdetails = $User->view();
		return $userdetails;
	}

	function retrieveUserProfileID($UserId, $UserProfile)
	{
		$User = new User();
		$userdetails = $User->retrieveUserProfileID($UserId,$UserProfile);
		return $userdetails;
	}
	
    function viewFullAdmin()
	{
		$User = new User();
		$userdetails = $User->viewFullAdminDetails();
		return $userdetails;
	}

	function viewFullDoctor()
	{
		$User = new User();
		$userdetails = $User->viewFullDoctorDetails();
		return $userdetails;
	}

    function viewFullPatient()
	{
		$User = new User();
		$userdetails = $User->viewFullPatientDetails();
		return $userdetails;
	}
    
    function viewFullPharmacist()
	{
		$User = new User();
		$userdetails = $User->viewFullPharmacistDetails();
		return $userdetails;
	}

}

?>
