<?php

class RoutesAdmin
{
    public static function index()
    {
        include_once "./vistas/administrador/Admin.php";
    }
    public static function curso($codigocurso)
    {
        if (isset($codigocurso[3]) && strlen($codigocurso[3]) > 0) {
            include_once "./vistas/administrador/cursos/DetalleCurso.php";
        } else {
            include_once "./vistas/administrador/cursos/Curso.php";
        }
    }
    public static function ventas()
    {
        include_once "./vistas/administrador/ventas/Orden.php";
    }
    public static function promocion()
    {
        include_once "./vistas/administrador/ventas/Promocion.php";
    }
    public static function descuento()
    {
        $cursos = Curso_Modelo::getAll();
        include_once "./vistas/administrador/ventas/Descuento.php";
    }
    public static function crear_curso()
    {
        include_once "./vistas/administrador/cursos/CrearCurso.php";
    }
    public static function perfil()
    {
        include_once "./vistas/administrador/perfil/Cuenta.php";
    }
    public static function categoria()
    {
        include_once "./vistas/administrador/cursos/Categoria.php";
    }
    public static function historial()
    {
        include_once "./vistas/administrador/cursos/Categoria.php";
    }
    public static function solicitudes()
    {
        include_once "./vistas/administrador/ventas/Solicitudes.php";
    }

    public static function admin()
    {
        include_once "./vistas/administrador/Admin.php";
    }
    public static function profesor()
    {
        include_once "./vistas/administrador/usuario/Profesor.php";
    }
    public static function cliente()
    {
        include_once "./vistas/administrador/usuario/Cliente.php";
    }
    public static function tienda()
    {
        include_once "./vistas/administrador/tienda/Tienda.php";
    }
    public static function correos()
    {
        include_once "./vistas/administrador/tienda/Tienda.php";
    }
}
