<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class approved extends config{
    public $id, $remarks;
    function __construct($id=null, $remarks=null){
        $this->id = $id;
        $this->remarks = $remarks;

        if ($this->remarks == '') {
            $message = "Please put Remarks!";
        }
        if(!ctype_alpha(str_replace(' ', '', $this->remarks))){
            $message = "Inputted Remarks is not applicable!";   
        }
        echo "<script>alert('$message');</script>";
    }
    public function ApprovedRemarks(){
        $config = new config();
        $con = $config->con();
        $sql = "UPDATE `tbl_client_user` SET `status` = 'APPROVED', `remarks` = '$this->remarks' WHERE `id` = '$this->id'";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>