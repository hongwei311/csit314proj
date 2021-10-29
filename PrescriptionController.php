<?php
include_once("Prescription.php");
class UserControl
{
    function addPrescription($PrescriptionDetails, $PrescriptionStatus, $DoctorId)
    {
        $Prescription = new Prescription();
        $validation = $User->add($PrescriptionDetails, $PrescriptionStatus, $DoctorId);
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
