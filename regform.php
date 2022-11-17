<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
isLogin();
$view = new view;
<<<<<<< Updated upstream
=======
$user = new user();
isClient($user->data()->groups);
>>>>>>> Stashed changes
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
        <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
        <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="sweetalert2.min.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">

</head>
<body class="d-flex flex-column h-100 bg-light" >
    <main class="flex-shrink-0">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-aos="fade-down" data-aos-duration="1500">
<<<<<<< Updated upstream
        <div class="container px-5">
          <a class="navbar-brand">
            <img src="resource/img/logo.png" alt="" width="200" height="65" class="d-inline-block align-top"/><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
=======
        <div class="container px-5 justify-content-center">
          <a class="navbar-brand" href="clientdash.php">
            <img src="resource/img/CAVElogo-white.png" alt="" width="150" height="65" class="d-inline-block align-top"/></a>
>>>>>>> Stashed changes
        </div>
      </nav>
    
      <section class="wrapper">
        <div class="container mt-2 slide-in-left rounded shadow-sm" data-aos="fade-down"  data-aos-duration="1500">
          
<<<<<<< Updated upstream
            <form action="" method="POST" class="rounded bg-white shadow py-4 px-4">
=======
            <form action="" method="POST" class="rounded bg-white shadow py-4 px-4" enctype="multipart/form-data">
            <?php 
            if(!empty($_POST)){
              $insert = new insert($_POST['firstName'],$_POST['middleName'],$_POST['lastName'], $_POST['campus'],$_POST['degree'], $_POST['yearsGrad'], $_POST['country'],$_FILES['diploma'], $_FILES['consent']);
              }
              ?>
>>>>>>> Stashed changes
              <div class="row">
                <div class=" form-group col-md-12">
                    <h3 class="text-center mb-4 title-header" >New Application for Candidate Verification</h3>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="form-group col-md-12">
                  <h5 class="text-start mt-2 mb-3">Basic Information <br /><small class="text-muted">for student with ñ in their name please input Uppercase Ñ or N instead.</small></h5>
                </div>
                <div class="form-floating col-md-4 mb-2">
<<<<<<< Updated upstream
                  <input type="text" class="form-control form-control-sm" id="floatingInput" value="" name="firstName" placeholder="First Name" autocomplete="no" pattern="[a-zA-Z\s]*$" required>
=======
                  <input type="text" class="form-control form-control-sm" id="floatingInput" value="" name="firstName" placeholder="First Name" autocomplete="no" pattern="[a-zA-Z\s]*$">
>>>>>>> Stashed changes
                  <label for="floatingInput">First Name</label>
                </div>

                <div class="form-floating col-md-4 mb-2">
<<<<<<< Updated upstream
                  <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="middleName" placeholder="Middle Name" autocomplete="no" pattern="[a-zA-Z\s]*$" required>
=======
                  <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="middleName" placeholder="Middle Name" autocomplete="no" >
>>>>>>> Stashed changes
                  <label for="floatingInput">Middle Name</label>
                </div>
                
                <div class="form-floating col-md-4">
<<<<<<< Updated upstream
                    <input type="text" class="form-control form-control-sm" id="floatingInput"  value="" name="lastName" placeholder="Last Name"  autocomplete="no" pattern="[a-zA-Z\s]*$" required>
=======
                    <input type="text" class="form-control form-control-sm  " id="floatingInput"  value="" name="lastName" placeholder="Last Name"  autocomplete="no" pattern="[a-zA-Z\s]*$" >
>>>>>>> Stashed changes
                    <label for="floatingInput">Last Name</label>
                    <small class="text-muted"></b> </small>
                  </div>
              </div>
              
              <div class="row border-top py-2">
<<<<<<< Updated upstream
                <div class="form-group col-md-6">
                  <label for="degree">Course/s</label>
                  <select id="degree" name="degree" class="selectpicker form-select" data-live-search="true" required>
                    <option selected>---- Select Course ----</option>
                    <option value=""><?php $view->courses();?></option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="yearsGrad" >Year Graduated</label>
                  <select name="yearsGrad" id="yearsGrad" class="selectpicker form-select" data-live-search="true">
                    <option value="">--- Select Year ---</option>
                  </select>
=======
                <div class="form-group col-md-3">
                  <label for="campus">Campus</label>
                  <select id="campus" name="campus" class="selectpicker form-control" value="<?php echo input::get('campus');?>" title="Select Campus" required>
                    <?php $view->campuses();?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="degree">Course/s</label>
                  <select id="degree" name="degree" class="selectpicker form-control" data-live-search="true" value="<?php echo input::get('degree');?>" title="Select Course" required>
                    <?php $view->courses();?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="yearsGrad" >Year Graduated</label>
                  <select name="yearsGrad" id="yearsGrad" class="selectpicker form-control" data-live-search="true" value="<?php echo input::get('years');?>" title="Select Year" required>
                    <?php $view->years();?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="country" >Country</label>
                  <select name="country" id="country" class="selectpicker form-control" data-live-search="true" value="<?php echo input::get('country');?>" title="Select Country" required>
                    <?php $view->countries();?>
                  </select>   
>>>>>>> Stashed changes
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="form-group col-md-6">
                  <h5 class="text-start mt-2 mb-3" for="diploma">Upload Diploma <br /><span class="diploma-title">(Please provide diploma to as proof of authenticity.)</span></h5>
<<<<<<< Updated upstream
                  <input id="diploma" class="form-control" accept=".pdf" type="file" name="diploma" onchange="validateSize(this)" >
=======
                  <input type="hidden" name="MAX_FILE_SIZE" value="30000.ini_get('upload_max_filesize')." />
                  <input id="diploma" class="form-control" accept=".pdf" type="file" name="diploma"  >
>>>>>>> Stashed changes
                  <small class="text-muted"> <br />
                    *Please ensure the correctness of the pdf file. Incorrect requirements uploaded may <b>result to forfeiting of your application.</b></em></b></small>
                  <small class="text-muted"> <br />
                    - Make sure to follow the instructions on the previous page.<br /></small>
                </div>
                
                <div class="form-group col-md-6">
                  <h5 class="text-start mt-2 mb-3" for="consent">Consent Form <br /><span class="diploma-title">(Please provide a consent form from the candidate.)</span></h5>
<<<<<<< Updated upstream
                  <input id="consent" class="form-control" accept=".pdf" type="file" name="consent" onchange="validateSize(this)">
=======
                  <input type="hidden" name="MAX_FILE_SIZE" value=".ini_get('upload_max_filesize')." />
                  <input id="consent" class="form-control" accept=".pdf" type="file" name="consent" >
>>>>>>> Stashed changes
                  <p>
                    <small class="text-muted" style="font-size: 60%;"><b>In accordance to Republic Act 10173 – Data Privacy Act of 2012</b><br />-By submitting this form, I am giving my consent to CEU to process my personal and sensitive information.
                    <br /> -By submitting this form, I also signify that I have read, understood and hereby state that everything stated above are true and correct.
                    </small>
                  </p>
                </div>
              </div>

<<<<<<< Updated upstream
              <div class="row border-top py-3 justify-content-end">
                <div class="form-group col-md-8">
=======
              <div class="row border-top py-3 justify-content-start">
                <div class="form-group col-md-2">
>>>>>>> Stashed changes
                  <input type="hidden" name="Token" value="<?php echo Token::generate();?>"/>
                  <button type="submit" id="myButton1" class="submit_btn btn-mdmt-2">
                  Submit Application
                  </button>
                </div>
              </div>
            </form>
          </div>
        </section>
          <!-- Footer-->
          <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white"><strong>Centro Escolar University</strong>&nbsp&nbsp&nbsp&nbspMariano | Gita | Tuazon | Valencia | Bolasoc </div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
      
    </main>
<!-- Modal --> 
    <script src="vendor/js/jquery.js"></script>
    <script src="resource/js/scripts.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
<<<<<<< Updated upstream
=======
    <script src="vendor/js/bootstrap-select.min.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
>>>>>>> Stashed changes
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="resource/js/year.js"></script>
    <!-- <script src="resource/js/ft.js"></script> -->
    <script>
      $("select").selectize({
      readOnly:true
    });
    </script>


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