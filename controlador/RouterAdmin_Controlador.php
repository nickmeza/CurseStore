<?php

class RoutesAdmin
{
    public static function index()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/Admin.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function curso($codigocurso)
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            $dataCategoria = Categoria_Modelo::getAll();

            $dataProfesores = Profesor_Modelo::getProfesorData();
            if (isset($codigocurso[3]) && strlen($codigocurso[3]) > 0) {
                include_once "./vistas/administrador/cursos/DetalleCurso.php";
            } else {
                include_once "./vistas/administrador/cursos/Curso.php";
            }
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function ventas()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/ventas/Orden.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function promocion()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/ventas/Promocion.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function indexOf($array, $word)
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            foreach ($array as $key => $value) if ($value === $word) return $key;
            return -1;
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function descuento()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            $allCursos = Curso_Modelo::getAll();
            $cursosEdit = $allCursos;
            $cursosDescuento = Curso_Modelo::getAllIfNotDiscount();
            foreach ($cursosDescuento as $curso) {
                for ($i = 0; $i < sizeof($allCursos); $i++) {
                    if (isset($allCursos[$i]) && ($allCursos[$i]['CURS_ID'] == $curso['CURS_ID'])) {
                        unset($allCursos[$i]);
                    }
                }
            }
            $cursos = $allCursos;
            include_once "./vistas/administrador/ventas/Descuento.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function crear_curso($url)
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            $dataCategoria = Categoria_Modelo::getAll();
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
        $dataProfesores = Profesor_Modelo::getProfesorData();
        include_once "./vistas/administrador/cursos/CrearCurso.php";
    }
    public static function perfil()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/perfil/Cuenta.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function categoria()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/cursos/Categoria.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function historial()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/cursos/Categoria.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function solicitudes()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/ventas/Solicitudes.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }

    public static function admin()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/Admin.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function profesor()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/usuario/Profesor.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function cliente()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/usuario/Cliente.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function empresa()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/tienda/Empresa.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function correos()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/tienda/Correo.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function metodo_pagos()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            include_once "./vistas/administrador/tienda/Metodo_Pagos.php";
        } else {
            header("Location:" . $GLOBALS['BASE_URL'] . "admin/loginAdmin");
        }
    }
    public static function loginAdmin()
    {
        include_once "./vistas/administrador/usuario/LoginAdmin.php";
    }
}
