<?php
include_once("UserProfile.php");

class UserProfileController
{
    
    function searchUserProfile($StringUserProfile, $UserId)
    {
        $UserProfile = new UserProfile();
        $validation = $UserProfile->search($StringUserProfile, $UserId);
        return $validation;
    }

    function updateDoctorProfile($UserId, $HealthFacility, $Profession, $DoctorYearsOfExperience)
    {
        $UserProfile = new UserProfile();
        $updateinformation = $UserProfile->updateDoctorProfile($UserId, $HealthFacility, $Profession, $DoctorYearsOfExperience);
        return $updateinformation;
    }

    function updatePatientProfile($UserId, $DrugAllergy, $PrescriptionNotification)
    {
        $UserProfile = new UserProfile();
        $updateinformation = $UserProfile->updatePatientProfile($UserId, $DrugAllergy, $PrescriptionNotification);
        return $updateinformation;
    }

    function updatePharmacistProfile($UserId, $PharmacyName, $PharmacyLocation, $PharmacistYearsOfExperience)
    {
        $UserProfile = new UserProfile();
        $updateinformation = $UserProfile->updatePharmacistProfile($UserId, $PharmacyName, $PharmacyLocation, $PharmacistYearsOfExperience);
        return $updateinformation;
    }
	
	function viewUserProfile()
	{
		$UserProfile = new UserProfile();
		$userinformation = $UserProfile->view();
		return $userinformation;
	}

}

?>
