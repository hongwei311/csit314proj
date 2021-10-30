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

    function viewPastPrescription()
    {
        $Prescription = new Prescription();
        $prescriptionInfo = $Prescription->viewPast();
        return $prescriptionInfo;
    }

    function viewNewPrescription()
    {
        $Prescription = new Prescription();
        $prescriptionInfo = $Prescription->viewNew();
        return $prescriptionInfo;
    }

    function searchPrescription($PrescriptionId)
    {
        $Prescription = new Prescription();
        $prescriptionSearched = $Prescription->searchPrescription($PrescriptionId);
        return $prescriptionSearched;
    }

    function updatePrescription($PrescriptionId, $PrescriptionDetails)
    {
        $Prescription = new Prescription();
        $prescriptionUpdate = $Prescription->updatePrescription($PrescriptionId, $PrescriptionDetails);
        return $prescriptionUpdate;
    }

}

?>
