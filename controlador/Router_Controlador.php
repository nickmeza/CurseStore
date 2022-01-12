<?php

class Routes
{
    public static function index()
    {
        $banner = Banner_Modelo::getAll();
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function login()
    {
        include_once "./vistas/cliente/views/Login.php";
    }
    public static function registrar()
    {
        include_once "./vistas/cliente/views/Registrar.php";
    }
    public static function categoria($buscador)
    {
        echo "$buscador[2]";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function buscar($buscador)
    {

        include_once "./vistas/cliente/curso/Buscador.php";
        var_dump($buscador);
    }
    public static function detalle($buscador)
    {
        include_once "./vistas/cliente/curso/DetalleCurso.php";
        var_dump($buscador);
    }
    //videos
    public static function progreso($data)
    {
        include_once "./vistas/cliente/curso/Progreso.php";
        var_dump($data[3]);
        if (isset($data[4])) {
            var_dump($data[4]);
        }
    }
    public static function perfil()
    {
        include_once "./vistas/cliente/perfil/Perfil.php";
    }
    public static function cuenta()
    {
        include_once "./vistas/cliente/perfil/Cuenta.php";
    }
    public static function aprendizaje()
    {
        include_once "./vistas/cliente/perfil/Aprendizaje.php";
    }
    public static function favoritos()
    {
        include_once "./vistas/cliente/perfil/Favoritos.php";
    }

    public static function metodo_pago()
    {
        include_once "./vistas/cliente/pago/MetodoPago.php";
    }
    
    public static function carrito()
    {
        include_once "./vistas/cliente/views/Carrito.php";
    }

    public static function nosotros()
    {
        include_once "./vistas/cliente/views/Nosotros.php";
    }

 


    
}
