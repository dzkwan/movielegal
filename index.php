<?php
session_start();
$user = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : '';
$role = isset($user['role']) ? $user['role'] : '';
require_once 'conn_db.php';
require_once 'models/Category.php';
require_once 'models/Genre.php';
require_once 'models/Theater.php';
require_once 'models/Movie.php';
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movielegal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- preloader -->
    <!-- <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="img/preloader.svg" alt="">
            </div>
        </div>
    </div> -->
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- question mark -->
    <button type="button" class="question" data-toggle="popover" data-trigger="focus"
        title="click outside the button to dismiss the pop"
        data-content="fitur Booking, Pagination, dan Newsletter belum berfungsi"><i class="fas fa-bell"></i></button>

    <?php include_once 'layout/navbar.php'; ?>

    <!-- main-area -->
    <main>

        <?php include_once 'layout/header.php'; ?>

        <?php
        $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
        if($hal == 'genre_form_add' || $hal == 'category_form_add' || $hal == 'theater_form_add' || $hal == 'movie_form_add'){
            include_once 'views/form_add.php';
        }elseif($hal == 'genre_form_edit' || $hal == 'category_form_edit' || $hal == 'theater_form_edit' || $hal == 'movie_form_edit'){
            include_once 'views/form_edit.php';
        }elseif($hal == 'movie_detail'){
            include_once 'views/detail.php';
        }elseif(!empty($hal)){
            if($hal == 'movie' || $hal == 'genre' || $hal == 'category' || $hal == 'theater' || $hal == 'contact'){
            include_once 'views/'.$hal.'.php';
            }else{
                include_once 'views/403.php';
            }
        }else{
            include_once 'layout/home.php';
        }
        ?>

        <?php include_once 'layout/newsletter.php'; ?>

    </main>
    <!-- main-area-end -->

    <?php include_once 'layout/footer.php'; ?>

    <!-- JS here -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.odometer.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>

</html>