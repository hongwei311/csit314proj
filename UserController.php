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
        $validation = $User->search($UserId);
        return $validation;
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

	function retrieveUserProfileID($UserId, $UserProfile)
	{
		$User = new User();
		$validation = $User->retrieveUserProfileID($UserId,$UserProfile);
		return $validation;
	}
	
    function viewFullAdmin()
	{
		$User = new User();
		$validation = $User->viewFullAdminDetails();
		return $validation;
	}

	function viewFullDoctor()
	{
		$User = new User();
		$validation = $User->viewFullDoctorDetails();
		return $validation;
	}

    function viewFullPatient()
	{
		$User = new User();
		$validation = $User->viewFullPatientDetails();
		return $validation;
	}
    
    function viewFullPharmacist()
	{
		$User = new User();
		$validation = $User->viewFullPharmacistDetails();
		return $validation;
	}

}

?>
