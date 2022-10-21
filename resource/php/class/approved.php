<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class approved extends config{
    public $id, $remarks;
    public function __construct($id=null, $remarks=null){
        $this->id = $id;
        $this->remarks = $remarks;
    }
    public function ApprovedRemarks(){
        $con = $this->con();
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