<?php

include_once("LoginController.php");

class User{
    private $userid;
    private $Username;
    private $Password;
    private $UserType;

    function setUserName($Username){
        $this -> Username = $Username;
    }

    function getUsername(){
        return $this -> Username;
    }

    function setPassword($Password){
        $this -> Password = $Password;
    }

    function getPassword(){
        return $this -> Password;
    }

    function setUserType($UserType){
        $this -> UserType = $UserType;
    }

    function getUserType(){
        return $this -> UserType;
    }

    function validateLogin($Username, $Password, $Usertype)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT UserName, Password FROM $TableName" . " where UserName ='". $Username . "' and Password='" . $Password . "' and Usertype='" . $Usertype . "'";
        $qRes = @mysqli_query($conn, $sql);
        if (mysqli_num_rows($qRes)==0)
        {
            return $validation = false;
        }   
        else
        {
            return $validation = true;
        } 
    }

    function add($Username, $Password, $Usertype)
    {       
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (UserName, Password, UserType)" .
        " VALUES ('$Username', '$Password', '$Usertype')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to insert. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }

    }         

}





?>
