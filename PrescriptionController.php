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

}

?>
