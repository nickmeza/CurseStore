<?php
require_once("./direccion.php");
require_once("./conexion/conexion.php");

require_once("./modelo/AccesoRol_Modelo.php");
require_once("./modelo/Accesos_Modelo.php");
require_once("./modelo/Banner_Modelo.php");
require_once("./modelo/CaliCurso_Modelo.php");
require_once("./modelo/Categoria_Modelo.php");
require_once("./modelo/Cliente_Modelo.php");
require_once("./modelo/Curso_Modelo.php");
require_once("./modelo/Descuento_Modelo.php");
require_once("./modelo/DetalleDescuento_Modelo.php");
require_once("./modelo/Modulo_Modelo.php");
require_once("./modelo/OrdenDetalle_Modelo.php");
require_once("./modelo/Orden_Modelo.php");
require_once("./modelo/Persona_Modelo.php");
require_once("./modelo/Profesor_Modelo.php");
require_once("./modelo/Rol_Modelo.php");
require_once("./modelo/Route.php");
require_once("./modelo/SubModulo_Modelo.php");
require_once("./modelo/UsuarioSession.php");
require_once("./modelo/Usuario_Modelo.php");
require_once("./modelo/Video_Modelo.php");

require_once("./controlador/AccesoRol_Controlador.php");
require_once("./controlador/Accesos_Controlador.php");
require_once("./controlador/Banner_Controlador.php");
require_once("./controlador/CaliCurso_Controlador.php");
require_once("./controlador/Categoria_Controlador.php");
require_once("./controlador/Cliente_Controlador.php");
require_once("./controlador/Curso_Controlador.php");
require_once("./controlador/Descuento_Controlador.php");
require_once("./controlador/DetalleDescuento_Controlador.php");
require_once("./controlador/Modulo_Controlador.php");
require_once("./controlador/OrdenDetalle_Controlador.php");
require_once("./controlador/Orden_Controlador.php");
require_once("./controlador/Persona_Controlador.php");
require_once("./controlador/Profesor_Controlador.php");
require_once("./controlador/Rol_Controlador.php");
require_once("./controlador/SubModulo_Controlador.php");
require_once("./controlador/usuario.php");
require_once("./controlador/Usuario_Controlador.php");
require_once("./controlador/Video_Controlador.php");
require_once("./controlador/Router_Controlador.php");



// spl_autoload_register(function ($class_name) {
//     if(file_exists('./modelo/'.$class_name.'.php')){
//         require_once('./modelo/'.$class_name.'.php');
//     }else if(file_exists('./controlador/'.$class_name.'.php')){
//         require_once('./controlador/'.$class_name.'.php');
//     }
// });
$parsed_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $parsed_url['path'];
$ruta_split = explode("/", $ruta);
if (isset($ruta_split[1])) {
    
    var_dump($ruta_split);
    if (count($ruta_split) == 2 && $ruta_split[1] == "") {
        Routes::index();
    } else {
        $controlador = $ruta_split[1];
        if (isset($ruta_split[2])) {
            $metodo = $ruta_split[2];
        } else {
            $metodo = "defecto";
        }
        switch ($controlador) {
            case 'categoria':
                if (method_exists(new Routes(), $controlador)) {
                    Routes::$controlador($ruta_split);
                } else {
                    echo "error 404";
                }
                break;
            case 'curso':
                switch ($metodo) {
                    case 'buscar':
                        if (isset($ruta_split[3])) {
                            Routes::$metodo($ruta_split[3]);
                        }
                        else{
                            Routes::$metodo("nada");
                        }
                        break;
                    case 'detalle':
                        if (isset($ruta_split[3])) {
                            Routes::$metodo($ruta_split[3]);
                        }
                        else{
                            echo "no se busca por id";
                        }
                        break;
                    default:
                        echo "error 404";
                        break;
                }
                break;
            case 'perfil':
                if (method_exists(new Routes(), $controlador)) {
                    Routes::$controlador($ruta_split);
                } else {
                    echo "error 404";
                }
                break;
            case 'tienda':
                if (method_exists(new Routes(), $controlador)) {
                    Routes::$controlador($ruta_split);
                } else {
                    echo "error 404";
                }
                break;
            default:
                Routes::index();
        }
    }
} else {
    Routes::index();
}
