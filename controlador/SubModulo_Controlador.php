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
}
