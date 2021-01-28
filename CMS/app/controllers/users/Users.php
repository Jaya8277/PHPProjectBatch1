<?php
@session_start();

// include_once("app/config/database.php");
function login($method, $action) {
    if($method === 'get' && ($action === 'login' || $action === '')) {
<<<<<<< Updated upstream
=======
        $title = "Login Page";
>>>>>>> Stashed changes
        include_once("app/views/layouts/header-view.php");
        include_once("app/views/users/login-view.php");
        include_once("app/views/layouts/footer-view.php");
        exit();
    }else if($method === 'post' && $action === 'login') {
        include_once("app/models/users/users-Model.php");
        $login_status = setLogin();
<<<<<<< Updated upstream
        if($login_status) // Login Success
=======
        if($login_status)// Login Success
>>>>>>> Stashed changes
            header("Location: ?");
        else{
            header("Location: ?module=users&action=login&error=Invalid username and password.");
        }
       // die("Successfully loggedin.");
    }
}


function register($method, $action){
    if($method === 'get' && $action === 'register') {
        $token = (rand(10,10000000000));
        $_SESSION['token'] = $token;
        include_once("app/views/users/registration-view.php");
        exit();
    }else if($method === 'post' && $action === 'register') {
        include_once("app/models/users/users-Model.php");

         setRegister();
        echo "<pre>"; print_r($_REQUEST);die;
    }
}


function profile($method, $action){
    if($method === 'get'){
<<<<<<< Updated upstream
        include_once("app/models/users/users-Model.php");

        $profile_details = getProfile();
        //include_once("app/views/layouts/header-view.php");
        include_once("app/views/users/profile-view.php");
       // include_once("app/views/layouts/footer-view.php");
=======
        include_once("app/models/Users/Users-Model.php");

        $profile_details = getProfile();
        //include_once("app/views/layouts/header.php");
        include_once("app/views/users/profile-view.php");
       // include_once("app/views/layouts/footer.php");
>>>>>>> Stashed changes
        exit();
    }else if($method ==='post'){
        fileUpload();
        die("done");
<<<<<<< Updated upstream
        include_once("app/models/users/users-Model.php");
=======
        include_once("app/models/Users/Users-Model.php");
>>>>>>> Stashed changes
        if(setProfile()){
            header("Location: index.php?module=users&action=profile");
        }else{
            $message = " There is something error.";
            header("Location: index.php?module=users&action=editProfile&error=$message");
        }
        // echo "<pre>"; print_r($_REQUEST);die;
    }
}

function editProfile($method, $action){
    if($method === 'get'){
<<<<<<< Updated upstream
        include_once("app/models/users/users-Model.php");

        $profile_details = getProfile();
        //include_once("app/views/layouts/header-view.php");
        include_once("app/views/users/profile-edit-view.php");
        // include_once("app/views/layouts/footer-view.php");
=======
        include_once("app/models/Users/Users-Model.php");

        $profile_details = getProfile();
        //include_once("app/views/layouts/header.php");
        include_once("app/views/users/profile-edit.php");
        // include_once("app/views/layouts/footer.php");
>>>>>>> Stashed changes
        exit();
    }
}

function delete() {
    // delete
}

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
function logout() {
    session_destroy();
    header("Location: ?");
}

function fileUpload() {
<<<<<<< Updated upstream
    $upload_dir = "upload/abc.png";
=======
    $upload_dir = "upload/unnamed.png";
>>>>>>> Stashed changes
    $filename = $_FILES['profile_photo']['tmp_name'];
    //$uploadfile = $upload_dir . basename($_FILES['profile_photo']['name']);
   // echo $uploadfile.'<br>';
    echo $filename;
    move_uploaded_file($filename, $upload_dir);
}
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

?>