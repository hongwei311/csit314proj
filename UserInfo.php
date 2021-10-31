<?php

class UserInfo{
    private $UserId;
    private $FirstName;
    private $LastName;
    private $BirthDate;
    private $GenderCode;
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
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userinformation = array("","","","","","");
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $userinformation = array($Row["UserId"],$Row["FirstName"],$Row["LastName"],$Row["GenderCode"],$Row["BirthDate"],$Row["EmailAddress"]);
            return $userinformation;
        }
    }

    function add($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress)
    {       
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (FirstName, LastName, BirthDate, GenderCode, EmailAddress)" .
        " VALUES ('$FirstName', '$LastName', '$BirthDate', '$GenderCode', '$EmailAddress')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return false;
        }
        else
        {
            return true;
        }
    }   

    function update($FirstName, $LastName, $BirthDate, $GenderCode, $EmailAddress)
    {
        $TableName = "userinfo";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "UPDATE $TableName 
                SET FirstName = '$FirstName', LastName = '$LastName', BirthDate = '$BirthDate', GenderCode='$GenderCode', EmailAddress = '$EmailAddress'
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return false;
        }
        else
        {
            return true;
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
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userinformation = array("","","","","","");
        }
        else
        {
            $userinformation=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($userinformation))
                {
                    $userinformation=$Row;
                }
                else array_push($userinformation,$Row);
            }
            return $userinformation;
        }
	}
}



?>
