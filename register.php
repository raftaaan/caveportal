<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
$view = new view;
?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrar Portal</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
<<<<<<< Updated upstream
 <body>
         <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
           <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
             <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
               alt="mdb logo"><h3 class="ib">
           </a>
           <a href="exportTableAdmin.php"><i class="fas fa-table ceucolor"></i></a>
           <a href="statsAdmin.php"><i class="fas fa-chart-line ceucolor"></i></a>
           <a href="userVerificationAdmin.php"><i class="fas fa-user-plus ceucolor"></i></a>
           <a href="verificationAdmin.php"><i class="fas fa-user-graduate ceucolor"></i></a>
           <a href="viewAlumniAdmin.php"><i class="fa fa-graduation-cap ceucolor"></i></a>
           <a href="nTransactionAdmin.php"><i class="fas fa-file-upload ceucolor"></i></a>
           <a href="view_pending_requests.php"><i class="fas fa-home ceucolor"></i></a>
           <a href="htt ps:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
           <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
           <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a>
         </nav>

         <div class="container mt-4 puff-in-center">
             <div class="row">
                 <div class="col-12">
                     <h1 class="text-center">Register New Student Records Assistant</h1>
                 </div>
            </div>
            <?php
                vald();
            ?>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4">
                                 <label for = "username" class=""> Username:</label>
                                 <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                                </div>
                                <div class="form-group col-4">
                                 <label for = "password"> Password:</label>
                                 <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "ConfirmPassword"> Confirm Password:</label>
                                 <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4">
                                 <label for = "fullName" class=""> Full Name</label>
                                 <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                                </div>
                                <div class="form-group col-4">
                                  <label for="College" >College/s to handle</label>
                                      <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                        <?php $view->collegeSP2();?>
                                      </select>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "email" class=""> Email Address</label>
                                 <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-7">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Register New SRA" class=" form-control btn btn-primary" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
         </div>
=======
 <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="resource/img/CAVElogo-white.png" alt="" width="150" height="65" class="d-inline-block align-top"/></a>
                    
                </div>
            </nav>
              
        <header class="bg-dark py-lg-5 pt-5">
            <div class="container">
            <section class="wrapper">
                <div class="container">
                    <div class="col-sm-10 offset-sm-1 col-lg-6 offset-lg-6 col-xl-6 offset-xl-3 text-center">
                            <form class="rounded bg-white shadow py-5 px-4" method="post">
                                <div class="row text-center">
                            <div class="col-md-12">
                                <h1 class="title-wrapper">Sign Up</h1>
                                <div class="fw-normal text-muted mb-4">
                                    <a href="login.php" class="text-header fw-bold text-decoration-none"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                vald();
                            ?>
                                <div class="row justify-content-center mt-4 mb-4">
                                    <div class="form-floating col-md-6">
                                        <input class="form-control form-control-md"  type="text" name="username" id="floatingInput" value ="<?php echo htmlentities(Input::get('username'));?>" autocomplete="off" placeholder="Username" required />
                                        <label for ="floatingInput" class=""> Username</label>
                                    </div>
                                    <div class="form-floating col-md-6">
                                        <input class="form-control form-control-md"  type="text" name="fullName" id="floatingInput" placeholder="Full Name" required value ="<?php echo htmlentities(Input::get('fullName'));?>"/>
                                        <label for = "floatingInput" class=""> Full Name</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="form-floating col-md-12">
                                        <input class="form-control form-control-md"  type="email" name="email" id="floatingInput" value ="<?php echo Input::get('email');?>"placeholder="Email Address" required>
                                        <label for = "floatingInput" class=""> Email Address</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="form-floating col-md-12">
                                        <input class="form-control"  type="text" name="company" id="floatingInput" placeholder="Company Name"  required value="<?php echo htmlentities(Input::get('company'));?>"/>
                                        <label for = "floatingInput" class=""> Company Name</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center">       
                                    <div class="form-floating col-md-6">            
                                        <input type="password" class="form-control" name="password" id="floatingInput" value ="<?php echo Input::get('password');?>" autocomplete="off" placeholder="Password" required/>                 
                                        <label for = "floatingInput"> Password</label>
                                    </div>            
                                    <div class="form-floating col-md-6">       
                                        <input type="password" class="form-control" name="ConfirmPassword" id="floatingInput" value ="<?php echo Input::get('ConfirmPassword');?>" autocomplete="off" placeholder="Confirm Password" required/>
                                        <label for = "floatingInput"> Confirm Password</label>  
                                    </div>
                                </div>            
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-12">
                                        <label  >&nbsp;</label>
                                        <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                        <input type="submit" value="Register Account" class="submit_btn w-100" />
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </section>    
            </div>
        </header>
    </main>
 
>>>>>>> Stashed changes
 </body>
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
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
