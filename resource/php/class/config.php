<?php

class config{
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function con(){
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=cave', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
