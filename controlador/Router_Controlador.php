<?php

class Routes
{
    public static function index()
    {
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function curso_detalle()
    {
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function categoria()
    {
        echo "categoria";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function buscar($buscador)
    {
        include_once "./vistas/cliente/views/Inicio.php";
        var_dump($buscador);
    }
    
}
