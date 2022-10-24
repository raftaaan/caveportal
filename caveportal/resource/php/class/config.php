<?php

class config{
    // local connection
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    // hostinger connection
    // private $user = 'port7396_cave';
    // private $password = 'p@ssw0rdBSIT4A';
    // public $pdo = null;

    public function con(){
        try {
            // local connection
            $this->pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=cave', $this->user, $this->password);

            // hostinger connection
            // $this->pdo = new PDO('mysql:host=109.106.251.63;dbname=port7396_caveportal', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;
    }
}

 ?>
