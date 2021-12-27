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
            echo "detalle";
            include_once "./vistas/cliente/curso/Categoria.php";
        }else {
            echo "curso list";
            include_once "./vistas/cliente/curso/Categoria.php";
        }
    }
    public static function ventas()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function promocion()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function descuento()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function perfil()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function categoria()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function buscar($buscador)
    {
        include_once "./vistas/cliente/Inicio.php";
        var_dump($buscador);
    }
    public static function admin()
    {
        include_once "./vistas/cliente/views/Inicio.php";
        echo "admin";
    }
    public static function profesor()
    {
        echo "profe";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function cliente()
    {
        echo "client";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function modulo()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
}