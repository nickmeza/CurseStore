<?php

class Modulo
{

    public static function admin_modulo_eliminar($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($args[4])) {
                Modulo_Modelo::delete($args[4]);
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
            if (isset($args[4])) {
                $modulo = Modulo_Modelo::getOne($args[4]);
                $bloque_arr = array(
                    'idelemento' => $modulo['idelemento'],
                    'nombre' => $modulo['nombre'],
                );
                echo json_encode($bloque_arr);
            }
        }
    }
    public static function modulo_get_one($args = array())
    {
        if (isset($args[4])) {
            $modulo = Modulo_Modelo::getOne($args[4]);
            echo json_encode($modulo);
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
    public static function modulo_editar($args = array())
    {
        if (isset($_REQUEST['MOD_NOMBRE']) && isset($_REQUEST['MOD_DESCRIPCION']) && isset($_REQUEST['MOD_ESTADO']) && isset($_REQUEST['MOD_ID'])) {

            $modulo["MOD_NOMBRE"] = $_REQUEST['MOD_NOMBRE'];
            $modulo["MOD_DESCRIPCION"] = $_REQUEST['MOD_DESCRIPCION'];
            $modulo["MOD_ESTADO"] = $_REQUEST['MOD_ESTADO'];
            $id=$_REQUEST['MOD_ID'];
            Modulo_Modelo::updateModulo($modulo,$id);
            echo "success";
        } else {
            echo "not found";
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
            $modulos[$i]["submodulos"] = $submodulos;
            $i++;
        }
        echo json_encode($modulos);
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Modulo_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
}
