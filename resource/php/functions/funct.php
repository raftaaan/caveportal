<?php
function CheckSuccess($status){
    if($status =='Success'){
        echo '<div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                <b>Congratulations!</b> You have successfully submitted your request!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}

function Success(){
    echo '<div class="alert alert-success alert-dismissible fade show col-12" role="alert">
            <b>Congratulations!</b> You have successfully registered Your Account!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
function loginError(){
        echo '<div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                <b>Error!</b> Invalid Username or Password
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
function curpassError(){
        echo '<div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                <b>Error!</b> Invalid Current Password
            </div>';
        }

 function pError($error){
    echo '<div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
            <b>Error!</b> '.$error.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

function rError($error){
    echo '<div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
        <b>Error!</b> '.$error.'
            </div>';
        }

function vald(){
     if(Input::exists()){
      if(Token::check(Input::get('Token'))){
         if(!empty($_POST['College'])){
             $_POST['College'] = implode(',',Input::get('College'));
         }else{
            $_POST['College'] ="";
         }
        $validate = new Validate;
        $validate = $validate->check($_POST,array(
            'username'=>array(
                'required'=>'true',
                'min'=>4,
                'max'=>20,
                'type1'=>'text',
                'unique'=>'tbl_accounts'
            ),      
            'password'=>array(
                'required'=>'true',
                'min'=>6,
            ),
            'ConfirmPassword'=>array(
                'required'=>'true',
                'matches'=>'password',
            ),
            'fullName'=>array(
                'required'=>'true',
                'min'=>2,
                'max'=>50,
                'type2'=>'text'
            ),
            'email'=>array(
<<<<<<< Updated upstream
                'required'=>'true'
            ),
            'College'=>array(
                'required'=>'true'
=======
                'required'=>'true',
                'type'=>'email'
                
            ),
            'company'=>array(
                'required'=>'true',
                'min'=>2,
                'type2'=>'text'
>>>>>>> Stashed changes
            )));

            if($validate->passed()){
                $user = new user();
                $salt = Hash::salt(32);
                try {
                    $user->create(array(
                        'username'=>Input::get('username'),
                        'password'=>Hash::make(Input::get('password'),$salt),
                        'salt'=>$salt,
                        'name'=> Input::get('fullName'),
                        'joined'=>date('Y-m-d H:i:s'),
<<<<<<< Updated upstream
                        'groups'=>1,
                        'colleges'=> input::get('College'),
                        'email'=> input::get('email'),
=======
                        'groups'=>2,
                        'email'=> Input::get('email'),
                        'company'=> Input::get('company'),
>>>>>>> Stashed changes
                    ));

                    $user->createC(array(
                        'checker'=> Input::get('fullName'),

                    ));
                    $user->createV(array(
                        'verifier'=> Input::get('fullName'),
                    ));

                    $user->createR(array(
                        'releasedby'=> Input::get('fullName'),

                    ));
                } catch (Exception $e) {
                    die($e->getMessage());
                }

                Success();
<<<<<<< Updated upstream
=======
                header("refresh:2; login.php"); 

>>>>>>> Stashed changes
            }else{
                foreach ($validate->errors()as $error) {
                    header('location: clientprofile.php#profile-edit');
                pError($error);
                }
            }
        }
            }else{
                return false;
            }
            

        }
// pag di gumana idelete
        
// hanggang dito ang tatanggalin

        function logd(){
            if(Input::exists()){
                if(Token::check(Input::get('token'))){
                    $validate = new Validate();
                    $validation = $validate->check($_POST,array(
                        'username' => array(
                            'required'=>'true',
                            'type2'=>'text'
                    ),
                        'password'=> array(
                            'required'=>'true'
                        )));
                    if($validation->passed()){
                        $user = new user();
                        $remember = (Input::get('remember') ==='on') ? true :false;
                        $login = $user->login(Input::get('username'),Input::get('password'),$remember);
                        if($login){
                            if($user->data()->groups == 1){
                                 Redirect::to('admindash.php');
                            }else if($user->data()->groups == 2){
                                Redirect::to('clientdash.php');
                           }else{
                                 Redirect::to('template.php');
                                echo $user->data()->groups;
                            }
                        }else{
                            loginError();
                        }
                    }else{
                        foreach($validation->errors() as $error){
                            echo $error.'<br />';
                        }
                    }
                }
            }
        }

        function isLogin(){
            $user = new user();
            if(!$user->isLoggedIn()){
                Redirect::to('login.php');
            }
        }

function profilePic(){
    $view = new view();
    if($view->getdpSRA()!=="" || $view->getdpSRA()!==NULL){
        echo "<img class='rounded-circle profpic img-thumbnail ml-3' alt='100x100' src='data:".$view->getMmSRA().";base64,".base64_encode($view->getdpSRA())."'/>";
    }else{
        echo "<img class='rounded-circle profpic img-thumbnail' alt='100x100' src='resource/img/user.jpg'/>";
    }
}

function updateProfile(){
    if(Input::exists()){
        if(!empty($_POST['College'])){
            $_POST['College'] = implode(',',Input::get('College'));
        }else{
           $_POST['College'] ="";
        }

        $validate = new Validate;
        $validation = $validate->check($_POST,array(
            'username'=>array(
                'min'=>4,
                'max'=>20,
                'type1'=>'text',
                
            ),
            'fullName'=>array(
                'min'=>2,
                'max'=>50,
                'type2'=>'text'
            ),
            'email'=>array(
                'min'=>5,
                'max'=>50,
                'type'=>'email'
            ),
            'company'=>array(
                'min'=>2,
                'type2'=>'text'
            )));

            if($validate->passed()){
                $user = new user();

                try {
                    $user->update(array(
                        'username'=>Input::get('username'),
                        'name'=> Input::get('fullName'),
                        'email'=> Input::get('email'),
                        'company'=> Input::get('company')
                    ));
                    echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Profile has been updated',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'clientprofile.php';
                         }
                       });
                    </script>";
                } catch (Exception $e) {
                    die($e->getMessage());
                }
            }else{
                foreach ($validation->errors()as $error) {
                rError($error);
                }
                
        }

    }
}

function changeP(){
    if(Input::exists()){
        $validate = new Validate;
        $validation = $validate->check($_POST,array(
            'password_current'=>array(
                'required'=>'true',
            ),
            'password'=>array(
                'required'=>'true',
                'min'=>6,
            ),
            'ConfirmPassword'=>array(
                'required'=>'true',
                'matches'=>'password'
            )));

            if($validate->passed()){
                $user = new user();
                if(Hash::make(Input::get('password_current'),$user->data()->salt) !== $user->data()->password){
                    curpassError();
                }else{
                    $user = new user();
                    $salt = Hash::salt(32);
                    try {
                        $user->update(array(
                            'password'=>Hash::make(Input::get('password'),$salt),
                            'salt'=>$salt
                        ));
                        echo "<script type='text/javascript'>
                        swal.fire({ 
                        icon: 'success',
                        title: 'Current Password has been Updated, Please Login Again, Thank You!',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                        
                        }).then(okay => {
                          if (okay) {
                            
                           window.location.href = 'logout.php';
                         }
                       });
                        </script>";
                    } catch (Exception $e) {
                        die($e->getMessage());
                    }
                }
            }else{
                foreach ($validation->errors()as $error) {
                rError($error);
                }

        }
    }
}
function isAdmin($user) {
    if ($user === "1") {
        //do what it is supposed to do
    } else {
        header("HTTP/1.1 403 Forbidden");
        exit;
    }
}
function isClient($user) {
    if ($user === "2") {
        // do what it is supposed to do
    } else {
        header("HTTP/1.1 403 Forbidden");   
        exit;
    }
}

function deleteT(){
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteClient()){
            echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Data has been Successfully Deleted',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'admindash.php';
                         }
                       });
                    </script>";
        }
    }
}

function approvedClient(){
    if(!empty($_GET['approved'])){
            $approved = new approved($_GET['approved']);
            $approved->approvedRemarks();
            echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Data has been Successfully Denied',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'admindash.php';
                         }
                       });
                    </script>";
    }
}
<<<<<<< Updated upstream
function onholdClient(){
    if(!empty($_GET['onholdstatus'])){
        $edit = new edit($_GET['onholdstatus']);
        if($edit->editOnhold()){
    }
    else {
    }
    }
}
=======

>>>>>>> Stashed changes
function deniedClient(){
    if(!empty($_GET['denied']) && !empty($_POST['remarks'])){
        if (trim($_POST['remarks']) == '') {
            $message = "Please put Remarks!";
            echo "<script>alert('$message');</script>";
        }else if(!ctype_alpha(str_replace(' ', '', $_POST['remarks']))){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Entered Remarks is not Applicable',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else {
            $denied = new denied($_GET['denied'],$_POST['remarks']);
            $denied->DeniedRemarks();
            echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Data has been Successfully Denied',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'admindash.php';
                         }
                       });
                    </script>";
        }
    }
}

function deleteClient(){
    if(!empty($_GET['delete'])){
        $edit = new edit($_GET['delete']);
        if($edit->deleteClient()){
            echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Data has been Successfully Deleted',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'admindash.php';
                         }
                       });
                    </script>";
        }
    }
}

function holdRemarks(){
    if(!empty($_GET['hold']) && !empty($_POST['remarks'])){
        if ($_POST['remarks'] == '') {
            $message = "Please put Remarks!";
            echo "<script>alert('$message');</script>";
        }else if(!ctype_alpha(str_replace(' ', '', $_POST['remarks']))){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Entered Remarks is not Applicable',
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 2000
            })
            </script>";
        }else {
            $hold = new hold($_GET['hold'],$_POST['remarks']);
            $hold->OnholdRemarks();
            echo "<script type='text/javascript'>
                    swal.fire({ 
                        icon: 'success',
                        title: 'Data has been Successfully put On Hold',
                        showConfirmButton: false,
                        timerProgressBar: true,
                        timer: 2000
                    }).then(okay => {
                          if (okay) {
                           window.location.href = 'admindash.php';
                         }
                       });
                    </script>";
        }
    }
}
 ?>
