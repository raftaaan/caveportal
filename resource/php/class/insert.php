<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class insert extends config{

    public $studentID, $firstName, $middleName, $lastName, $degree,$yearsGrad, $diploma, $consent, $certificate, $letterForm;

    function __construct($firstName=null, $middleName=null, $lastName=null, $degree=null, $yearsGrad = null, $diploma=null, $consent=null){

        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->degree = $degree;
        $this->yearsGrad = $yearsGrad;
        $this->diploma = $diploma;
        $this->consent = $consent;

        $ext = strtolower(pathinfo($this->diploma['name'], PATHINFO_EXTENSION));
        $this->diploma['name'] = $this->lastName.".".$ext;
        $storage = "resource/files/diploma_files/";
        $this->certificate = $storage . $this->diploma['name'];
        move_uploaded_file($this->diploma['tmp_name'], $this->certificate);
        
        $form = strtolower(pathinfo($this->consent['name'], PATHINFO_EXTENSION));
        $this->consent['name'] = $this->lastName.".".$form;
        $storage = "resource/files/consent_forms/";
        $this->letterForm = $storage . $this->consent['name'];
        move_uploaded_file($this->consent['tmp_name'], $this->letterForm);
        
        if ($ext == ''){
            $this->certificate = '';
        }

        if ($form == '') {
            $this->letterForm = '';
        }
    }

    public function insertVerification(){
        $config = new config();
        $con= $config->con();
        $sql = "INSERT INTO `client_user`(`firstName`,`middleName`, `lastName`,`degree`,`yearsGrad`,`diploma`,`consent_form`) VALUES ('$this->firstName','$this->middleName','$this->lastName','$this->degree','$this->yearsGrad','$this->certificate', '$this->letterForm')";
        $data = $con->prepare($sql);
        
        if($data->execute()) {
            $message = "Application Registered Successfully";
        } else {
            $message = "Application Registered Unsuccessful";
        }
        echo "<script>alert('$message');</script>";
    }

   

}
