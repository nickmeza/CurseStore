<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- LIBRARY CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/media-element/build/mediaelementplayer.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>/publico/css/header_admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>admin-cursos</title>
</head>

<body>
    <div class="sidebar__admin close__admin">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">CodingLab</span>
        </div>
        <ul class="nav-links">

            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/curso">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Cursos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/curso">Cursos</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/curso">Lista Cursos</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/crear_curso">Crear Curso</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/categoria">
                        <i class='bx bx-category'></i>
                        <span class="link_name">Categoria</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu ">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/categoria"> Categoría</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/categoria">Lista de categorías</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Promociones</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">Promociones</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">Banner</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/descuento">Descuentos</a></li>

                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">
                        <i class='bx bx-shopping-bag'></i>
                        <span class="link_name">Ventas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">Ventas</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">Lista de Ventas</a></li>

                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/solicitudes">Confirmar Ventas</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/usuario/cliente">
                        <i class='bx bx-user-circle'></i>
                        <span class="link_name">Usuario</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/usuario/cliente">Usuario</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/usuario/cliente">Estudiantes</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/usuario/profesor">Profesores</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/tienda">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">Empresa</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/empresa">Empresa</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/correos">Correos</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/metodo_pagos">Método de pagos</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content" style="padding-top: 20px;">
            <i class='bx bx-menu'></i>
            <span class="text">Administrador</span>
        </div>
        <div class="contenido_admin">