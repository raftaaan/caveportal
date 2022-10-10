<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
$view = new view;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="CEU Candidate Verification Portal" />
        <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
        <title>CEU CAVEPortal</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="resource/css/index.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">

</head>
<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="http://malolos.ceu.edu.ph">
                        <img src="resource/img/logo.png" alt="" width="230" height="65" class="d-inline-block align-top"/>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
  <div class="container-fluid mt-3 pt-4 slide-in-left bg-light rounded shadow-sm">
    <div class="row">
        <div class="col-12">
            <h6 class="text-center mb-4">New Application for Candidate Verification</h6>
        </div>
    </div>
      <?php 
      if(!empty($_POST)){
        $insert = new insert($_POST['studentID'],$_POST['firstName'],$_POST['middleName'],$_POST['lastName'],$_POST['degree']);
        $insert->insertVerification();
      }
      ?>
      <form action="" method="POST" class="" enctype="multipart/form-data">
        <div class="row border-top pt-2">
          <div class="form-group col-md-4">
            <h6 for="studentN">Student Number</h6>
            <input type="text" class="form-control form-control-sm" id="studentID"  value="" name="studentID" placeholder="Student Number " minlength="10" maxlength="10">
            <small class="text-muted"> *Please input the correct student format <b><em>2018-00053</em></b></small>
          </div>
        </div>
  </div>
        <div class="row border-top py-2">
            <div class="form-group col-md-4">
                <h6 for="firstName">First Name</h6>
                <input type="text" class="form-control form-control-sm" id="firstName"  value="" name="firstName" placeholder="First Name" required>

            </div>
            <div class="form-group col-md-4">
                <h6 for="middleName">Middle Name</h6>
                <input type="text" class="form-control form-control-sm" id="middleName"  value="" name="middleName" placeholder="Middle Name" required>
            </div>
            <div class="form-group col-md-4">
                <h6 for="studentN">Last Name</h6>
                <input type="text" class="form-control form-control-sm" id="lastName"  value="" name="lastName" placeholder="Last Name">
                <small class="text-muted">for now student with ñ in their name <b>please input Uppercase Ñ or N instead.</b> </small>
            </div>
        </div>
        <div class="row border-top py-2"></div>
          <div class="form-group col-md-8">
              <h6 for="Course">Course</h6>
                <select id="degree" name="degree"  class="form-control form-control-sm" required>
                  <option data-tokens=".Bachelor of Science in Accountancy (BSA)." value="1">Bachelor of Science in Accountancy (BSA)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in International Management (BSBAIM)." value="2">Bachelor of Science in Business Administration Major in International Management (BSBAIM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Financial Management (ABM) (BSBAFM-ABM)." value="3">Bachelor of Science in Business Administration Major in Financial Management (ABM) (BSBAFM-ABM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Financial Management (Non-ABM) (BSBAFM-NABM)." value="4">Bachelor of Science in Business Administration Major in Financial Management (Non-ABM) (BSBAFM-NABM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Marketing Management (ABM) (BSBAMM-ABM)." value="5">Bachelor of Science in Business Administration Major in Marketing Management (ABM) (BSBAMM-ABM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Marketing Management (Non-ABM) (BSBAMM-NABM)." value="6">Bachelor of Science in Business Administration Major in Marketing Management (Non-ABM) (BSBAMM-NABM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Management with Specialization in Service Management for Business Process Outsourcing (ABM) (BSBAMGT-SMBPO-ABM)." value="7">Bachelor of Science in Business Administration Major in Management with Specialization in Service Management for Business Process Outsourcing (ABM) (BSBAMGT-SMBPO-ABM)</option>success<option data-tokens=".Bachelor of Science in Business Administration Major in Management with Specialization in Service Management for Business Process Outsourcing (Non-ABM) (BSBAMGT-SMBPO-NABM)." value="8">Bachelor of Science in Business Administration Major in Management with Specialization in Service Management for Business Process Outsourcing (Non-ABM) (BSBAMGT-SMBPO-NABM)</option>success<option data-tokens=".Bachelor of Science in Management Accounting." value="9">Bachelor of Science in Management Accounting</option>success<option data-tokens=".Bachelor of Arts in Communication and Media (BACM-A)." value="10">Bachelor of Arts in Communication and Media (BACM-A)</option>success<option data-tokens=".Bachelor of Arts in Communication and Media (with 21 Units of Education) (BACM-B)." value="11">Bachelor of Arts in Communication and Media (with 21 Units of Education) (BACM-B)</option>success<option data-tokens=".Bachelor of Special Needs Education." value="12">Bachelor of Special Needs Education</option>success<option data-tokens=".Bachelor of Special Needs Education Specialization in Early Childhood Education." value="13">Bachelor of Special Needs Education Specialization in Early Childhood Education</option>success<option data-tokens=".Doctor of Dental Medicine (STEM) (DMD-STEM)." value="14">Doctor of Dental Medicine (STEM) (DMD-STEM)</option>success<option data-tokens=".Doctor of Dental Medicine (Non-STEM) (DMD-NSTEM)." value="15">Doctor of Dental Medicine (Non-STEM) (DMD-NSTEM)</option>success<option data-tokens=".Bachelor of Science in Medical Technology (BSMT)." value="16">Bachelor of Science in Medical Technology (BSMT)</option>success<option data-tokens=".Bachelor of Science in Nursing (STEM) (BSN-STEM)." value="17">Bachelor of Science in Nursing (STEM) (BSN-STEM)</option>success<option data-tokens=".Bachelor of Science in Nursing (Non-STEM) (BSN-NSTEM)." value="18">Bachelor of Science in Nursing (Non-STEM) (BSN-NSTEM)</option>success<option data-tokens=".Bachelor of Science in International Hospitality Management (Specialization in Cruise and Integrated Resort Operations) ? ABM (BSIHM-CIRO-ABM)." value="19">Bachelor of Science in International Hospitality Management (Specialization in Cruise and Integrated Resort Operations) ? ABM (BSIHM-CIRO-ABM)</option>success<option data-tokens=".Bachelor of Science in International Hospitality Management (Specialization in Cruise and Integrated Resort Operations) ? Non-ABM (BSIHM-CIRO-NABM)." value="20">Bachelor of Science in International Hospitality Management (Specialization in Cruise and Integrated Resort Operations) ? Non-ABM (BSIHM-CIRO-NABM)</option>success<option data-tokens=".Bachelor of Science in International Hospitality Management (Specialization in Hotel, Restaurant and Culinary Operations) ? ABM (BSIHM-HRCO-ABM)." value="21">Bachelor of Science in International Hospitality Management (Specialization in Hotel, Restaurant and Culinary Operations) ? ABM (BSIHM-HRCO-ABM)</option>success<option data-tokens=".Bachelor of Science in International Hospitality Management (Specialization in Hotel, Restaurant and Culinary Operations) ? Non-ABM (BSIHM-HRCO-NABM)." value="22">Bachelor of Science in International Hospitality Management (Specialization in Hotel, Restaurant and Culinary Operations) ? Non-ABM (BSIHM-HRCO-NABM)</option>success<option data-tokens=".Bachelor of Science in International Tourism and Travel Management (ABM) (BSITTM-ABM)." value="23">Bachelor of Science in International Tourism and Travel Management (ABM) (BSITTM-ABM)</option>success<option data-tokens=".Bachelor of Science in International Tourism and Travel Management (Non-ABM) (BSITTM-NABM)." value="24">Bachelor of Science in International Tourism and Travel Management (Non-ABM) (BSITTM-NABM)</option>success<option data-tokens=".Doctor of Optometry (STEM) (OD-STEM)." value="25">Doctor of Optometry (STEM) (OD-STEM)</option>success<option data-tokens=".Doctor of Optometry (Non-STEM) (OD-NSTEM)." value="26">Doctor of Optometry (Non-STEM) (OD-NSTEM)</option>success<option data-tokens=".Bachelor of Science in Pharmacy (BSP)." value="27">Bachelor of Science in Pharmacy (BSP)</option>success<option data-tokens=".Bachelor of Science in Clinical Pharmacy (BSCP)." value="28">Bachelor of Science in Clinical Pharmacy (BSCP)</option>success<option data-tokens=".Bachelor of Science in Information Technology (BSIT)." value="29">Bachelor of Science in Information Technology (BSIT)</option>success<option data-tokens=".Bachelor of Science in Psychology (STEM) (BSPSY-A-STEM)." value="30">Bachelor of Science in Psychology (STEM) (BSPSY-A-STEM)</option>success<option data-tokens=".Bachelor of Science in Psychology (Non-STEM) (BSPSY-A-NSTEM)." value="31">Bachelor of Science in Psychology (Non-STEM) (BSPSY-A-NSTEM)</option>success<option data-tokens=".Bachelor of Science in Psychology with 15 Units of Education (STEM) (BSPSY-B-STEM)." value="32">Bachelor of Science in Psychology with 15 Units of Education (STEM) (BSPSY-B-STEM)</option>success<option data-tokens=".Bachelor of Science in Psychology with 15 Units of Education (Non-STEM) (BSPSY-B-NSTEM)." value="33">Bachelor of Science in Psychology with 15 Units of Education (Non-STEM) (BSPSY-B-NSTEM)</option>success<option data-tokens=".Master of Business Administration (Non-Thesis)." value="34">Master of Business Administration (Non-Thesis)</option>success<option data-tokens=".Master of Business Administration (Thesis)." value="35">Master of Business Administration (Thesis)</option>success<option data-tokens=".Master of Business Administration (Total Quality Management)." value="36">Master of Business Administration (Total Quality Management)</option>success<option data-tokens=".Master of Science in Psychology." value="37">Master of Science in Psychology</option>success<option data-tokens=".Bachelor of Science in Information Technology." value="38">Bachelor of Science in Information Technology</option>success              </select>
          </div>
        <div class="row border-top py-2 justify-content-center">
          <div class="form-group col-md-4">
            <h6 class="text-center" for="studentN">Upload Diploma <br />(Please provide diploma to as proof of authenticity.)</h6>
            <input id="diploma" accept=".pdf" type="file" name="diploma" onchange="validateSize(this)">
            <small class="text-muted"> <br />
              *Please ensure the correctness of the pdf file. Incorrect requirements uploaded may <b>result to forfeiting of your application.</b></em></b></small>
            <small class="text-muted"> <br />
              - Make sure to follow the instructions on the previous page.<br /></small>
          </div>
          <!-- <div class="form-group col-md-4 justify-content-center">
            <h6 class="text-center" for="studentN">Captcha Validation</h6>
                                      <p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
                                      <p><input type="text" size="6" maxlength="5" name="captcha" value="">
                                      <small>copy the digits from the image into this box</small></p>
                                        <label  >&nbsp;</label>
         </div> -->
          <div class="form-group col-md-4">
            <p>
              <small class="text-muted" style="font-size: 70%;"><b>In accordance to Republic Act 10173 – Data Privacy Act of 2012</b><br />-By submitting this form, I am giving my consent to CEU to process my personal and sensitive information.
              <br /> -By submitting this form, I also signify that I have read, understood and hereby state that everything stated above are true and correct.
              </small>
            </p>
          </div>
          <div class="form-group col-12">
            <input type="submit" id="myButton1" value="Submit the Candidate Verification Application Form"  class=" form-control btn btn-primary" />
          </div>
        </div>
      </form>
<!-- Modal --> 
    <script src="vendor/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <!-- <script src="resource/js/ft.js"></script> -->
    <script>
      $(document).ready(function(){
          $("#ceumodal").modal('show');
      });

      function change()
      {
          document.getElementById("myButton1").value="Submitting form... Do not click again. Please wait...";
          setTimeout(
            function(){
              document.getElementById("myButton1").value="Submit the Candidate Verification Application Form"
            }, 3000);
      }
    </script>


    </body>
    </html>