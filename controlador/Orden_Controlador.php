<?php

class Orden
{
    public static function getAll()
    {
        $orden = Orden_Modelo::getAll();
        echo json_encode($orden);
    }
    public static function get_estado()
    {
        $orden = Orden_Modelo::get_estado();
        echo json_encode($orden);
    }
    public static function get_estado_approval()
    {
        $orden = Orden_Modelo::get_estado_approval();
        echo json_encode($orden);
    }
    public static function delete()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function update()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
}