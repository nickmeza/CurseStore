<?php
require_once("./direccion.php");
require_once("./conexion/conexion.php");
require_once("./modelo/Modulo_Modelo.php");
require_once("./modelo/Route.php");
require_once("./modelo/Usuario_Modelo.php");
require_once("./modelo/UsuarioSession.php");


require_once("./controlador/modulo.php");
require_once("./controlador/usuario.php");


// spl_autoload_register(function ($class_name) {
//     if(file_exists('./modelo/'.$class_name.'.php')){
//         require_once('./modelo/'.$class_name.'.php');
//     }else if(file_exists('./controlador/'.$class_name.'.php')){
//         require_once('./controlador/'.$class_name.'.php');
//     }
// });
$parsed_url = parse_url($_SERVER['REQUEST_URI']);
$ruta= $parsed_url['path'];
$ruta_split=explode("/",$ruta);
 var_dump($ruta_split);
if (isset($ruta_split[1]) ) {
    echo('asd 2');
    Modulo::admin_modulo_get_all();
    if(count($ruta_split)==2 && $ruta_split[1] =="" ){
        echo('asd 2');
    }else{
        $controlador=$ruta_split[1];

        if(isset($ruta_split[2])){
            $metodo=$ruta_split[2];
        }else{
            $metodo="defecto";
        }
        switch($controlador){
            case 'value':
                # code...
                break;
            default:


        }
    }



}else{
    echo('asd');
}




?>