<?php
include_once('phpqrcode/qrlib.php');
include_once('PHPMailer/PHPMailerAutoload.php');
include_once("TokenController.php");

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

    function send($PatientId, $PrescriptionId)
    {
        $TableName = "patient";
        $conn = mysqli_connect("localhost","root","","csit314");

        $sql = "SELECT UserId FROM $TableName" . " where PatientId ='" . $PatientId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search1. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            $UserIdArray = $qRes->fetch_assoc();
            $UserId = $UserIdArray['UserId'];
            $TableName = "userinfo";
            $sql2 = "SELECT EmailAddress FROM $TableName" . " where UserId ='" . $UserId. "'";
            $qRes2 = @mysqli_query($conn, $sql2);
            if($qRes2 === FALSE)
            {
                echo "<p>* Unable to search2. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
                return $validation = false;
            }
            else
            {
                $EmailAddressArray = $qRes2->fetch_assoc();
                $EmailAddress = $EmailAddressArray['EmailAddress'];
                
                
                $text = "Your Prescription ID is : " . $PrescriptionId; //data to be stored in qr
                $file = "C:/xampp/htdocs/csit314proj/qr.png"; //file path
                $ecc = 'H';
                $pixel_size = 20;
                $frame_size = 5; //other parameters
                QRcode::png($text, $file, $ecc, $pixel_size, $frame_size); // Generates QR Code and Save as PNG

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = '465';
                $mail->isHTML();
                $mail->Username = 'csit314hydrohomies@gmail.com';
                $mail->Password = 'ucDud6Dt';
                $mail->SetFrom('donotreply@mydomain.com', 'Admin');
                $mail->Subject = 'Prescription ID';
                $mail->addEmbeddedImage($file, 'qr', 'phpmailer.png', 'base64', 'image/png');
                $mail->Body = '<img src="'.'cid:qr">';

                $mail->AddAddress($EmailAddress);


                $mail->Send();


                return $validation = true;
            }
        }
    }
}