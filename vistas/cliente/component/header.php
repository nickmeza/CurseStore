<?php session_start(); ?>
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
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/nosotros.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/carrito.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/product.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/detalle-curso.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/login.css">
    <!-- STYLE CSS    -->
    <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/color-1.css');
        }
        function logout(){

       
        $.ajax({
            type: 'GET',
            url: url + "admin/usuario/cliente/logout",
            success: function(msg) {
                console.log(msg)
                location.href = url ;
            }
        });
        }
    </script>
</head>

<body>
    <!-- HEADER-->
    
    <header>
        <div class="logo">
            <img src="https://logodownload.org/wp-content/uploads/2019/07/udemy-logo.png" onclick="window.location.href=url+'views/Inicio.php'">
            <a href="<?php echo $GLOBALS['BASE_URL'] ?>views/Inicio.php" class="header_logo">Cudesi-Projects</a>
        </div>
        <nav class="nav_menu" id="nav-menu">
            <i class="bi bi-x header__close" id="close-menu"></i>
            <ul class="nav_list">
                <?php
                if (isset($buscador)) {
                ?>  
                <?php $buscador = str_replace("%20", " ", $buscador); ?>
                    <li class="nav_item"><input type="text" name="" id="" placeholder="buscar" onkeydown="search(this)" value="<?php echo $buscador ?>"></li>
                <?php } else { ?>
                    <li class="nav_item"><input type="text" name="" id="" placeholder="buscar" onkeydown="search(this)"></li>
                <?php } ?>
                <li class="nav_item"><a href="<?php echo $GLOBALS['BASE_URL'] ?>" class="nav_link">Inicio</a></li>
                <li class="nav_item"><a href="<?php echo $GLOBALS['BASE_URL'] ?>nosotros" class="nav_link">Nosotros</a></li>
                <li class="nav_item"><a href="<?php echo $GLOBALS['BASE_URL'] ?>carrito" class="nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a></li>
                    <?php 
                     if (isset($_SESSION['user']))  {?>
                        <div class="dropdown">
                    <button class="nav_item nav_item_login nav_item_iniciar dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION["user"]?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Mis Cursos</a>
                        <a class="dropdown-item" href="#">Favoritos</a>
                        <a class="dropdown-item" onclick="logout()">Cerrar sesión</a>
                    </div>
                    </div>
                     <?php } else {

                      ?>
                <li class="nav_item nav_item_login nav_item_iniciar"><a href="<?php echo $GLOBALS['BASE_URL'] ?>login" class="nav_link nav_link_iniciar">Iniciar sesíon</a></li>
                 <li class="nav_item nav_item_login nav_item_register"><a href="<?php echo $GLOBALS['BASE_URL'] ?>registrar" class="nav_link nav_link_register">Regístrate</a></li>
               <?php } ?> 
        </ul>
        </nav>
        <i class="bi bi-list header__toggle" id="toggle-menu"></i>
        <div class="" id="container_real_time">
            <div class="datos">

            </div>
        </div>
    </header>