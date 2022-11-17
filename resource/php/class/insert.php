<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';
<<<<<<< Updated upstream
=======
$view = new view(); 
>>>>>>> Stashed changes

class insert extends config{
    

<<<<<<< Updated upstream
    public $studentID, $firstName, $middleName, $lastName, $degree, $diploma;

    function __construct( $studentID=null, $firstName=null, $middleName=null, $lastName=null, $degree=null, $diploma=null){

        $this->studentID = $studentID;
=======
    public  $firstName, $middleName, $lastName, $campus, $degree, $yearsGrad, $country, $diploma, $consent, $certificate, $letterForm;

    function __construct($firstName=null, $middleName=null, $lastName=null, $campus=null, $degree=null, $yearsGrad=null,  $country=null, $diploma=null, $consent=null){
        
>>>>>>> Stashed changes
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->campus = $campus;
        $this->degree = $degree;
<<<<<<< Updated upstream
        $this->diploma = $diploma;
=======
        $this->yearsGrad = $yearsGrad;
        $this->country = $country;
        $this->diploma = $diploma;
        $ext = pathinfo($this->diploma['name'], PATHINFO_EXTENSION);
        $this->consent = $consent;
        $form = pathinfo($this->consent['name'], PATHINFO_EXTENSION);
        
   

        if($this->firstName == ""){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'First Name must not be blank!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(!ctype_alpha(str_replace(' ', '', $this->firstName))){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'First Name is not applicable!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if($this->middleName == '') {
            $this->insertVerification(); 
        }
        else if(!ctype_alpha(str_replace('', '', $this->middleName))){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Middle Name is not applicable!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }
        else if($this->lastName == ""){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Last Name must not be blank!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(!ctype_alpha(str_replace(' ', '', $this->lastName))){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Last Name is not applicable!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(empty($this->campus)){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select the campus the alumna/alumnus graduated.',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(empty($this->degree)){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select the course the alumna/alumnus graduated.',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(empty($this->yearsGrad)){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select the year the alumna/alumnus graduated.',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if(empty($this->country)){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select the country the alumna/alumnus graduated.',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if($ext !== "pdf" || $ext == ""){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Must Upload a pdf file, only pdf file is accepted!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else if($form !== "pdf" || $form == ""){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Must Upload a pdf file, only pdf file is accepted!',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else{
            if(in_array($this->campus)) {
                $this->insertVerification();
            }
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
>>>>>>> Stashed changes
    }

    public function insertVerification(){
        $config = new config();
        $con= $config->con();
<<<<<<< Updated upstream
        $sql="INSERT INTO `tbl_client_user`(`firstName`, `middleName`, `lastName`, `studentID`, `degree`,`diploma`) VALUES ('$this->firstName','$this->middleName','$this->lastName','$this->studentID','$this->degree','$this->diploma')";
        $data = $con->prepare($sql);
        $data->execute();
        
    }

   
=======
        $sql = "INSERT INTO `tbl_client_user`(`agentID`, `firstName`,`middleName`, `lastName`,`campus`,`degree`,`yearsGrad`,`country`,`diploma`,`consentForm`) VALUES ('$agentID','$this->firstName','$this->middleName','$this->lastName','$this->campus','$this->degree','$this->yearsGrad','$this->country','$this->certificate', '$this->letterForm')";
        $data = $con->prepare($sql);
        if($data->execute()) {
            echo "<script type='text/javascript'>
            swal.fire({
                icon: 'success',
                text: 'Application Registered Successfully',
                showConfirmButton: false,
                timerProgressBar: true,
                timer: 2000
              }).then(function (result) {
                if (true) {
                  window.location = 'clientdash.php';
                }
              })
            </script>";
        } else {
            echo "<script type='text/javascript'>
            swal.fire({
                icon: 'Error',
                text: 'Application Registered Unsuccessfully',
                type: 'success',
                showConfirmButton: false,
                timerProgressBar: true,
                timer: 2000
              }).then(function (result) {
                if (true) {
                  window.location = 'clientdash.php';
                }
              })
            </script>";
            
        }
    }
}
?>
>>>>>>> Stashed changes

}
