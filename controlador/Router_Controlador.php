<?php

class Routes
{
    public static function index()
    {
        include_once "./vistas/cliente/Inicio.php";
    }
    public static function curso_detalle()
    {
        include_once "./vistas/cliente/Inicio.php";
    }
    public static function categoria()
    {
        include_once "./vistas/cliente/Categoria.php";
    }
    public static function buscar($buscador)
    {
        include_once "./vistas/cliente/Inicio.php";
        var_dump($buscador);
    }
}
