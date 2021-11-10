<?php

include_once("PrescriptionController.php");

class Prescription{

    private $Patientid;
    private $Prescriptionid;
    private $PrescriptionDetails;
    private $PrescriptionStatus;

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
    
    function view($PatientId, $PrescriptionStatus)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " WHERE PrescriptionStatus ='" . $PrescriptionStatus . "' 
        AND PatientId = '$PatientId'
        ";
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

    function search($PatientId, $PrescriptionId)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PatientId ='" . $PatientId . "'
        AND PrescriptionId = '$PrescriptionId'
        ";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionDetails = array("","","","");
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $prescriptionDetails = array($Row["PrescriptionId"],$Row["PrescriptionDetails"],$Row["PrescriptionStatus"],$Row["DoctorId"],
            $Row["PatientId"],$Row["PharmacistId"],$Row["CreatedDateTime"],$Row["DispensedDateTime"]);
            if($Row["PrescriptionId"]!=""){
                return $prescriptionDetails;
            }
            else{
                return $prescriptionDetails = false;
            }
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

    function searchRecord($PatientId, $PrescriptionStatus)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PatientId ='" . $PatientId . "'
        AND PrescriptionStatus = '$PrescriptionStatus'
        ";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionDetails = array("","","","");
        }
        else
        {
            //create array
            $prescriptionDetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($prescriptionDetails))
                {
                    //add in the first array row
                    array_push($prescriptionDetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($prescriptionDetails,$Row);
            }
            
            return $prescriptionDetails;
        }
    }

    function viewRecord($PrescriptionStatus)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " WHERE PrescriptionStatus ='" . $PrescriptionStatus . "' ";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionDetails = array("","","","");
        }
        else
        {
            //create array
            $prescriptionDetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($prescriptionDetails))
                {
                    //add in the first array row
                    array_push($prescriptionDetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($prescriptionDetails,$Row);
            }
            
            return $prescriptionDetails;
        }
	}

    function viewPrescriptionStatus()
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName";
        
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionDetails = array("","","","");
        }
        else
        {
            //create array
            $prescriptionDetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($prescriptionDetails))
                {
                    //add in the first array row
                    array_push($prescriptionDetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($prescriptionDetails,$Row);
            }
            
            return $prescriptionDetails;
        }

    }

    function searchPrescriptionRecord($PrescriptionId, $PrescriptionStatus)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionId ='" . $PrescriptionId . "'
        AND PrescriptionStatus = '$PrescriptionStatus'
        ";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $prescriptionDetails = array("","","","");
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $prescriptionDetails = array($Row["PrescriptionId"],$Row["PrescriptionDetails"],$Row["PrescriptionStatus"],$Row["DoctorId"],
            $Row["PatientId"],$Row["PharmacistId"],$Row["CreatedDateTime"],$Row["DispensedDateTime"]);
            if($Row["PrescriptionId"]!=""){
                return $prescriptionDetails;
            }
            else{
                return $prescriptionDetails = false;
            }
        }
    }

}





?>