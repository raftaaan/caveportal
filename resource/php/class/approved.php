<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/vendor/sendmail.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class approved extends config{
    public $id;
    function __construct($id=null){
        $this->id = $id;

    }
    public function ApprovedRemarks(){
        $config = new config();
        $con = $config->con();
        $sql = "UPDATE `tbl_client_user` SET `status` = 'APPROVED', `date_completed` = CURRENT_TIMESTAMP  WHERE `id` = '$this->id'";
        $data = $con->prepare($sql);
        $data->execute();
        
        $con = $config->con();
        $sql2 = "SELECT `lastName` FROM `tbl_client_user` WHERE `id` = '$this->id'";
        $data2 = $con->prepare($sql2);
        $data2->execute();
        $lastname = $data2->fetchColumn();

        $con = $config->con();
        $sql4 = "SELECT `status` FROM `tbl_client_user` WHERE `id` = '$this->id'";
        $data4 = $con->prepare($sql4);
        $data4->execute();
        $status = $data4->fetchColumn();

        $con = $config->con();
        $sql5 = "SELECT `agentID` FROM `tbl_client_user` WHERE `id` = '$this->id'";
        $data5 = $con->prepare($sql5);
        $data5->execute();
        $agentID = $data5->fetchColumn();

        $con = $config->con();
        $sql3 = "SELECT `name` FROM `tbl_accounts` WHERE `id` = $agentID";
        $data3 = $con->prepare($sql3);
        $data3->execute();
        $fullname = $data3->fetchColumn();

        $con = $config->con();
        $sql6 = "SELECT `email` FROM `tbl_accounts` WHERE `id` = $agentID";
        $data6 = $con->prepare($sql6);
        $data6->execute();
        $email = $data6->fetchColumn(); 

        sendApprovedEmail($lastname, $fullname, $email);
        
    }
}
?>