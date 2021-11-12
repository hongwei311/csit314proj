<?php

class UserProfile{
    private $StringUserProfile;
    private $UserId;
    private $HealthFacility;
    private $Profession;
    private $DoctorYearsOfExperience;
    private $DrugAllergy;
    private $PrescriptionNotification;
    private $PharmacyName;
    private $PharmacyLocation;
    private $PharmacistYearsOfExperience;
	
    function setUserProfile($StringUserProfile){
        $this -> StringUserProfile = $StringUserProfile;
    }

    function getStringUserProfile(){
        return $this -> StringUserProfile;
    }

	function setUserId($UserId){
        $this -> UserId = $UserId;
    }

    function getUserId(){
        return $this -> UserId;
    }
	
    function setHealthFacility($HealthFacility){
        $this -> HealthFacility = $HealthFacility;
    }

    function getHealthFacility(){
        return $this -> HealthFacility;
    }

    function setProfession($Profession){
        $this -> Profession = $Profession;
    }

    function getProfession(){
        return $this -> Profession;
    }

    function setDoctorYearsOfExperience($DoctorYearsOfExperience){
        $this -> DoctorYearsOfExperience = $DoctorYearsOfExperience;
    }

    function getDoctorYearsOfExperience(){
        return $this -> DoctorYearsOfExperience;
    }

    function setDrugAllergy($DrugAllergy){
        $this -> DrugAllergy = $DrugAllergy;
    }

    function getDrugAllergy(){
        return $this -> DrugAllergy;
    }

    function setPrescriptionNotification($PrescriptionNotification){
        $this -> PrescriptionNotification = $PrescriptionNotification;
    }

    function getPrescriptionNotification(){
        return $this -> PrescriptionNotification;
    }

    function setPharmacyName($PharmacyName){
        $this -> PharmacyName = $PharmacyName;
    }

    function getPharmacyName(){
        return $this -> PharmacyName;
    }

    function setPharmacyLocation($PharmacyLocation){
        $this -> PharmacyLocation = $PharmacyLocation;
    }

    function getPharmacyLocation(){
        return $this -> PharmacyLocation;
    }

    function setPharmacistYearsOfExperience($PharmacistYearsOfExperience){
        $this -> PharmacistYearsOfExperience = $PharmacistYearsOfExperience;
    }

    function getPharmacistYearsOfExperience(){
        return $this -> PharmacistYearsOfExperience;
    }
        
    
    function search($StringUserProfile, $UserId)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $StringUserProfile " . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);

        if ($StringUserProfile == "Doctor") {
                $Row = mysqli_fetch_assoc($qRes);
                $userinformation = array($Row["DoctorId"],$Row["UserId"],$Row["HealthFacility"],$Row["Profession"],$Row["YearsOfExperience"]);
                if($Row["UserId"]!=""){
                    return $userinformation;
                }
                else{
                    return $userinformation = false;
                }
            }
        elseif ($StringUserProfile == "patient") {
                $Row = mysqli_fetch_assoc($qRes);
                $userinformation = array($Row["PatientId"],$Row["UserId"],$Row["DrugAllergy"],$Row["PrescriptionNotification"]);
                if($Row["UserId"]!=""){
                    return $userinformation;
                }
                else{
                    return $userinformation = false;
                }
            }
        elseif ($StringUserProfile == "pharmacist") {
                $Row = mysqli_fetch_assoc($qRes);
                $userinformation = array($Row["PharmacistId"],$Row["UserId"],$Row["PharmacyName"],$Row["PharmacyLocation"],$Row["YearsOfExperience"]);
                if($Row["UserId"]!=""){
                    return $userinformation;
                }
                else{
                    return $userinformation = false;
                }
        }
        else {
                echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
                return $userinformation = array("","","","");
        }
    
    }

    function updateDoctorProfile($UserId, $HealthFacility, $Profession, $DoctorYearsOfExperience)
    {
        $TableName = "doctor";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "UPDATE $TableName 
                SET HealthFacility = '$HealthFacility', Profession = '$Profession', YearsOfExperience = '$DoctorYearsOfExperience'
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $updateinformation = false;
        }
        else
        {
            return $updateinformation = true;
        }
    }

    function updatePatientProfile($UserId, $DrugAllergy, $PrescriptionNotification)
    {
        $TableName = "patient";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "UPDATE $TableName 
                SET DrugAllergy = '$DrugAllergy', PrescriptionNotification = '$PrescriptionNotification'
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $updateinformation = false;
        }
        else
        {
            return $updateinformation = true;
        }
    }

    function updatePharmacistProfile($UserId, $PharmacyName, $PharmacyLocation, $PharmacistYearsOfExperience)
    {
        $TableName = "pharmacist";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "UPDATE $TableName 
                SET PharmacyName = '$PharmacyName', PharmacyLocation = '$PharmacyLocation', YearsOfExperience = '$PharmacistYearsOfExperience'
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $updateinformation = false;
        }
        else
        {
            return $updateinformation = true;
        }
    }
 

}



?>
