<?php
include_once("Prescription.php");
class PrescriptionControl
{

    function addPrescription($PrescriptionDetails, $PrescriptionStatus, $DoctorId, $PatientId)
    {
        $Prescription = new Prescription();
        $validation = $Prescription->add($PrescriptionDetails, $PrescriptionStatus, $DoctorId, $PatientId);
        return $validation;
    }

    function viewPastPrescription($PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $validation = $Prescription->viewPast($PrescriptionStatus);
        return $validation;
    }

}

?>
