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
        $validation = $Prescription->view($PatientId,$PrescriptionStatus);
        return $validation;
    }

    function searchPrescription($PatientId, $PrescriptionId) # Patient
    {
        $Prescription = new Prescription();
        $validation = $Prescription->search($PatientId, $PrescriptionId);
        return $validation;
    }

    function doctorSearchPrescription($PrescriptionId) # Doctor
    {
        $Prescription = new Prescription();
        $validation = $Prescription->doctorSearchPrescription($PrescriptionId);
        return $validation;
    }

    function updatePrescription($PrescriptionId, $PrescriptionDetails) #Doctor
    {
        $Prescription = new Prescription();
        $validation = $Prescription->update($PrescriptionId, $PrescriptionDetails);
        return $validation;
    }

    function viewPrescriptionRecord($PrescriptionStatus) #Pharmacist
    {
        $Prescription = new Prescription();
        $validation = $Prescription->viewRecord($PrescriptionStatus);
        return $validation;
    }

    function searchPrescriptionRecord($PatientId, $PrescriptionStatus) #Pharmacist
    {
        $Prescription = new Prescription();
        $validation = $Prescription->searchRecord($PatientId, $PrescriptionStatus);
        return $validation;
    }

    function searchPatientPrescription($PrescriptionId, $PrescriptionStatus) #Pharmacist
    {
        $Prescription = new Prescription();
        $validation = $Prescription->searchPrescriptionRecord($PrescriptionId, $PrescriptionStatus);
        return $validation;
    }

    function viewPrescriptionStatus() #Doctor & Pharmacist
    {
        $Prescription = new Prescription();
        $validation = $Prescription->viewPrescriptionStatus();
        return $validation;
    }

    function updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId) #Pharmacist
    {
        $Prescription = new Prescription();
        $validation = $Prescription->updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId);
        return $validation;
    }

    
}

?>
