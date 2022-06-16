<?php
require_once("./direccion.php");
require_once("./conexion/conexion.php");

require_once("./modelo/AccesoRol_Modelo.php");
require_once("./modelo/Accesos_Modelo.php");
require_once("./modelo/Banner_Modelo.php");
require_once("./modelo/CaliCurso_Modelo.php");
require_once("./modelo/Categoria_Modelo.php");
require_once("./modelo/Correo_Modelo.php");
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
require_once("./modelo/MetodoPagos_Modelo.php");
require_once("./modelo/Empresa_Modelo.php");

require_once("./controlador/AccesoRol_Controlador.php");
require_once("./controlador/Accesos_Controlador.php");
require_once("./controlador/Banner_Controlador.php");
require_once("./controlador/CaliCurso_Controlador.php");
require_once("./controlador/Categoria_Controlador.php");
require_once("./controlador/Correo_Controlador.php");
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
require_once("./controlador/RouterAdmin_Controlador.php");
require_once("./controlador/MetodoPagos_Controlador.php");
require_once("./controlador/Empresa_Controlador.php");




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
    if ($ruta_split[1] != "admin") {
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
                case 'login':

                    if (method_exists(new Routes(), $controlador)) {
                        Routes::$controlador($ruta_split);
                    } else {
                        echo "error 404";
                    }
                    break;
                case 'registrar':

                    if (method_exists(new Routes(), $controlador)) {
                        Routes::$controlador($ruta_split);
                    } else {
                        echo "error 404";
                    }
                    break;
                case 'nosotros':

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
                            } else {
                                Routes::$metodo("nada");
                            }
                            break;
                        case 'detalle':
                            if (isset($ruta_split[3])) {
                                Routes::$metodo($ruta_split[3]);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                        case 'progreso':
                            if (isset($ruta_split[3])) {
                                Routes::$metodo($ruta_split);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                        default:
                            echo "error 404";
                            break;
                    }
                    break;
                case 'perfil':
                    switch ($metodo) {
                        case 'cuenta':
                            if (!isset($ruta_split[3])) {
                                Routes::$metodo($ruta_split);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                        case 'aprendizaje':
                            if (!isset($ruta_split[3])) {
                                Routes::$metodo($ruta_split);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                        case 'favoritos':
                            if (!isset($ruta_split[3])) {
                                Routes::$metodo($ruta_split);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                        default:

                            if ($ruta_split[1] == 'perfil') {
                                Routes::$controlador($ruta_split);
                            } else {
                                echo "no se busca por id";
                            }
                            break;
                    }
                    break;
                case 'carrito':
                    if (method_exists(new Routes(), $controlador)) {
                        Routes::$controlador($ruta_split);
                    } else {
                        echo "error 404";
                    }
                    break;
                case 'metodo_pago':
                    if (method_exists(new Routes(), $controlador)) {
                        Routes::$controlador($ruta_split);
                    } else {
                        echo "error 404";
                    }
                    break;
                case 'nosotros':
                    if (method_exists(new Routes(), $controlador)) {
                        Routes::$controlador($ruta_split);
                    } else {
                        echo "error 404";
                    }
                    break;

                default:
                    Routes::index();
                    echo "error 404";
            }
        }
    } else {
        if (isset($ruta_split[2])) {
            if (count($ruta_split) == 2 && $ruta_split[1] == "") {
                RoutesAdmin::admin();
            } else {
                $controlador = $ruta_split[2];
                if (isset($ruta_split[3])) {
                    $metodo = $ruta_split[3];
                } else {
                    $metodo = "defecto";
                }
                switch ($controlador) {
                    case 'categoria':
                        if (method_exists(new Categoria(), $metodo)) {
                            Categoria::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'curso':
                    case 'crear_curso':
                        if (method_exists(new Curso(), $metodo)) {
                            Curso::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador)) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {

                            echo "error 404";
                        }
                        break;
                    case 'ventas':
                    case 'historial':
                    case 'solicitudes':
                        if (method_exists(new Orden(), $metodo)) {
                            Orden::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'promocion':
                        if (method_exists(new Banner(), $metodo)) {
                            Banner::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'descuento':
                        if (method_exists(new Descuento(), $metodo)) {
                            Descuento::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'perfil':
                        if (method_exists(new Usuario(), $metodo)) {
                            Usuario::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            //echo "error 404";
                        }
                        break;
                    case 'usuario':
                        $submetodo = "crear";
                        if (isset($ruta_split[4])) {
                            $submetodo = $ruta_split[4];
                        }

                        switch ($metodo) {
                            case 'profesor':

                                if (method_exists(new Usuario(), $submetodo)) {
                                    Usuario::$submetodo($ruta_split);
                                } else if (method_exists(new RoutesAdmin(), $metodo) && !isset($ruta_split[4])) {
                                    RoutesAdmin::$metodo($ruta_split);
                                } else {
                                    echo "error 404";
                                }
                                break;
                            case 'cliente':
                                if (method_exists(new Usuario(), $submetodo)) {
                                    Usuario::$submetodo($ruta_split);
                                } else if (method_exists(new RoutesAdmin(), $metodo) && !isset($ruta_split[4])) {
                                    RoutesAdmin::$metodo($ruta_split);
                                } else {
                                    echo "error 404";
                                }
                                break;
                            default:
                                //echo "error 404";
                                RoutesAdmin::index();
                                break;
                        }
                        break;
                    case 'correos':
                        if (method_exists(new Correo(), $metodo)) {
                            Correo::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'metodo_pagos':
                        if (method_exists(new MetodoPago(), $metodo)) {
                            MetodoPago::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'empresa':
                        if (method_exists(new Empresa(), $metodo)) {
                            Empresa::$metodo($ruta_split);
                        } else if (method_exists(new RoutesAdmin(), $controlador) && !isset($ruta_split[3])) {
                            RoutesAdmin::$controlador($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'modulo':
                        if (method_exists(new Modulo(), $metodo)) {
                            Modulo::$metodo($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'submodulo':
                        if (method_exists(new SubModulo(), $metodo)) {
                            SubModulo::$metodo($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    case 'video':
                        if (method_exists(new Video(), $metodo)) {
                            Video::$metodo($ruta_split);
                        } else {
                            echo "error 404";
                        }
                        break;
                    default:
                        RoutesAdmin::index();
                        break;
                }
            }
        } else {
            RoutesAdmin::admin();
        }
    }
} else {
    $Session = new UsuarioSession();
    Routes::index();
}
