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
}

?>