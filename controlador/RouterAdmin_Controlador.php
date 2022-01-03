<?php

class RoutesAdmin
{
    public static function index()
    {
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function curso($codigocurso)
    {

        if (isset($codigocurso[3]) && strlen($codigocurso[3])>0 ) {
            var_dump($codigocurso[3]);
                include_once "./vistas/administrador/cursos/DetalleCurso.php";
        }else {
            echo "curso list";
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
        include_once "./vistas/administrador/ventas/Descuento.php";
    }
    public static function perfil()
    {
        include_once "./vistas/administrador/perfil/Cuenta.php";
    }
    public static function categoria()
    {
        include_once "./vistas/administrador/cursos/Curso.php";
    }
    
    public static function admin()
    {
        include_once "./vistas/administrador/Admin.php";
        echo "admin";
    }
    public static function profesor()
    {
        echo "profe";
        include_once "./vistas/administrador/usuario/Profesor.php";
    }
    public static function cliente()
    {
        echo "client";
        include_once "./vistas/administrador/usuario/Cliente.php";
    }
    
}