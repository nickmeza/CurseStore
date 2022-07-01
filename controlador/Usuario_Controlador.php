
<?php

class Usuario
{
    public static function createUsuarioProfesor($ruta)
    {
        if (isset($_REQUEST['NOMBRE']) && isset($_REQUEST['APELLIDO']) && isset($_REQUEST['DIRECCION']) && isset($_REQUEST['CORREO']) && isset($_REQUEST['USUARIO']) && isset($_REQUEST['PASSWORD'])) {
            $profesor["NOMBRE"] = $_REQUEST['NOMBRE'];
            $profesor["APELLIDO"] = $_REQUEST['APELLIDO'];
            $profesor["DIRECCION"] = $_REQUEST['DIRECCION'];
            $profesor["CORREO"] = $_REQUEST['CORREO'];
            $profesor["USUARIO"] = $_REQUEST['USUARIO'];
            $profesor["PASSWORD"] = $_REQUEST['PASSWORD'];
            Profesor_Modelo::insertProfesor($profesor);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function updatePerfilUsuario($ruta)
    {
        //var_dump($_REQUEST);
        session_start();
        if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['direccion'])&& isset($_REQUEST['correo']) && isset($_REQUEST['usuario'])&& isset($_REQUEST['contrasena'])) {
            $usuario["nombre"] = $_REQUEST['nombre'];
            $usuario["apellido"] = $_REQUEST['apellido'];
            $usuario["direccion"] = $_REQUEST['direccion'];
            $usuario["correo"] = $_REQUEST['correo'];
            $usuario["usuario"] = $_REQUEST['usuario'];
            $usuario["contrasena"] = $_REQUEST['contrasena'];

            //var_dump($usuario);
            if (isset($_REQUEST['admin'])) {
                $usuario["admin"] = true;
                $idUsuario = $_REQUEST['idpersona'];
            } else {
                $idUsuario = $_SESSION['escogido'][0]['USR_ID'];
            }
            echo ($idUsuario);
            Usuario_modelo::updatePerfilUsuario($usuario, $idUsuario);
            var_dump($_SESSION['escogido'][0]);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }


    public static function updateContrasena($ruta)
    {
        if (isset($_REQUEST['contraseña']) && isset($_REQUEST['nueva_contraseña']) && isset($_REQUEST['confirmar_contraseña'])) {
            //proceso de verificar contraseñas entre si
            if ($_REQUEST['nueva_contraseña'] == $_REQUEST['confirmar_contraseña']) {
                //proceso de verificar contraseña en la base de datos
                session_start();
                if ($_REQUEST['contraseña'] == $_SESSION['escogido'][0]['USR_PASSWORD']) {
                    $usuario["contraseña"] = $_REQUEST['nueva_contraseña'];
                    $idUsuario = $_SESSION['escogido'][0]['USR_ID'];
                    Usuario_modelo::updateContraseña($usuario, $idUsuario);
                    echo "creado correctamente";
                } else {
                    echo 'La contraseña principal es incorrecta';
                }
            } else {
                echo "La nueva contraseña no coincide";
            }
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

    public static function RegistrarCliente($ruta)
    {
        $Session = new UsuarioSession();
        if (isset($_REQUEST['NOMBRE']) && isset($_REQUEST['APELLIDO']) && isset($_REQUEST['DIRECCION']) && isset($_REQUEST['USUARIO']) && isset($_REQUEST['CONTRASENA'])) {
            $cliente["NOMBRE"] = $_REQUEST['NOMBRE'];
            $cliente["APELLIDO"] = $_REQUEST['APELLIDO'];
            $cliente["DIRECCION"] = $_REQUEST['DIRECCION'];
            $cliente["USUARIO"] = $_REQUEST['USUARIO'];
            $cliente["CORREO"] = $_REQUEST['CORREO'];
            $cliente["CONTRASENA"] = $_REQUEST['CONTRASENA'];
            Cliente_Modelo::insertCliente($cliente);
            $usuario_found = Usuario_Modelo::getUser($cliente["USUARIO"], $cliente["CONTRASENA"]);
            UsuarioSession::setCurrentUser($cliente["USUARIO"], $usuario_found);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }


    public static function createUsuarioCliente($ruta)
    {
        if (isset($_REQUEST['NOMBRE']) && isset($_REQUEST['APELLIDO']) && isset($_REQUEST['DIRECCION'])&& isset($_REQUEST['CORREO']) && isset($_REQUEST['USUARIO']) && isset($_REQUEST['PASSWORD'])) {
            $cliente["NOMBRE"] = $_REQUEST['NOMBRE'];
            $cliente["APELLIDO"] = $_REQUEST['APELLIDO'];
            $cliente["DIRECCION"] = $_REQUEST['DIRECCION'];
            $cliente["CORREO"] = $_REQUEST['CORREO'];
            $cliente["USUARIO"] = $_REQUEST['USUARIO'];
            $cliente["PASSWORD"] = $_REQUEST['PASSWORD'];
            Cliente_Modelo::insertCliente($cliente);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function deleteUsuarioProfesor($id)
    {
        if (!(Usuario_modelo::validatedProfesorDelete($id[5]))) {
            Persona_Modelo::delete($id[5]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["status"] = "200";
            echo json_encode($mensaje);
        } else {
            $mensaje["mensaje"] = "error";
            $mensaje["status"] = "404";
            echo json_encode($mensaje);
        }
    }
    public static function deleteUsuarioCliente($id)
    {
        if (isset($id[5])) {
            if (!(Usuario_modelo::validatedDelete($id[5]))) {
                Persona_Modelo::delete($id[5]);
                $mensaje["mensaje"] = "correcto";
                $mensaje["status"] = "200";
                echo json_encode($mensaje);
            } else {
                $mensaje["mensaje"] = "error";
                $mensaje["status"] = "404";
                echo json_encode($mensaje);
            }
        } else {
        }
    }
    public static function updatePersona()
    {
    }
    public static function chageEstado($id)
    {
        var_dump($id);
        if (isset($id) && isset($id[5]) && strlen($id[6])) {
            $persona = array();
            $persona = Usuario_modelo::chageEstado($id[5], $id[6]);
            echo json_encode($persona);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $persona = array();
            $persona = Cliente_Modelo::ClientData($id[4]);
            echo json_encode($persona);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function getClientbyId($id)
    {

        if (isset($id) && isset($id[5]) && strlen($id[5]) > 0) {
            $persona = array();
            $persona = Usuario_Modelo::getClientbyId($id[5]);
            echo json_encode($persona);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function getProfesorbyId($id)
    {

        if (isset($id) && isset($id[5]) && strlen($id[5]) > 0) {
            $persona = array();
            $persona = Profesor_Modelo::getProfesorbyId($id[5]);
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
                    $mensaje["mensaje"] = "usuario incorrecto";
                    $mensaje["status"] = "404";
                    echo json_encode($mensaje);
                }
            } else {
                echo "error 404";
            }
        }
    }
    public static function LoginAdmin($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            echo $_SESSION['userAdmin'];
            return true;
        } else {
            if (isset($_REQUEST["usuario"]) && isset($_REQUEST["password"])) {
                $usuario = $_REQUEST["usuario"];
                $password = $_REQUEST["password"];
                if (Usuario_Modelo::findUserAdmin($usuario, $password)) {
                    $usuario_found = Usuario_Modelo::getUserAdmin($usuario, $password);
                    UsuarioSession::setCurrentUserAdmin($usuario, $usuario_found[0]["ROL_NOMBRE"], $usuario_found);
                    $mensaje["mensaje"] = "correcto";
                    $mensaje["status"] = "200";
                    $mensaje["usuario"] = $usuario_found;
                    echo json_encode($mensaje);
                } else {
                    $mensaje["mensaje"] = "usuario incorrecto";
                    $mensaje["status"] = "404";
                    echo json_encode($mensaje);
                }
            } else {
                $mensaje["mensaje"] = "usuario incorrecto";
                $mensaje["status"] = "404";
                echo json_encode($mensaje);
            }
        }
    }
    /* public static function LoginAdmin($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['userAdmin'])) {
            echo $_SESSION['userAdmin'];
            return true;
        } else {
            if (isset($_REQUEST["usuario"]) && isset($_REQUEST["password"])) {
                $usuarioAdmin = $_REQUEST["usuario"];
                $passwordAdmin = $_REQUEST["password"];
                if (Usuario_Modelo::findUser($usuarioAdmin, $passwordAdmin)) {
                    $usuario_found = Usuario_Modelo::getUser($usuarioAdmin, $passwordAdmin);
                    $usuario_acces = Usuario_Modelo::getUserAcces($usuario_found[0]["USR_ID"]);
                    UsuarioSession::setCurrentUserAdmin($usuarioAdmin, $usuario_acces,$usuario_found);
                    $mensaje["mensaje"] = "correcto";
                    $mensaje["status"] = "200";
                    $mensaje["usuario"] = $usuario_found;
                    echo json_encode($mensaje);
                } else {
                    $mensaje["mensaje"] = "usuario incorrecto";
                    $mensaje["status"] = "404";
                    echo json_encode($mensaje);
                }
            } else {
                echo "error 404";
            }
        }
    } */
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
    public static function exportar($url)
    {
        if ($url[3] == "profesor") {
            $usuario = Profesor_Modelo::getProfesorData();
        } else {
            $usuario = Cliente_Modelo::getClientData();
        }
        include_once("./excel/usuarioExcel.php");
    }
}
?>
