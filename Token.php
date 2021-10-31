<?php

include_once("PrescriptionController.php");

class Token{
    function add($PrescriptionId)
    {       
        $TableName = "token";
        $TokenCode = bin2hex(random_bytes(10));
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (PrescriptionId, TokenCode)" .
        " VALUES ('$PrescriptionId', '$TokenCode')";
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
}