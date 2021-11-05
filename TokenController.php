<?php
include_once("Token.php");
class TokenControl
{

    function generateToken($PrescriptionId)
    {
        $Token = new Token();
        $validation = $Token->add($PrescriptionId);
        return $validation;
    }

    function sendToken($PatientId,$PrescriptionId)
    {
        $Token = new Token();
        $validation = $Token->send($PatientId,$PrescriptionId);
        return $validation;
    }
}

?>