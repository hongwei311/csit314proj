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

    function searchPrescription($PatientId, $PrescriptionId) # Patient
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->search($PatientId, $PrescriptionId);
        return $prescriptionDetails;
    }

    function doctorSearchPrescription($PrescriptionId) # Doctor
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->doctorSearchPrescription($PrescriptionId);
        return $prescriptionDetails;
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
        $prescriptionDetails = $Prescription->viewRecord($PrescriptionStatus);
        return $prescriptionDetails;
    }

    function searchPrescriptionRecord($PatientId, $PrescriptionStatus) #Pharmacist
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->searchRecord($PatientId, $PrescriptionStatus);
        return $prescriptionDetails;
    }

    function searchPatientPrescription($PrescriptionId, $PrescriptionStatus) #Pharmacist
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->searchPrescriptionRecord($PrescriptionId, $PrescriptionStatus);
        return $prescriptionDetails;
    }

    function viewPrescriptionStatus() #Doctor & Pharmacist
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->viewPrescriptionStatus();
        return $prescriptionDetails;
    }

    function updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId) #Pharmacist
    {
        $Prescription = new Prescription();
        $prescriptionDetails = $Prescription->updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId);
        return $prescriptionDetails;
    }

    
}

?>
