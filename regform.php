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
        <link href="resource/css/regform.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">

</head>
<body class="d-flex flex-column h-100">
          <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-aos="fade-down" data-aos-duration="2500">
                <div class="container px-5">
                    <a class="navbar-brand">
                        <img src="resource/img/logo.png" alt="" width="230" height="65" class="d-inline-block align-top"/><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
        <header >
        <section class="wrapper">
            <div class="container mt-3 slide-in-left rounded shadow-sm">
          <?php 
          if(!empty($_POST)){
            $insert = new insert($_POST['studentID'],$_POST['firstName'],$_POST['middleName'],$_POST['lastName'],$_POST['degree']);
            $insert->insertVerification();
          }
          ?>
          <form action="" method="POST" class="rounded bg-white shadow py-5 px-4" data-aos="fade-up" data-aos-duration="2500">
          <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-4 title-header" >New Application for Candidate Verification</h3>
            </div>
        </div>
            <div class="row border-top pt-2">
              <div class="form-floating col-md-4">
                <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="studentID" placeholder="Student Number " autocomplete="no"  minlength="10" maxlength="10">
                <label for="floatingInput">Student Number</label>
                <small class="text-muted"> *Please input the correct student format <b><em>2018-00053</em></b></small>
              </div>
            </div>
            <div class="row border-top py-2">
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="firstName" placeholder="First Name" autocomplete="no" pattern="[a-zA-Z\s]*$" required>
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="middleName" placeholder="Middle Name" autocomplete="no" pattern="[a-zA-Z\s]*$" required>
                    <label for="floatingInput">Middle Name</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="lastName" placeholder="Last Name"  autocomplete="no" pattern="[a-zA-Z\s]*$" required>
                    <label for="floatingInput">Last Name</label>
                    <small class="text-muted">for now student with ñ in their name <b>please input Uppercase Ñ or N instead.</b> </small>
                </div>
            </div>
            <div class="row border-top py-2"></div>
              <div class="form-group col-md-8">
                    <select id="courses" name="degree"  class="selectpicker form-control mb-3 pb-3" data-live-search="true" multiple required>
                      <option value="<?php $view->courses();?>">Select-Courses</option>
                      
                  </select>
                    <label for="courses">Course</label>
              </div>
            <div class="row border-top py-2 justify-content-center">
              <div class="form-group col-md-4">
                <h4 class="text-center mt-2 mb-3" for="studentN">Upload Diploma <br />(Please provide diploma to as proof of authenticity.)</h4>
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
              <input type="hidden" name="Token" value="<?php echo Token::generate();?>" />
                <button type="submit" id="myButton1" class="submit_btn mt-3" >
                Submit the Candidate Verification Application Form
                </button>
              </div>
            </div>
          </form>
        </div>
        </section>
        
    </header>
    </main>
<!-- Modal --> 
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    <script>
      AOS.init();
    </script>

    </body>
    </html>