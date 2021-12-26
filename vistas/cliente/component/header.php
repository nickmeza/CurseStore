<!DOCTYPE html>
<html lang="en">
<head><title>Edugate | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/color-1.css');
    }


    </script>
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>jalbornoz@cudesi.com.pe</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+84 909 015 345</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                <!-- <div class="group-sign-in"><a href="login.html" class="login">login</a><a href="register.html" class="register">register</a></div> -->
            </div>
        </div>
    </div>
</header>