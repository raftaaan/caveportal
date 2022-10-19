<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `tbl_group`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->name.'." value="'.$row->name.'">'.$row->name.'</option>';
                  echo 'success';
                }
        }


        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        
        public function courses(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `courses`";
            $data = $con->prepare($sql);
            $data ->execute();
            $rows =$data->fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->course_title.'." value="'.$row->course_title.'">'.$row->course_title.'</option>';
                }
        }
        public function countries(){
          $config = new config;
          $con = $config->con();
<<<<<<< Updated upstream
          $sql = "SELECT * FROM `countries`";
=======
          $sql = "SELECT * FROM `tbl_countries`";
>>>>>>> Stashed changes
          $data = $con->prepare($sql);
          $data ->execute();
          $rows =$data->fetchAll(PDO::FETCH_OBJ);
              foreach ($rows as $row) {
<<<<<<< Updated upstream
                echo '<option data-tokens=".'.$row->country_name.'." value="'.$row->country_name.'">'.$row->country_name.'</option>';
=======
                echo '<option data-tokens=".'.$row->countryname.'." value="'.$row->countryname.'">'.$row->countryname.'</option>';
>>>>>>> Stashed changes
              }
      }


        public function years() {
          for ($i = 1950; $i <= 2022; $i++) 
         echo '<option data-tokens=".'.$i.'." value="'.$i.'">'.$i.'</option>';
        }
}
