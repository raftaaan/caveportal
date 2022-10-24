<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';


class insert extends config{
    

    public  $firstName, $middleName, $lastName, $degree, $yearsGrad, $country, $diploma, $consent, $certificate, $letterForm;

    function __construct($firstName=null, $middleName=null, $lastName=null, $degree=null, $yearsGrad=null,  $country=null, $diploma=null, $consent=null){
        
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->degree = $degree;
        $this->yearsGrad = $yearsGrad;
        $this->country = $country;
        $this->diploma = $diploma;
        $ext = pathinfo($this->diploma['name'], PATHINFO_EXTENSION);
        $this->consent = $consent;
        $form = pathinfo($this->consent['name'], PATHINFO_EXTENSION);
        
   

        if($this->firstName == ""){
            $message = "First Name is required!";
            echo "<script>alert('$message');</script>";
        }else if(!ctype_alpha(str_replace(' ', '', $this->firstName))){
            $message = "First Name is not applicable!";
            echo "<script>alert('$message');</script>";
        }else if(ctype_digit(str_replace(' ', '', $this->middleName))){
            $message = "Middle Name is not applicable!";
            echo "<script>alert('$message');</script>";
        }else if($this->lastName == ""){
            $message = "Last Name is required!";
            echo "<script>alert('$message');</script>";
        }else if(!ctype_alpha(str_replace(' ', '', $this->lastName))){
            $message = "Last Name is not applicable!";
            echo "<script>alert('$message');</script>";
        }else if(empty($this->degree)){
            $message = "Please select the course the alumna/alumnus graduated.";
            echo "<script>alert('$message');</script>";
        }else if(empty($this->yearsGrad)){
            $message = "Please select the year the alumna/alumnus graduated.";
            echo "<script>alert('$message');</script>";
        }else if(empty($this->country)){
            $message = "Please select the Country the alumna/alumnus is applying.";
            echo "<script>alert('$message');</script>";
        }else if($ext !== "pdf" || $ext == ""){
            $message = "Please upload the diploma of the alumna/alumnus.";  
            echo "<script>alert('$message');</script>";
        }else if($form !== "pdf" || $form == ""){
            $message = "Must upload a pdf file!";  
            echo "<script>alert('$message');</script>";
        }else{
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
            $this->insertVerification();

        }
    }

    public function insertVerification(){
        $user = new user();
        $agentID = $user->data()->id;
        $config = new config();
        $con= $config->con();
        $sql = "INSERT INTO `tbl_client_user`(`agentID`, `firstName`,`middleName`, `lastName`,`degree`,`yearsGrad`,`country`,`diploma`,`consentForm`) VALUES ('$agentID','$this->firstName','$this->middleName','$this->lastName','$this->degree','$this->yearsGrad','$this->country','$this->certificate', '$this->letterForm')";
        $data = $con->prepare($sql);
        if($data->execute()) {
            $message = "Application Registered Successfully";
            echo "<script>alert('$message');location.href='/caveportal/clientdash.php';</script>";
        } else {
           
            echo "<script>alert('$message');</script>";
            
        }
    }
}


