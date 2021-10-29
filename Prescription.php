<?php

include_once("PrescriptionController.php");

class User{
    private $patientid;
    private $prescriptionDetails;

    function setUserName($Username){
        $this -> Username = $Username;
    }

    function getUsername(){
        return $this -> Username;
    }




    function addPrescription($PrescriptionDetails, $PrescriptionStatus, $DoctorId, $PatientId)
    {       
        $TableName = "prescription";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (PrescriptionDetails, PrescriptionStatus, DoctorId, PatientId)" .
        " VALUES ('$PrescriptionDetails', '$PrescriptionStatus', '$DoctorId', '$PatientId')";
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
    
    function search($UserId)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "SELECT * FROM $TableName" . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $userdetails = array($Row["UserId"],$Row["UserName"],$Row["Password"],$Row["UserType"]);
            return $userdetails;
        }
    }

    function update($UserId, $Username, $Password, $Usertype)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "UPDATE $TableName 
                SET UserName = '$Username', Password = '$Password', Usertype = '$Usertype' 
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);
            return $validation = true;
        }
    }

}





?>