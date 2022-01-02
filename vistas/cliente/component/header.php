<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edugate | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- LIBRARY CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/css/header.css">
    <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/card-ofert.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/color-1.css');
        }
    </script>
</head>

<body>
    <!-- HEADER-->
    <div class="header">
        <div class="space"></div>
        <a href="#" class="logo"><img src="https://images.squarespace-cdn.com/content/v1/5f62b687cae73d2408a06539/1602807735303-4W086W30YX6B3D23N04L/image-asset.png" alt="" class="logo_cursos" style="width:100px"></a>
        <div class="search">
            <div class="icon"><i class="bi bi-search search-icon"></i></div>
            <div class="input">
                <input type="text" name="" id="mysearch" placeholder="Escriba aqui lo que buscara">
            </div>
            <span class="clean" onclick="input_clear()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </span>
        </div>
        <a href="#" class="nav-link"><span class="nav-link-letter">Contáctanos</span></a>
        <a href="#" class="nav-link">
            <span class="nav-link-letter">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
            </span>
        </a>
        <a href="#" class="nav-link nav-link-border nav-link-border-signin"><span class="nav-link-letter signin">Iniciar sesión</span></a>
        <a href="#" class="nav-link nav-link-border nav-link-border-register"><span class="nav-link-letter register">Regístrate</span></a>
        <div class="space"></div>
    </div>

    <!-- <div style="height: 5000000px;"></div> -->