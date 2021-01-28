<!Doctype html>
<html>

<head>
<<<<<<< Updated upstream
    <title><?php if(@$title)  { echo $title;?> <?php } else {?>Home Page Page<?php }?></title>
=======
    <title><?php if(@$title)  { echo $title;?> <?php } else {?>Home Page <?php }?></title>
>>>>>>> Stashed changes
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/frontend/bootstrap/bootstrap.css" />

    <script src="assets/frontend/bootstrap/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    <?php if(@$_GET['module'] == 'users' && @$_GET['action'] == 'login') { ?>
        <link rel="stylesheet" href="assets/frontend/css/login.css" />
    <?php } elseif(@$_GET['module'] == 'aboutus' && @$_GET['action'] == 'details') {?>
        <link rel="stylesheet" href="assets/frontend/css/about.css" />
<<<<<<< Updated upstream
=======
    <?php } elseif(@$_GET['module'] == 'department' && @$_GET['action'] == 'details') {?>
        <link rel="stylesheet" href="assets/frontend/css/department.css" />    
    <?php } elseif(@$_GET['module'] == 'gallery' && @$_GET['action'] == 'details') {?>
        <link rel="stylesheet" href="assets/frontend/css/gallery.css" />    
    <?php } elseif(@$_GET['module'] == 'registration' && @$_GET['action'] == 'details') {?>
        <link rel="stylesheet" href="assets/frontend/css/registration.css"/>  
    <?php } elseif(@$_GET['module'] == 'contact' && @$_GET['action'] == 'contact') {?>
        <link rel="stylesheet" href="assets/frontend/css/contact.css"/> 
    <?php } elseif(@$_GET['module'] == 'studentcorner' && @$_GET['action'] == 'details') {?>
        <link rel="stylesheet" href="assets/frontend/css/studentcorner.css"/>  
    <?php } elseif(@$_GET['module'] == 'placement' && @$_GET['action'] == 'placement') {?>
        <link rel="stylesheet" href="assets/frontend/css/place.css"/>  
>>>>>>> Stashed changes
    <?php } else {?>
     <link rel="stylesheet" href="assets/frontend/css/index.css" />
    <?php } ?>
</head>

<body>
<section>

    <!---------------------------------------- Navigation Starts ---------------------------------->
    <div class="fixed-top">
        <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-12">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="https://www.facebook.com/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://twitter.com/explore"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.linkedin.com/login"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.printset.net/"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.gmail.com"><i
                                        class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
            <div class="container">
<<<<<<< Updated upstream
                <a class="navbar-brand" href="index.html" style="text-transform: uppercase;"> FREE COLLEGE</a>
=======
                <a class="navbar-brand" href="?" style="text-transform: uppercase;"> FREE COLLEGE</a>
>>>>>>> Stashed changes
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="?">Home </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=aboutus&action=details">About</a>
                        </li>

                        <li class="nav-item">
<<<<<<< Updated upstream
                            <a class="nav-link" href="studentcorner.html">Student Corner</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="department.html">Department</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="place.html">Placement</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                    <?php if(isLoggedIn()) { ?>
=======
                            <a class="nav-link" href="index.php?module=studentcorner&action=details">Student Corner</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=department&action=details">Department</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=placement&action=placement">Placement</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=gallery&action=details">Gallery</a>
                        </li>

                        <?php if(isLoggedIn()) { ?>
>>>>>>> Stashed changes
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=users&action=logout">Logout</a>
                        </li>

                        <li class="nav-item">
<<<<<<< Updated upstream
                            <a class="nav-link" href="index.php?admin=show&module=dashboard&action=index">Admin Panel</a>
=======
                        <a class="nav-link" href="index.php?admin=show&module=dashboard&action=index">Admin Panel</a>
>>>>>>> Stashed changes
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=users&action=login">Login</a>
                        </li>

                        <li class="nav-item">
<<<<<<< Updated upstream
                            <a class="nav-link" href="registration.html">Registration</a>
                        </li>
                    <?php } ?>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
=======
                            <a class="nav-link" href="index.php?module=registration&action=details">Registration</a>
                        </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=contact&action=contact">Contact</a>
>>>>>>> Stashed changes
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
<!------------------------------- Navigation ends ------------------------------ -->