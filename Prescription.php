<?php

include_once("PrescriptionController.php");

class Prescription{

    private $Patientid;
    private $Prescriptionid;
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

    function setPrescriptionId($PrescriptionId){
        $this -> PrescriptionId = $PrescriptionId;
    }

    function getPrescriptionId(){
        return $this -> PrescriptionId;
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
            
            //echo "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }

    }     
    
    function view($PrescriptionStatus)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionStatus ='" . $PrescriptionStatus . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptiondetails = array("","","","");
        }
        else
        {
            $prescriptionDetails=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($prescriptionDetails))
                {
                    array_push($prescriptionDetails,$Row);
                }
                else array_push($prescriptionDetails,$Row);
            }
            return $prescriptionDetails;
        }
    }

    function search($PrescriptionId)
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
                    array_push($prescriptionSearched,$Row);
                }
                else array_push($prescriptionSearched,$Row);
            }
            
            return $prescriptionSearched;
        }
    }

    function update($PrescriptionId, $PrescriptionDetails)
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