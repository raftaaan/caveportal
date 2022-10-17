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
        $ext = pathinfo($this->diploma['name'], PATHINFO_EXTENSION);
        $this->consent = $consent;
        $form = pathinfo($this->consent['name'], PATHINFO_EXTENSION);

        
        if($this->firstName == ""){
            alertMess("Entering first name is required!");
        }else if(!ctype_alpha(str_replace(' ', '', $this->firstName))){
            alertMess("Entered first name is not applicable!");
        }else if($this->middleName == ""){
            alertMess("Entering middle name is required!");
        }else if(!ctype_alpha(str_replace(' ', '', $this->middleName))){
            alertMess("Entered middle name is not applicable!");
        }else if($this->lastName == ""){
            alertMess("Entering last name is required!");
        }else if(!ctype_alpha(str_replace(' ', '', $this->lastName))){
            alertMess("Entered last name is not applicable!");
        }else if($ext !== 'pdf' && $ext !== ''){
            alertMess("Diploma must be a pdf file!");  
        }else if($form !== 'pdf' && $form !== ''){
            alertMess("Consent Letter must be a pdf file!");  
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
        }
        
    }
    public function alertMess($message){
        echo "<script>alert('$message');</script>";
    }
    public function insertVerification(){
        $config = new config();
        $con= $config->con();
        $sql = "INSERT INTO `tbl_client_user`(`firstName`,`middleName`, `lastName`,`degree`,`yearsGrad`,`diploma`,`consentForm`) VALUES ('$this->firstName','$this->middleName','$this->lastName','$this->degree','$this->yearsGrad','$this->certificate', '$this->letterForm')";
        $data = $con->prepare($sql);
        
        if($data->execute()) {
            alertMess("Application Registered Successfully");
        } else {
            alertMess("Application Registered Unsuccessful");
        }
    }

}
