<?php
include_once('User.php');
include_once('Prescription.php');

class Sprint_3Test extends \PHPUnit\Framework\TestCase {
    public function testLoginPositive(){
        $User = new User;

        $User->setUsername("test");
        $User->setPassword("test");

        $result = $User->validateLogin($User->getUsername(), $User->getPassword());

        $this->assertEquals(empty($result), false); //If result is not empty, means username and password is valid
    }

    public function testLoginNegative(){
        $User = new User;

        $User->setUsername("");
        $User->setPassword("");

        $result = $User->validateLogin($User->getUsername(), $User->getPassword());

        $this->assertEquals(empty($result), true); //If result is empty, means username and password is invalid
    }

    public function testViewCurrentPrescriptionPostive(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionStatus("Not Collected");

        $result = $Prescription->view($Prescription->getPrescriptionStatus());

        $this->assertEquals(empty($result), false); // If result is not empty, means prescription is found 
    }

    public function testViewCurrentPrescriptionNegative(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionStatus("");

        $result = $Prescription->view($Prescription->getPrescriptionStatus());

        $this->assertEquals(empty($result), true); // If result is empty, means prescription is not found 
    }

    public function testViewPastPrescriptionPostive(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionStatus("Collected");

        $result = $Prescription->view($Prescription->getPrescriptionStatus());

        $this->assertEquals(empty($result), false); // If result is not empty, means prescription is found 
    }

    public function testViewPastPrescriptionNegative(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionStatus("");

        $result = $Prescription->view($Prescription->getPrescriptionStatus());

        $this->assertEquals(empty($result), true); // If result is empty, means prescription is not found  
    }

    public function testSearchPastPrescriptionPostive(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionId("7");

        $result = $Prescription->search($Prescription->getPrescriptionId());

        $this->assertEquals(empty($result), false); // If result is not empty, means prescription is found 
    }

    public function testSearchPastPrescriptionNegative(){

        $Prescription = new Prescription;

        $Prescription->setPrescriptionId("");

        $result = $Prescription->search($Prescription->getPrescriptionId());

        $this->assertEquals(empty($result), true); // If result is empty, means prescription is not found 
    }
}