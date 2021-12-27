<?php

class Routes
{
    public static function index()
    {
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function curso_detalle()
    {
        include_once "./vistas/cliente/curso/DetalleCurso.php";
    }
    public static function categoria($buscador)
    {
        echo "$buscador[2]";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function buscar($buscador)
    {

        include_once "./vistas/cliente/views/Inicio.php";
        var_dump($buscador);
    }
    public static function detalle($buscador)
    {
        include_once "./vistas/cliente/views/Inicio.php";
        var_dump($buscador);
    }
    public static function progreso($data)
    {
        include_once "./vistas/cliente/views/Inicio.php";
        var_dump($data[3]);
        if (isset($data[4])) {
            var_dump($data[4]);
        }
        
    }
    
}
