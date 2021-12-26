<?php

class RoutesAdmin
{
    public static function index()
    {
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function curso_detalle()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function curso()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
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
    }
    public static function nick()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
}