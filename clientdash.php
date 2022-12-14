<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
isLogin();
$user = new user();
isClient($user->data()->groups);
$viewtable = new viewtable();
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
        <link href="vendor/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="vendor/img/favicon.png" rel="icon">
        <link href="vendor/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/css/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/css/quill.snow.css" rel="stylesheet">
        <link href="vendor/css/quill.bubble.css" rel="stylesheet">
        <link href="vendor/css/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
        <link href="vendor/css/style.css" rel="stylesheet">
        <script src="vendor/js/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script> -->
        

</head>
<body class="d-flex flex-column h-100">
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between"> <a href="clientdashhh.html" class="logo d-flex align-items-center"> <img src="resource/img/CAVElogo.png" alt=""> <span class="d-none d-lg-block">Client</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link " href="clientdashhh.html"> <i class="bi bi-grid"></i><span>Dashboard</span></a></li>
            <li class="nav-heading">Pages</li>
            <li class="nav-item"> <a class="nav-link collapsed" href="clientprofile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="logout.php"> <i class="bi bi-box-arrow-in-right"></i> <span>Log out</span> </a></li>
        </ul>
    </aside>
    <main id="main" class="main">
        <div class="pagtitle">
            <h1>Dashboard</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="clientdashhh.html">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="row">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">Recent Applications <span>| Today</span></h5>
                              <a href="regform.php" type="btn">Request New Verification</a>
                              <?php $viewtable->viewData_client()?>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="card">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">Reports <span>/Today</span></h5>
                              <div id="reportsChart"></div>
                              <script>document.addEventListener("DOMContentLoaded", () => {
                                 new ApexCharts(document.querySelector("#reportsChart"), {
                                    series: [{
                                       name: 'Manila',
                                       data: [31, 40, 28, 51, 42, 82, 56],
                                    }, {
                                       name: 'Makati',
                                       data: [11, 32, 45, 32, 34, 52, 41]
                                    }, {
                                       name: 'Malolos',
                                       data: [15, 11, 32, 18, 9, 24, 11]
                                    }],
                                    chart: {
                                       height: 350,
                                       type: 'area',
                                       toolbar: {
                                          show: false
                                       },
                                    },
                                    markers: {
                                       size: 4
                                    },
                                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                    fill: {
                                       type: "gradient",
                                       gradient: {
                                          shadeIntensity: 1,
                                          opacityFrom: 0.3,
                                          opacityTo: 0.4,
                                          stops: [0, 90, 100]
                                       }
                                    },
                                    dataLabels: {
                                       enabled: false
                                    },
                                    stroke: {
                                       curve: 'smooth',
                                       width: 2
                                    },
                                    xaxis: {
                                       type: 'datetime',
                                       categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                    },
                                    tooltip: {
                                       x: {
                                          format: 'dd/MM/yy HH:mm'
                                       },
                                    }
                                 }).render();
                                 });
                              </script> 
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="card top-selling overflow-auto">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                  </div>
                     <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Centro Escolar University</span></h5>
                        <div class="news">
                           <div class="post-item clearfix">
                              <img src="resource/img/news-1.jpg" alt="">
                              <h4><a href="https://www.ceu.edu.ph/news-events/383?ceu-school-of-nursing-gets-external-funding-for-research-on-mobile-diabetes-self-management-education">CEU School of Nursing gets External Funding</a></h4>
                              <p>The Centro Escolar University School of Nursing Gets External Funding for Research on Mobile Diabetes Self-Management Education</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="resource/img/news-2.jpg" alt="">
                              <h4><a href="https://www.ceu.edu.ph/news-events/380?ceu-annual-stockholders-meeting-2022-click-here">CEU Annual Stockholders' Meeting 2022</a></h4>
                              <p>The Centro Escolar University is holding their annual stockholders meeting 2022, In line with this...</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="resource/img/news-3.jpg" alt="">
                              <h4><a href="https://www.ceu.edu.ph/news-events/375?ceu-malolos-named-outstanding-hei-for-covid-19-vaccination-program">CEU Malolos Named Outstanding HEI for COVID-19 Vaccination Program</a></h4>
                              <p>Centro Escolar University Malolos was recognized as one of the sixteen Outstanding Higher Education Institutions for the COVID-19...</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="resource/img/news-4.jpg" alt="">
                              <h4><a href="https://www.ceu.edu.ph/news-events/376?ceu-scorpions-basketball-team-wins-big-in-2022-ucbl-invitational-tournament">CEU Scorpions Basketball Team Wins Big in 2022 UCBL Invitational Tournament</a></h4>
                              <p>Centro Escolar University Basketball Team won 3rd Place Overall in the 2022 PG Flex Linoleum Universities and Colleges Basketball League (UCBL) Invitational Tournament after defeating the Adamson Soaring Falcons.</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="resource/img/news-5.jpg" alt="">
                              <h4><a href="https://www.ceu.edu.ph/news-events/381?ceu-dentistry-and-medtech-programs-granted-ched-safety-seal">CEU Dentistry and MedTech Programs Granted CHED Safety Seal</a></h4>
                              <p>Centro Escolar University received Safety Seal Certification for its Dental Medicine and Medical Technology programs from the Commission on Higher Education as an affirmations...</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
    </main>



        <!-- Insert content here -->
        

       

        <!-- content end -->
        

        <!-- Footer-->
        <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
         <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
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
        
      
</body>
</html>
