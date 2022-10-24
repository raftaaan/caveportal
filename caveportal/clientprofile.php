
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
isLogin();  
$view = new view;
$user = new user();


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Users / Profile - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <link href="resource/css/clientdash.css" rel="stylesheet" />
      <link href="vendor/css/all.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="vendor/img/favicon.png" rel="icon">
      <link href="resource/img/tab-icon.png" rel="icon">
      <link href="vendor/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="vendor/img/favicon.png" rel="icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/css/bootstrap-icons.css" rel="stylesheet">
      <link href="vendor/css/boxicons.min.css" rel="stylesheet">
      <link href="vendor/css/quill.snow.css" rel="stylesheet">
      <link href="vendor/css/quill.bubble.css" rel="stylesheet">
      <link href="vendor/css/remixicon.css" rel="stylesheet">
      <link href="vendor/css/simple-datatables.css" rel="stylesheet">
      <link href="vendor/css/style.css" rel="stylesheet">
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between"> <a href="clientdash.php" class="logo d-flex align-items-center"> <img src="resource/img/CAVElogo.png" alt=""> <span class="d-none d-lg-block">Client</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
      </header>
      <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link collapsed" href="clientdash.php"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
            <li class="nav-heading">Pages</li>
            <li class="nav-item"> <a class="nav-link " href="clientprofile.php"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="logout.php"> <i class="bi bi-box-arrow-in-right"></i> <span>Log out</span> </a></li>
         </ul>
      </aside>
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="clientdash.php">Home</a></li>
                  <li class="breadcrumb-item">Users</li>
                  <li class="breadcrumb-item active">Profile</li>
               </ol>
            </nav>
         </div>
         <section class="section profile">
            <div class="row">
               <div class="col-xl-8">
                  <div class="card">
                     <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                           <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
                           <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button></li>
                           <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button></li>
                        </ul>
                        <div class="tab-content pt-2">
                           <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <h5 class="card-title">About</h5>
                              <p class="small fst-italic">This displays the profile Information of CAVE Portal Users</p>
                              <h5 class="card-title">Profile Details</h5>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">User ID</div>
                                 <div class="col-lg-9 col-md-8"><?php echo $user->data()->id?></div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Username</div>
                                 <div class="col-lg-9 col-md-8"><?php echo $user->data()->username?></div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                 <div class="col-lg-9 col-md-8"><?php echo $user->data()->name?></div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Email Address</div>
                                 <div class="col-lg-9 col-md-8"><?php echo $user->data()->email?></div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Date Joined</div>
                                 <div class="col-lg-9 col-md-8"><?php echo $user->data()->joined?></div>
                              </div>
                             
                           </div>
                           <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                              
                              <form method="POST">
                                 <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                       <img src="vendor/img/profile-img.jpg" alt="Profile">
                                       <div class="pt-2"> <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a></div>
                                    </div>
                                 </div>
                                 <?php updateProfile()?>
                                 <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9"> <input name="username" type="text" class="form-control" id="username"  value ="<?php escape($user->data()->username); ?>" autocomplete="no" placeholder="Username"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9"> <input name="fullName" type="text" class="form-control" id="fullName" value ="<?php escape($user->data()->name); ?>" placeholder="Full Name"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9"> <input name="email" type="email" class="form-control" id="Email" value ="<?php escape($user->data()->email); ?>" placeholder="Email Address" ></div>
                                 </div>
                                 <div class="text-center"> 
                                 <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />   
                                 <input type="submit" class="btn btn-primary" value="Save Changes"> 
                                 <a class="btn btn-danger" href="clientdash.php">Cancel</a></div>
                                 
                              </form>
                           </div>

                           <div class="tab-pane fade pt-3" id="profile-change-password">
                              <form method="POST">
                                 <?php changeP()?>
                                 <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-md-8 col-lg-9"> <input name="password_current" type="password" class="form-control" 
                                    value ="<?php echo Input::get('password_current');?>" id="currentPassword"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9"> 
                                       <input name="password" type="password" class="form-control" value ="<?php echo Input::get('password');?>" id="password">
                                       
                                    </div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="ConfirmPassword" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                    <div class="col-md-8 col-lg-9"> <input name="ConfirmPassword" type="password" class="form-control" id="renewPassword" value ="<?php echo Input::get('ConfirmPassword');?>" >
                                 </div>
                                 </div>
                                 <div class="text-center"> 
                                 <input type="hidden" name ="Token" value="<?php echo Token::generate();?>"/>
                                 <input type="submit" class="btn btn-primary" value="Change Password"></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
         <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
         <script>src="vendor/js/scripts.js"</script>
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