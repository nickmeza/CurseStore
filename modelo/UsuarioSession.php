<?php
class UsuarioSession
{
    function __construct()
    {
        session_start();
    }
    public static function setCurrentUserAdmin($usuario, $rol, $user)
    {
        $_SESSION['userAdmin'] = $usuario; //nickname
        $_SESSION['rol'] = $rol;       //accesps
        $_SESSION['escogidoAdmin'] = $user; //objeto con los datos del usuario
    }
    public static function setCurrentUser($usuario, $user)
    {
        $_SESSION['user'] = $usuario;
        $_SESSION['escogido'] = $user;
    }
    public static function getCurrentUser()
    {
        return $_SESSION['user'];
    }
    public static function getCurrentUserAcces()
    {
        return $_SESSION['acces'];
    }
    public static function closeSession()
    {
        unset($_SESSION['user']);
        unset($_SESSION['rol']);
        unset($_SESSION['escogido']);
        unset($_SESSION['userAdmin']);
        unset($_SESSION['escogidoAdmin']);
        if (count($_SESSION) == 0) {
            session_destroy();
        } else {
            var_dump($_SESSION);
        }
    }
}
