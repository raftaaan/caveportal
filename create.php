<?php
session_start();
require_once 'resource/php/class/config.php';

    if (isset($_POST['register'])){
        $studentNumber = $_POST['studentNumber'];
        $fullName = ucwords($_POST['fullName']); 
        $dp = 'image/'.$_FILES['dp']['name'];
        $pdf = $_FILES['pdf']['name'];


        $query = "INSERT INTO `tbl_students` (studentNumber,fullName, dp, pdf) VALUES ('$studentNumber','$fullName','$dp','$pdf')";
        $query_run = mysqli_query($link, $query);
            if ($query_run){
                $_SESSION['status'] = "Registration is successful.";
                header('Location: create.php');
            }else{
                $_SESSION['status'] = "Registration unsuccessful.";
                header('Location: create.php');
            }
        }
        
?>