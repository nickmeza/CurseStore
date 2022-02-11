<?php

class Routes
{
    public static function index()
    {
        $Session = new UsuarioSession();
        $banner = Banner_Modelo::getAll();
        include_once "./vistas/cliente/views/Inicio.php";
    }
    public static function login()
    {
        include_once "./vistas/cliente/views/Login.php";
    }
    public static function registrar()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/views/Registrar.php";
    }
    public static function categoria($buscador)
    {
        $Session = new UsuarioSession();
        echo "$buscador[2]";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function buscar($buscador)
    {
        $Session = new UsuarioSession();

        include_once "./vistas/cliente/curso/Buscador.php";
        // var_dump($buscador);
    }
    public static function detalle($buscador)
    {
        $Session = new UsuarioSession();
        $buscador = strtr($buscador, "-", " ");
        include_once "./vistas/cliente/curso/DetalleCurso.php";
    }
    //videos
    public static function progreso($data)
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {

            if (isset($data[3]) && isset($data[4])) {
                $buscador = strtr($data[3], "-", " ");
                $mod = Curso_Modelo::getOneIdByName($buscador);
                $isComprado = Curso_Modelo::getCursoIsComprado($mod, $_SESSION['escogido'][0]['USR_ID']);
                if ($mod == $isComprado) {
                    $subModulo = $data[4];
                    if (isset($data[5])) {
                        $idVideo = $data[5];
                    }
                    $modulo = $data[3];
                    include_once "./vistas/cliente/curso/Progreso.php";
                } else {
                    header("Location: http://tiendacursos.test/curso/detalle/$data[3]");
                }
            } else {

                header("Location: http://tiendacursos.test/curso/detalle/$data[3]");
                die();
            }
        } else {
            header("Location: http://tiendacursos.test/login");
        }
    }
    public static function perfil()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/perfil/Perfil.php";
    }
    public static function cuenta()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/perfil/Cuenta.php";
    }
    public static function aprendizaje()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/perfil/Aprendizaje.php";
    }
    public static function favoritos()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/perfil/Favoritos.php";
    }

    public static function metodo_pago()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/pago/MetodoPago.php";
    }

    public static function carrito()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/views/Carrito.php";
    }

    public static function nosotros()
    {
        $Session = new UsuarioSession();
        include_once "./vistas/cliente/views/Nosotros.php";
    }
}
