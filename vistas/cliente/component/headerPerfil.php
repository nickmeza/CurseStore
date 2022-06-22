<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/icon.png" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/selectbox/css/jquery.selectbox.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
  <!-- LIBRARY FONT-->
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-svg/css/Glyphter.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- LIBRARY CSS-->
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/css/header.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/animate/animate.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">

  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/media-element/build/mediaelementplayer.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>/publico/css/header_admin.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>/publico/js/icons.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>perfil-cursos</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top" style="margin-bottom:0px !important">
    <button id="sidebarCollapse" class="btn navbar-btn">
      <i class="fas fa-lg fa-bars"></i>
    </button>
    <a href="">
      <div class="logo">
        <img src="https://logodownload.org/wp-content/uploads/2019/07/udemy-logo.png" onclick="window.location.href=url+'views/Inicio.php'">
        <a href="<?php echo $GLOBALS['BASE_URL'] ?>views/Inicio.php" class="header_logo">Cudesi-Projects</a>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="#">
            <i class="fas fa-sign-out-alt"></i>
            LogOut<span class="sr-only">(current) </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="#">
            <i class="fas fa-id-card"></i>Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">

        <?php
        if (isset($_SESSION['user'])) { ?>
          <h3><i class="fas fa-user"></i><?php echo $_SESSION["user"] ?></h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="<?php echo $GLOBALS['BASE_URL'] ?>perfil"><i class="fas fa-home"></i>Perfil</a>
        </li>
        <li>
          <a href="<?php echo $GLOBALS['BASE_URL'] ?>perfil/aprendizaje"><i class="fas fa-clipboard"></i>Aprendizaje</a>
        </li>
        <li>
          <a href="<?php echo $GLOBALS['BASE_URL'] ?>perfil/favoritos"><i class="fas fa-user-cog"></i>Favoritos</a>
        </li>
      </ul>
    </nav>

    <div id="content">
    <?php }
