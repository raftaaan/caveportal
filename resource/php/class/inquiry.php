<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/vendor/sendmail.php';
require_once 'config.php';

class inquiry extends config{
    public $emails;
    function __construct($emails=null) {
        $this->emails = $emails;

         if ($this->emails == "") {
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Email must not be blank',
            })
            </script>";
        }
        else if(!filter_var($this->emails, FILTER_VALIDATE_EMAIL)) {
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Email Format is Invalid',
            })
            </script>";
        }else if(!preg_match(
            "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $this->emails)) {
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Email must first contain Letters',
            })
            </script>";
        }
        else {
            echo "<script type='text/javascript'>
            Swal.fire(
                'Success!',
                'Email Inquiry is Successful!',
                'success'
            );
            </script>";
            $this->inquiry();
        }
        
    }

    public function inquiry() {
        
        $config = new config();

        $con = $config->con();
        $sql = "INSERT INTO `tbl_emails` (`emails`) VALUES ('$this->emails')";
        $data = $con->prepare($sql);
        $data->execute();
        
        $con = $config->con();
        $sql1 = "SELECT `emails` FROM `tbl_emails` WHERE `emails` = '$this->emails'";
        $data2 = $con->prepare($sql1);
        $data2->execute();
        $emails = $data2->fetchColumn();
    
            sendInquiry($emails);
    }
}
?>