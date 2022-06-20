<?php

class SubModulo
{
    public static function create()
    {
        var_dump($_POST);
        if (
            isset($_POST['MOD_ID']) && isset($_POST['SMOD_NOMBRE']) && isset($_POST['SMOD_DESCRIPCION'])
        ) {
            $submodulo["MOD_ID"] = $_POST["MOD_ID"];
            $submodulo["SMOD_NOMBRE"] = $_POST["SMOD_NOMBRE"];
            $submodulo["SMOD_DESCRIPCION"] = $_POST["SMOD_DESCRIPCION"];
            SubModulo_Modelo::insertSubmodulo($submodulo);
            $mensaje["mensaje"] = "exito";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["status"] = "500";
            echo json_encode($mensaje);
        }
    }
    public static function submodulo_get_one($args = array())
    {
        if (isset($args[4])) {
            $submodulo = SubModulo_Modelo::getOne($args[4]);
            echo json_encode($submodulo);
        }
    }
    public static function submodulo_editar($args = array())
    {
        if (isset($_REQUEST['SMOD_NOMBRE']) && isset($_REQUEST['SMOD_DESCRIPCION']) && isset($_REQUEST['SMOD_ESTADO']) && isset($_REQUEST['SMOD_ID'])) {

            $modulo["SMOD_NOMBRE"] = $_REQUEST['SMOD_NOMBRE'];
            $modulo["SMOD_DESCRIPCION"] = $_REQUEST['SMOD_DESCRIPCION'];
            $modulo["SMOD_ESTADO"] = $_REQUEST['SMOD_ESTADO'];
            $id = $_REQUEST['SMOD_ID'];
            SubModulo_Modelo::updateSubModulo($modulo, $id);
            echo "success";
        } else {
            echo "not found";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = SubModulo_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
}
