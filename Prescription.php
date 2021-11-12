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
            // echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            unset($_SESSION['validation']);
            $_SESSION['validation']=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($_SESSION['validation']))
                {
                    array_push($_SESSION['validation'],$Row);
                }
                else array_push($_SESSION['validation'],$Row);
                
            }
            return $validation = true;
        }
    }

    function search($PatientId, $PrescriptionId)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionId ='" . $PrescriptionId . "'
        AND PatientId = '$PatientId'
        ";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            unset($_SESSION['validation']);
            $Row = mysqli_fetch_assoc($qRes);
            if(isset($Row))
            {
                $_SESSION['validation'] = array($Row["PrescriptionId"],$Row["PrescriptionDetails"],$Row["PrescriptionStatus"],$Row["DoctorId"],
                $Row["PatientId"],$Row["PharmacistId"],$Row["CreatedDateTime"],$Row["DispensedDateTime"]);
                if($Row["PrescriptionId"]!=""){
                    return $validation = true;
                }
            }
            else
            {
                return $validation = false;
            }
        }

    }

    function doctorSearchPrescription($PrescriptionId)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where PrescriptionId ='" . $PrescriptionId . "'
        ";
        

        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            unset($_SESSION['validation']);
            //create array
            $_SESSION['validation']=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                
                //check if array is empty
                if(empty($_SESSION['validation']))
                {
                    //add in the first array row
                    array_push($_SESSION['validation'],$Row);
                }
                //if array is not empty push new row into last position
                else array_push($_SESSION['validation'],$Row);
                return $validation = true;
            }
            return $validation = false;
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
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);
            return $validation = true;
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
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            //create array
            $_SESSION['validation']=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($_SESSION['validation']))
                {
                    //add in the first array row
                    array_push($_SESSION['validation'],$Row);
                }
                //if array is not empty push new row into last position
                else array_push($_SESSION['validation'],$Row);
                
            }
            return $validation = true;
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
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            unset($_SESSION['validation']);
            //create array
            $_SESSION['validation']=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($_SESSION['validation']))
                {
                    //add in the first array row
                    array_push($_SESSION['validation'],$Row);
                }
                //if array is not empty push new row into last position
                else array_push($_SESSION['validation'],$Row);
                
            }
            return $validation = true;
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
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            unset($_SESSION['validation']);
            //create array
            $_SESSION['validation']=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($_SESSION['validation']))
                {
                    //add in the first array row
                    array_push($_SESSION['validation'],$Row);
                }
                //if array is not empty push new row into last position
                else array_push($_SESSION['validation'],$Row);
                
            }
            
            return $validation = true;
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
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            
            $Row = mysqli_fetch_assoc($qRes);
            if(isset($Row)){
            $_SESSION['validation'] = array($Row["PrescriptionId"],$Row["PrescriptionDetails"],$Row["PrescriptionStatus"],$Row["DoctorId"],
            $Row["PatientId"],$Row["PharmacistId"],$Row["CreatedDateTime"],$Row["DispensedDateTime"]);
            if($Row["PrescriptionId"]!=""){
                return $validation = true;
            }}
            else{
                return $validation = false;
            }
        }
    }

    function updatePrescriptionStatus($PrescriptionId, $PrescriptionStatus, $PharmacistId)
    {
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "UPDATE $TableName 
                SET PrescriptionStatus = '$PrescriptionStatus', PharmacistId = '$PharmacistId', DispensedDateTime = CURRENT_TIMESTAMP 
                WHERE PrescriptionId = $PrescriptionId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            //echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }
    }

}





?>