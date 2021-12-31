<?php

class Categoria
{
    public static function getAll()
    {
        $categorias = array();
        $categorias = Categoria_Modelo::getAll();
        array_splice($categorias,0,1);
        echo json_encode($categorias);
    }
    public static function create()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
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