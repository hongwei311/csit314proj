<?php

class UserProfile{
    private $UserProfile;
    private $UserId;
    private $HealthFacility;
    private $Profession;
    private $DoctorYearsOfExperience;
    private $DrugAllergy;
    private $PrescriptionNotification;
    private $PharmacyName;
    private $PharmacyLocation;
    private $PharmacistYearsOfExperience;
	
    function setUserProfile($UserProfile){
        $this -> UserProfile = $UserProfile;
    }

    function getUserProfile(){
        return $this -> UserProfile;
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
        
    
    function search($UserProfile, $UserId)
    {
        $TableName = "doctor";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $UserProfile " . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userinformation = array("","","","");
        }
        elseif($UserProfile === 'doctor')
        {
            $Row = mysqli_fetch_assoc($qRes);
            $userinformation = array($Row["DoctorId"],$Row["UserId"],$Row["HealthFacility"],$Row["Profession"],$Row["YearsOfExperience"]);
            if($Row["UserId"]!=""){
                return $userinformation;
            }
            else{
                return $userinformation = false;
            }
        }
    }

    function update($UserId, $Username, $Password, $UserProfile)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $Password_Hash = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "UPDATE $TableName 
                SET UserName = '$Username', Password = '$Password_Hash', UserProfile = '$UserProfile' 
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
	
	function view()
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            //create array
            $userdetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($userdetails))
                {
                    //add in the first array row
                    array_push($userdetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($userdetails,$Row);
            }
            
            return $userdetails;
        }
	}
 

}



?>
