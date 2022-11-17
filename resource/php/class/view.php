<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
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
                  echo 'success';
                }
        }
<<<<<<< Updated upstream
=======
        public function countries(){
          $config = new config;
          $con = $config->con();
          $sql = "SELECT * FROM `tbl_countries`";
          $data = $con->prepare($sql);
          $data->execute();
          $rows =$data->fetchAll(PDO::FETCH_OBJ);
              foreach ($rows as $row) {
                echo '<option data-tokens=".'.$row->countryname.'." value="'.$row->countryname.'">'.$row->countryname.'</option>';

              }
      }
      public function campuses(){
        $config = new config;
        $con = $config->con();
        $sql = "SELECT * FROM `tbl_campuses`";
        $data = $con->prepare($sql);
        $data->execute();
        $rows =$data->fetchAll(PDO::FETCH_OBJ);
            foreach ($rows as $row) {
                echo '<option data-tokens=".'.$row->campus_name.'." value="'.$row->campus_name.'">'.$row->campus_name.'</option>';
              }
    }

        public function years() {
          for ($i = 1950; $i <= 2022; $i++) 
         echo '<option data-tokens=".'.$i.'." value="'.$i.'">'.$i.'</option>';
        }

        public function pendingCount(){
          $config = new config;
          $con = $this->con();
          $sql = "SELECT COUNT(*) FROM `tbl_client_user` WHERE `status`= 'PENDING'";
          $data= $con->prepare($sql);
          $data->execute();
          $rows = $data->fetchColumn();
          return $rows;
        }

        public function approvedCount(){
          $config = new config;
          $con = $this->con();
          $sql = "SELECT COUNT(*) FROM `tbl_client_user` WHERE `status`= 'APPROVED'";
          $data= $con->prepare($sql);
          $data->execute();
          $rows = $data->fetchColumn();
          return $rows;
        }

        public function deniedCount(){
          $config = new config;
          $con = $this->con();
          $sql = "SELECT COUNT(*) FROM `tbl_client_user` WHERE `status`= 'DENIED'";
          $data= $con->prepare($sql);
          $data->execute();
          $rows = $data->fetchColumn();
          return $rows;
        }

        public function onHoldCount(){
          $config = new config;
          $con = $this->con();
          $sql = "SELECT COUNT(*) FROM `tbl_client_user` WHERE `status`= 'ON-HOLD'";
          $data= $con->prepare($sql);
          $data->execute();
          $rows = $data->fetchColumn();
          return $rows;
        }
>>>>>>> Stashed changes
}
