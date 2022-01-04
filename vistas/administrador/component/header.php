<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>/publico/css/header_admin.css">
    <title>admin-cursos</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">CodingLab</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/categoria">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Categoria</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/categoria">Categoria</a></li>
                </ul>
            </li>
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
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Promociones</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">Promociones</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/promocion">Gst. Banner</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/descuento">Gst. Descuentos</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin">Gst. Lista de Precios</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Ventas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">Ventas</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/ventas">Lista de Ventas</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/historial">Historial de Usuario</a></li>
                    <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/solicitudes">Confirmar Ventas</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/usuario/cliente">
                        <i class='bx bx-book-alt'></i>
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
                <a href="<?php echo $GLOBALS['BASE_URL'] ?>admin/tienda">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Empresa</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo $GLOBALS['BASE_URL'] ?>admin/tienda">Empresa</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content" style="padding-top: 20px;">
            <i class='bx bx-menu'></i>
            <span class="text">Drop Down Sidebar</span>
        </div>
        <div class="contenido_admin">