<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< Updated upstream
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="CEU Candidate Verification Portal" />
        <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
        <title>CEU CAVEPortal</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="resource/css/index.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
=======
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="CEU Candidate Verification Portal" />
    <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
    <title>CEU CAVEPortal</title>
    <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
    <link rel="icon" type="image/x-icon" href="resource/img/tab-icon.png">
    <link href="resource/css/index.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
>>>>>>> Stashed changes

</head>

<body class="d-flex flex-column h-100">
<<<<<<< Updated upstream
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="http://malolos.ceu.edu.ph">
                        <img src="resource/img/logo.png" alt="" width="230" height="65" class="d-inline-block align-top"/>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Alumni Verification</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Check Status</a></li>
                            <li class="nav-item"><a class="nav-link" href="#esco-world">Escolarians Around the World</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="login.php">Log in</a></li>
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
=======
    <main class="flex-shrink-0" id="main">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">
                    <img src="resource/img/logo.png" alt="" width="230" height="65"
                        class="d-inline-block align-top" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Alumni Verification</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Check Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="#esco-world">Escolarians Around the World</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="login.php">Log in</a></li>
                            </ul>
                        </li>
                    </ul>
>>>>>>> Stashed changes
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-lg-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-12 col-xl-10 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">The CEU Candidate Verification Portal</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Managed by the Centro Escolar Univeristy office
                                of the Registrar.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="login.php"
                                    style="background-color: #f04e98; border-color: #f04e98; ">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="https://www.ceu.edu.ph/">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="resource/img/scholar1.png" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Blog preview section-->
        <section class="pt-5 bg-new" id="esco-world">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder esco">Escolarians Around the World!</h2>
                            <p class="lead fw-normal caption-world text-muted mb-5">It's amazing how these successful
                                people benchmarked their success and shared it with the rest of the world.</p>
                        </div>
                    </div>
                </div>
                <div>

                    <p class="pb-5">Use the <code>+</code>/ <code>-</code> keys to zoom and the arrow keys to move.</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            <?php require_once 'maps.php'?>
                            </div>

                        </div>
                            
                        </div>

                    </div>

                    <!-- Log In-->
                    <aside class="bg-primary bg-gradient p-4 p-sm-5 mt-5">
                        <div
                            class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Inquire for an account now!</div>
                                <div class="text-white-50">Feel free to send us your email for your log in credentials.
                                </div>
                            </div>
                            <div class="ms-xl-4">
                                <?php 
                            if(!empty($_POST)){
                            $inquiry = new inquiry($_POST['emails']);
                            }
                            ?>
                                <form method="POST" action="">
                                    <div class="input-group mb-2">
                                        <input class="form-control" type="text" placeholder="Email address"
                                            name="emails" autocomplete="off" />
                                        <input type="hidden" name="Token" value="<?php echo Token::generate();?>" />
                                        <input class="btn btn-outline-light" type="submit" value="Inquire">
                                    </div>
                                    <div class="small text-white-50">We care about privacy, and will never share your
                                        data.</div>

                                </form>

                            </div>
                        </div>
                    </aside>

                </div>
        </section>
    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><strong>Centro Escolar
                            University</strong>&nbsp&nbsp&nbsp&nbspMariano | Gita | Tuazon | Valencia | Bolasoc </div>
                </div>
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
    <!-- Bootstrap core JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
        src="https://rawgit.com/DanielHoffmann/jquery-svg-pan-zoom/master/compiled/jquery.svg.pan.zoom.js"></script>
    <script src="resource/js/map.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>