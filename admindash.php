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
$view = new view();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="CEU Candidate Verification Portal" />
        <meta name="author" content="Mariano R.J., Gita J.N., Tuazon M., Valencia E.C." />
        <!-- <meta http-equiv="refresh" content="300; url=login.php"> -->
        <title>CEU CAVEPortal</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="resource/css/admindash.css" rel="stylesheet" />

        <link href="vendor/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="vendor/img/favicon.png" rel="icon">
        <link href="resource/img/tab-icon.png" rel="icon">
        <link href="vendor/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/css/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/css/quill.snow.css" rel="stylesheet">
        <link href="vendor/css/quill.bubble.css" rel="stylesheet">
        <link href="vendor/css/style.css" rel="stylesheet">
        <link href="vendor/css/remixicon.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="sweetalert2.min.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
        <link href="vendor/css/style.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="vendor/js/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>

</head>
<body class="d-flex flex-column h-100">
<header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
         <i class="bi bi-list toggle-sidebar-btn mx-3"></i>
         <a href="clientdash.php" class="logo d-flex align-items-center"> <img src="resource/img/CAVElogo.png" alt="">
         <span class="d-none d-lg-block">Admin</span> </a>
      </div>
   </header>
    <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link collapsed" href="admindash.php"> <i class="bi bi-grid"></i> <span>My Dashboard</span> </a></li>
            <li class="nav-heading">Options</li>
            <li class="nav-item"> <a class="nav-link collapsed" href="logout.php"> <i class="bi bi-box-arrow-in-right"></i> <span>Log out</span> </a></li>
         </ul>
      </aside>
    <main id="main" class="main">
        <div class="pagtitle" data-aos="fade-right" data-aos-duration="1000">
            <h1>Dashboard</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admindash.php">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </nav>
        </div>
   
        <section class="section dashboard" data-aos="fade-right" data-aos-duration="1000"    >
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                          
                           <ul class="nav nav-pills" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active"  href="admindash.php" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pending Application (<?php echo $view->pendingCount();?>)</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="approveddash.php" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Approved Application (<?php echo $view->approvedCount();?>) </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link " href="onholddash.php" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">On Hold Application (<?php echo $view->onHoldCount();?>)</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="denieddash.php" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Denied Application  (<?php echo $view->deniedCount();?>)</a>
                              </li>
                           </ul>
                           <div class="card-body">
                              <h5 class="card-title">Recent Applications <span>| Today</span></h5>
                              <?php $viewtable->viewPendingData();?>
                           </div>
                           
                        </div>
                     </div>
                     
                     
                  </div>
               </div>

                  </div>
               </div>
            </div>
         </section>
    </main>
    <!-- Footer-->
      <footer id="footer" class="footer">
         <div class="copyright"><strong>Centro Escolar University</span></strong>   Office of the University Registrar</div>
         <div class="credits">Manila | Malolos| Makati</div>
         <div class="credits"><small>Mariano R.J. | Gita J.N. | Tuazon M. | Valencia E.C. | Bolasoc R.C.</small></div>
      </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="resource/js/scripts.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        <script src="vendor/js/apexcharts.min.js"></script>
         <script src="vendor/js/bootstrap.bundle.min.js"></script>
         <script src="vendor/js/chart.min.js"></script>
         <script src="vendor/js/echarts.min.js"></script>
         <script src="vendor/js/quill.min.js"></script>
         <script src="vendor/js/simple-datatables.js"></script>
         <script src="vendor/js/tinymce.min.js"></script>
         <script src="vendor/js/validate.js"></script>
         <script src="vendor/js/main.js"></script> 
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
         AOS.init();
         </script>
        
</body>
>>>>>>> Stashed changes
</html>