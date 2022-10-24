<?php

class accounts extends config {
    public $id, $username, $password, $name, $group;

    function __construct($id= null, $username=null, $password=null, $name=null, $group=null);

    $this->id = $id;
    $this->username = $name;
    $this->password = $password;
    $this->name = $name;
    $this->group = $group;

    public function getAccountDetails() {
        $config = new config();
        $con = $config->con();
        $sql = "SELECT * FROM `tbl_accounts`";
        $data = $con->prepare($sql);
    }
}


?>