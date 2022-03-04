
<?php

class Usuario
{
    public static function createUsuarioProfesor($ruta)
    {
        if (isset($_REQUEST['NOMBRE']) && isset($_REQUEST['APELLIDO']) && isset($_REQUEST['DIRECCION']) && isset($_REQUEST['USUARIO']) && isset($_REQUEST['CONTRASENA'])) {
            $profesor["NOMBRE"] = $_REQUEST['NOMBRE'];
            $profesor["APELLIDO"] = $_REQUEST['APELLIDO'];
            $profesor["DIRECCION"] = $_REQUEST['DIRECCION'];
            $profesor["USUARIO"] = $_REQUEST['USUARIO'];
            $profesor["CONTRASENA"] = $_REQUEST['CONTRASENA'];
            Profesor_Modelo::insertProfesor($profesor);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function updatePerfilUsuario($ruta)
    {
        if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['direccion']) && isset($_REQUEST['usuario'])) {
            $usuario["nombre"] = $_REQUEST['nombre'];
            $usuario["apellido"] = $_REQUEST['apellido'];
            $usuario["direccion"] = $_REQUEST['direccion'];
            $usuario["usuario"] = $_REQUEST['usuario'];
            //Usuario_modelo::updatePerfilUsuario($usuario, '14');
            var_dump($_SESSION['escogido'][0]);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function updateContraseña($ruta)
    {
        if (isset($_REQUEST['contraseña'])) {
            $usuario["contraseña"] = $_REQUEST['contraseña'];
            $idUsuario = $_SESSION['escogido'][0]['USR_ID'];
            Usuario_modelo::updateContraseña($usuario, $idUsuario);
            var_dump($_SESSION['escogido'][0]);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function getPasswordByUser($ruta)
    {
            
            $idUsuario = $_SESSION['escogido'][0]['USR_ID'];
            Usuario_modelo::getPasswordByUser($idUsuario);
            var_dump($_SESSION['escogido'][0]);
            echo "creado correctamente";  
    }


    public static function createUsuarioCliente($ruta)
    {
        if (isset($_REQUEST['NOMBRE']) && isset($_REQUEST['APELLIDO']) && isset($_REQUEST['DIRECCION']) && isset($_REQUEST['USUARIO']) && isset($_REQUEST['CONTRASENA'])) {
            $cliente["NOMBRE"] = $_REQUEST['NOMBRE'];
            $cliente["APELLIDO"] = $_REQUEST['APELLIDO'];
            $cliente["DIRECCION"] = $_REQUEST['DIRECCION'];
            $cliente["USUARIO"] = $_REQUEST['USUARIO'];
            $cliente["CONTRASENA"] = $_REQUEST['CONTRASENA'];
            Cliente_Modelo::insertCliente($cliente);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function deleteUsuarioProfesor()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function deleteUsuarioCliente()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function updatePersona()
    {
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $persona = array();
            $persona = Banner_Modelo::getOne($id[4]);
            echo json_encode($persona);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function getPersonData($url)
    {
        if ($url[3] == "profesor") {
            $profesor = Profesor_Modelo::getProfesorData();
            echo json_encode($profesor);
        } else {
            $cliente = Cliente_Modelo::getClientData();
            echo json_encode($cliente);
        }
    }


    public static function Login($args = array())
    {
        $message_error = "";
        $atributos = $args;
        if (isset($atributos['error'])) {
            switch ($atributos['error']) {
                case "error":
                    $message_error = "usuario y contraseña erronea, ingrese nuevamente";
                    break;
            }
        }
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            header("location:" . $GLOBALS['BASE_URL'] . "usuario/admin ");
        } else {
            include_once "./vistas/administrador/general/login.php";
        }
    }
    public static function admin()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            $usuario_nombre = UsuarioSession::getCurrentUser();

            include_once "./vistas/administrador/general/index.php";
        } else {
            header("location:" . $GLOBALS['BASE_URL'] . "usuario/login");
        }
    }
    public static function GoInside($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
            return true;
        } else {
            if (isset($_REQUEST["usuario"]) && isset($_REQUEST["password"])) {
                $usuario = $_REQUEST["usuario"];
                $password = $_REQUEST["password"];
                if (Usuario_Modelo::findUser($usuario, $password)) {
                    $usuario_found = Usuario_Modelo::getUser($usuario, $password);
                    UsuarioSession::setCurrentUser($usuario, $usuario_found);
                    $mensaje["mensaje"] = "correcto";
                    $mensaje["status"] = "200";
                    $mensaje["usuario"] = $usuario_found;
                    echo json_encode($mensaje);
                } else {
                    $mensaje["mensaje"] = "usuario no incorrecto";
                    $mensaje["status"] = "404";
                    echo json_encode($mensaje);
                }
            } else {
                echo "error 404";
            }
        }
    }
    public static function logout()
    {
        $Session = new UsuarioSession();
        UsuarioSession::closeSession();
    }
    public static function admin_usuario()
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            $usuario_nombre = UsuarioSession::getCurrentUser();

            include_once "./vistas/administrador/usuario/Usuario.php";
        } else {
            header("location:" . $GLOBALS['BASE_URL'] . "usuario/login");
        }
    }
    //functions 

}
?>
