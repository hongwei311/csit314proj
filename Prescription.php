<?php

include_once("PrescriptionController.php");

class Prescription{

    private $Patientid;
    private $PrescriptionDetails;

    function setPrescriptionDetails($PrescriptionDetails){
        $this -> PrescriptionDetails = $PrescriptionDetails;
    }

    function getPrescriptionDetails(){
        return $this -> PrescriptionDetails;
    }


    function setPrescriptionStatus($PrescriptionStatus){
        $this -> PrescriptionStatus = $PrescriptionStatus;
    }

    function getPrescriptionStatus(){
        return $this -> PrescriptionStatus;
    }





    function add($PatientId, $PrescriptionDetails, $PrescriptionStatus, $DoctorId)
    {       
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (PatientId, PrescriptionDetails, PrescriptionStatus, DoctorId)" .
        " VALUES ('$PatientId', '$PrescriptionDetails', '$PrescriptionStatus', '$DoctorId')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }

    }     
    
    function viewPast()
    {
        $TableName = "prescription";
        $PrescriptionStatus = 'Collected';
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionStatus ='" . $PrescriptionStatus . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescription = array("","","","");
        }
        else
        {
            $prescriptionInfo=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($prescriptionInfo))
                {
                    $prescriptionInfo=$Row;
                }
                else array_push($prescriptionInfo,$Row);
            }
            
            return $prescriptionInfo;
        }
    }

    function viewNew()
    {
        $TableName = "prescription";
        $PrescriptionStatus = 'Not Collected';
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionStatus ='" . $PrescriptionStatus . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescription = array("","","","");
        }
        else
        {
            $prescriptionInfo=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($prescriptionInfo))
                {
                    $prescriptionInfo=$Row;
                }
                else array_push($prescriptionInfo,$Row);
            }
            
            return $prescriptionInfo;
        }
    }

    function searchPrescription($PrescriptionId)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionId ='" . $PrescriptionId . "'";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionSearched = array("","","","");
        }
        else
        {
            $prescriptionSearched=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($prescriptionSearched))
                {
                    $prescriptionSearched=$Row;
                }
                else array_push($prescriptionSearched,$Row);
            }
            
            return $prescriptionSearched;
        }
    }

    function updatePrescription($PrescriptionId, $PrescriptionDetails)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "UPDATE $TableName 
                SET PrescriptionDetails = '$PrescriptionDetails'
                WHERE PrescriptionId = $PrescriptionId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionUpdate = false;
        }
        else
        {
            // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);
            return $prescriptionUpdate = true;
        }
    }

}





?>