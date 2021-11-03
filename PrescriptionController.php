<?php
include_once("Prescription.php");
class PrescriptionControl
{

    function addPrescription($PatientId, $PrescriptionDetails, $PrescriptionStatus, $DoctorId)
    {
        $Prescription = new Prescription();
        $validation = $Prescription->add($PatientId, $PrescriptionDetails, $PrescriptionStatus, $DoctorId);
        return $validation;
    }

    function viewPrescription($PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->view($PrescriptionStatus);
        return $prescriptionDetails;
    }

    function searchPrescription($PrescriptionId)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->search($PrescriptionId);
        return $prescriptionDetails;
    }

    function updatePrescription($PrescriptionId, $PrescriptionDetails)
    {
        $Prescription = new Prescription();
        $validation = $Prescription->update($PrescriptionId, $PrescriptionDetails);
        return $validation;
    }

}

?>
