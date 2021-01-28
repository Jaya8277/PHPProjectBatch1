<?php

function getUsersList($method, $action) {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $page = (isset($_GET['page']) && ($_GET['page'] <= 1)) ? 0 : @$_GET['page'];
<<<<<<< Updated upstream
    $per_page = 2;
    $start_limit = $page * $per_page;
    $end_limit = $per_page;
    $users_list = getUsers($start_limit, $end_limit);
=======
    $per_page = 3;
    $start_limit = $page * $per_page;
    $end_limit = $per_page;
    $users_list = getUsers($start_limit, $end_limit);

>>>>>>> Stashed changes
    $users_count = getUsersCount();
    $total_pages = ceil($users_count/$per_page);
    include_once("app/admin/views/users/users-list-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
<<<<<<< Updated upstream
=======
    
>>>>>>> Stashed changes
}

// Delete single record
function setDeleteUsers() {
    include_once("app/admin/models/users/users-Model.php");
    deleteUser();
    header("Location: ?admin=show&module=users&action=list");
}

// View single record
function getUsersView() {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $user_details = getUserDetails();
    //echo "<pre>";print_r($user_details);
    include_once("app/admin/views/users/user-details-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
    die("View User Data");
}

// Update single record
function setEditUsers() {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $user_details = getUserDetails();
    //echo "<pre>";print_r($user_details);
    include_once("app/admin/views/users/user-edit-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
    die("View User Data");
}

// Update single record
function setUsersUpdate() {
    include_once("app/admin/models/users/users-Model.php");
    $user_details = setUserDetails();
<<<<<<< Updated upstream
=======
    if(setUserDetails()){
        // die("ok1");
        include_once("app/admin/models/users/users-Model.php");
        // die("ok");
         header("Location: ?admin=show&module=users&action=view&record=32");
        die("update done");
    
     }else{
        $message = " There is something error.";
        header("Location:?admin=show&module=users&action=edit&record&error=$message");
    }
>>>>>>> Stashed changes
    die("View User Data");
}

?>