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

    function viewPrescription($PatientId,$PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->view($PatientId,$PrescriptionStatus);
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

    function viewPrescriptionRecord($PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->viewRecord($PrescriptionStatus);
        return $prescriptionDetails;
    }

    function searchPrescriptionRecord($PatientId, $PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->searchRecord($PatientId, $PrescriptionStatus);
        return $prescriptionDetails;
    }

    function searchPatientPrescription($PrescriptionId, $PrescriptionStatus)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->searchPrescriptionRecord($PrescriptionId, $PrescriptionStatus);
        return $prescriptionDetails;
    }

    function viewPrescriptionStatus()
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->viewPrescriptionStatus();
        return $prescriptionDetails;
    }

    function updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId)
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId);
        return $prescriptionDetails;
    }

    
}

?>
