<<<<<<< Updated upstream
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
isLogin();
$user = new user();
isAdmin($user->data()->groups);
$viewtable = new viewtable();
// $approvedstatus = new approvedstatus();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="CEU Candidate Verification Portal" />
        <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
        <title>CEU CAVEPortal</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="resource/css/clientdash.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
        <link href="vendor/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
        <script src="vendor/js/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>

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
<body>
    <div class="container"><br>
    <h1>Admin Dashboard</h1>
</div>

        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewPendingData();?>
        </div>
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewOnHoldData();?>
        </div>
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewApprovedData();?>
        </div>  
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewDeniedData();?>
        </div>  
        <br>

 <!-- Footer-->
 <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Centro Escolar University     ||     Mariano | Gita | Tuazon | Valencia</div></div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="resource/js/scripts.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        
</body>
=======
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
isLogin();
$user = new user();
isAdmin($user->data()->groups);
$viewtable = new viewtable();
// $approvedstatus = new approvedstatus();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="CEU Candidate Verification Portal" />
        <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
        <title>CEU CAVEPortal</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="resource/css/clientdash.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
        <link href="vendor/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
        <script src="vendor/js/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>

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
<body>
    <div class="container"><br>
    <h1>Admin Dashboard</h1>
</div>

        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewPendingData();?>
        </div>
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewOnHoldData();?>
        </div>
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewApprovedData();?>
        </div>  
        <br>
        <div class="container mt-4 puff-in-center">
          <?php $viewtable->viewDeniedData();?>
        </div>  
        <br>

 <!-- Footer-->
 <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Centro Escolar University     ||     Mariano | Gita | Tuazon | Valencia</div></div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="resource/js/scripts.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        
</body>
>>>>>>> Stashed changes
</html>