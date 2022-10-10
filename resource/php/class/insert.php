<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class insert extends config{

    public $studentID, $firstName, $middleName, $lastName, $degree, $diploma;

    function __construct( $studentID=null, $firstName=null, $middleName=null, $lastName=null, $degree=null, $diploma=null){

        $this->studentID = $studentID;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->degree = $degree;
        $this->diploma = $diploma;
    }

    public function insertVerification(){
        $config = new config();
        $con= $config->con();
        $sql="INSERT INTO `tbl_client_user`(`firstName`, `middleName`, `lastName`, `studentID`, `degree`,`diploma`) VALUES ('$this->firstName','$this->middleName','$this->lastName','$this->studentID','$this->degree','$this->diploma')";
        $data = $con->prepare($sql);
        $data->execute();
        
    }

   

}
