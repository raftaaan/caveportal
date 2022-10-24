<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
$view = new view;
?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
   <title>Registrar Portal</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link rel="icon" type="image/x-icon" href="resource/img/tab-icon.png">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/register.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </head>
 <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="resource/img/CAVElogo-white.png" alt="" width="150" height="65" class="d-inline-block align-top"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Alumni Verification</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Check Status</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php #esco-world">Escolarians Around the World</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="login.php">Log in</a></li>
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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
                                <div class="fw-normal text-muted mb-4"> Have an Account?
                                    <a href="login.php" class="text-header fw-bold text-decoration-none">Sign In</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                vald();
                            ?>
                                <div class="row justify-content-center mt-4 mb-4">
                                    <div class="form-floating col-md-6">
                                        <input class="form-control form-control-md"  type="text" name="username" id="floatingInput" value ="<?php echo Input::get('username');?>" autocomplete="off" placeholder="Username" required />
                                        <label for ="floatingInput" class=""> Username</label>
                                    </div>
                                    <div class="form-floating col-md-6">
                                        <input class="form-control form-control-md"  type = "text" name="fullName" id="floatingInput" value ="<?php echo Input::get('fullName');?>" placeholder="Full Name" required>
                                        <label for = "floatingInput" class=""> Full Name</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="form-floating col-md-12">
                                        <input class="form-control"  type = "text" name="email" id="floatingInput" value ="<?php echo Input::get('email');?>"placeholder="Email Address" required>
                                        <label for = "floatingInput" class=""> Email Address</label>
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
 
 </body>
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom  slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-sm-5 text-left">
               <small>Copyright &copy;Centro Escolar University     Office of the Registrar 2019</small>
           </div>
           <div class="col text-right">
               <small>Created by: Reymart Bolasoc, Amelia Valencia , James Mangalile, Kenneth De Leon , Pamela Reyes , Ellen Mijares</small>
           </div>
       </div>
   </div>
 </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     
 </body>
 </html>
