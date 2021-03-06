<?php

class UserInfo{
    private $UserId;
    private $FirstName;
    private $LastName;
    private $BirthDate;
    private $GenderCode;
    private $PhoneNumber;
    private $EmailAddress;
	
	function setUserId($UserId){
        $this -> UserId = $UserId;
    }

    function getUserId(){
        return $this -> UserId;
    }
	
    function setFirstName($FirstName){
        $this -> FirstName = $FirstName;
    }

    function getUsername(){
        return $this -> Username;
    }

    function setLastName($LastName){
        $this -> LastName = $LastName;
    }

    function getLastName(){
        return $this -> LastName;
    }

    function setBirthDate($BirthDate){
        $this -> BirthDate = $BirthDate;
    }

    function getBirthDate(){
        return $this -> BirthDate;
    }

    function setGenderCode($GenderCode){
        $this -> GenderCode = $GenderCode;
    }

    function getGenderCode(){
        return $this -> GenderCode;
    }

    function setPhoneNumber($PhoneNumber){
        $this -> PhoneNumber = $PhoneNumber;
    }

    function getPhoneNumber(){
        return $this -> PhoneNumber;
    }

    function setEmailAddress($EmailAddress){
        $this -> EmailAddress = $EmailAddress;
    }

    function getEmailAddress(){
        return $this -> EmailAddress;
    }

    function search($UserId)
    {
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "SELECT * FROM $TableName" . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            ///echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation=false;
        }
        else
        {
            unset($_SESSION['validation']);
            $Row = mysqli_fetch_assoc($qRes);
            if(isset($Row))
            {
                $_SESSION['validation'] = array($Row["UserId"],$Row["FirstName"],$Row["LastName"],$Row["BirthDate"],$Row["GenderCode"],$Row["PhoneNumber"],$Row["EmailAddress"]);
                if($Row["UserId"]!=""){
                    return $validation = true;
                }
            }
            else{
                return $validation = false;
            }
        }
    }

    function add($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress)
    {       
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (UserId, FirstName, LastName, BirthDate, GenderCode, PhoneNumber, EmailAddress)" .
        " VALUES ('$UserId', '$FirstName', '$LastName', '$BirthDate', '$GenderCode', '$PhoneNumber', '$EmailAddress')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            //$_SESSION['errmsg'] = "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }
    }   

    function update($UserId, $FirstName, $LastName, $BirthDate, $GenderCode, $PhoneNumber, $EmailAddress)
    {
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "UPDATE $TableName 
                SET FirstName = '$FirstName', LastName = '$LastName', BirthDate = '$BirthDate', GenderCode='$GenderCode', PhoneNumber='$PhoneNumber', EmailAddress = '$EmailAddress'
                WHERE UserId = $UserId";
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
	
	function view()
    {
        $TableName = "userinfo";
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
    
            return $validation=true;
        }
	}

    function generate($UserId, $FirstName, $LastName, $BirthDate, $GenderCode)
    {       
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "UPDATE $TableName 
        SET FirstName = '$FirstName', LastName = '$LastName', BirthDate = '$BirthDate', GenderCode='$GenderCode'
        WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            // $_SESSION['errmsg'] = "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }
    }  

}



?>
