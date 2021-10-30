<?php
include_once("Prescription.php");
class PrescriptionControl
{

    function addPrescription($PatientId, $PrescriptionDetails, $PrescriptionStatus, $DoctorId, )
    {
        $Prescription = new Prescription();
        $validation = $Prescription->add($PatientId, $PrescriptionDetails, $PrescriptionStatus, $DoctorId);
        return $validation;
    }

    function viewPrescription($PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $PrescriptionDetails = $Prescription->view($PrescriptionStatus);
        return $PrescriptionDetails;
    }

}

?>
