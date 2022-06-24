<?php
class UsuarioSession
{
    function __construct()
    {
        session_start();
    }
    public static function setCurrentUserAdmin($usuario, $acces, $user)
    {
        $_SESSION['userAdmin'] = $usuario; //nickname
        $_SESSION['acces'] = $acces;       //accesps
        $_SESSION['escogidoAdmin'] = $user;//objeto con los datos del usuario
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
        unset($_SESSION['acces']);
        unset($_SESSION['escogido']);
        if (count($_SESSION) == 0) {
            session_destroy();
        }
    }
}
