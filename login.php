<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CEU CAVEPortal</title>
    <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="resource/img/tab-icon.png">
    <link href="resource/css/login.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container nav-container px-5">
                <a class="navbar-brand" href="index.php">
                     <img src="resource/img/CAVElogo-white.png" alt="" width="300" height="55" class="img-fluid logo" href="index.php">
            </div>
        </nav>
            
            <!-- Header-->
        <header class="bg-dark py-lg-5">
            <div class="container">
                <section class="wrapper">
                    <div class="container">
                        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                            <form class="rounded bg-white shadow py-5 px-4" method="POST">
                                <h3 class="text-dark fw-bolder fs-4 mb-2">Sign In</h3>
                                <div class="fw-normal text-muted mb-4"> New Here?
                                    <a href="register.php #inq" class="text-primary fw-bold text-decoration-none">Inquire for an Account</a>
                                </div>
                                <?php logd();
                                ?>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                                    <label for="floatingInput">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" pass  placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mt-2 text-end">
                                    <a href="#" class="text-primary fw-bold text-decoration-none">Forgot Password?</a>
                                </div>
                                <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                                <button type="submit" class="btn btn-primary submit_btn w-100 my-4">Log In</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </header>
            
    </main>
        <!-- Footer-->
        <footer>
         <div class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Centro Escolar University</div></div>
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
    </body>
    </html>
