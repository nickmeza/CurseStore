<?php

class Curso
{
    public static function getAll()
    {
        echo "json";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function getById($id)
    {
        var_dump($id[4]);
        include_once "./vistas/cliente/curso/Categoria.php";
        var_dump($id);
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