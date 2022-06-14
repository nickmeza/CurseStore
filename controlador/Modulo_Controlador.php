<?php

class Modulo
{

    public static function admin_modulo_eliminar($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($args[3])) {
                Modulo_Modelo::delete($args[3]);
                echo "success";
            }
        }
    }

    public static function admin_modulo_agregar($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($_REQUEST['nombre'])) {
                Modulo_Modelo::insertModulo($_REQUEST['nombre']);
            }
            echo "success";
        }
    }
    public static function admin_modulo_get_one($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($args[3])) {
                $modulo = Modulo_Modelo::getOne($args[3]);
                $bloque_arr = array(
                    'idelemento' => $modulo['idelemento'],
                    'nombre' => $modulo['nombre'],
                );
                echo json_encode($bloque_arr);
            }
        }
    }
    public static function admin_modulo_editar($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['idelemento'])) {
                Modulo_Modelo::updateModulo($_REQUEST['nombre'], $_REQUEST['idelemento']);
                echo "success";
            } else {
                echo "not found";
            }
        } else {
            echo "error";
        }
    }
    public static function admin_modulo_get_all()
    {
        $modulos = Modulo_Modelo::getAll();
        echo json_encode($modulos);
    }
    public static function create($url)
    {
        if (isset($_REQUEST['MOD_NOMBRE']) && isset($_REQUEST['MOD_DESCRIPCION']) && isset($url[4])) {
            $modulo["CURS_ID"] = $url[4];
            $modulo["MOD_NOMBRE"] = $_REQUEST['MOD_NOMBRE'];
            $modulo["MOD_DESCRIPCION"] = $_REQUEST['MOD_DESCRIPCION'];
            Modulo_Modelo::insertModulo($modulo);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function admin_modulo_get_by_id($url)
    {
        $i = 0;
        $modulos = Modulo_Modelo::getAllbyCurse($url[4]);
        foreach ($modulos as $modulito) {
            $submodulos = SubModulo_Modelo::getbyMod($modulito["MOD_ID"]);
            $j = 0;
            foreach ($submodulos as $submodulito) {
                // $submodulos[$j]["video"] = Video_Modelo::getAllVideoSubmodul($submodulito["SMOD_ID"]);
                // $j++;
                $submodulos[$j]["video"] = Video_Modelo::getAllVideoSubmodul($submodulito["SMOD_ID"]);
                $j++;
            }
            $modulos[$i]["submodulos"]=$submodulos ;
            $i++;
        }
        echo json_encode($modulos);
    }
}
