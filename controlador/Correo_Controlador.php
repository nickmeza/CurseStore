<?php

class Correo
{
    public static function getAll()
    {
        $correo = array();
        $correo = Correo_Modelo::getAll();
        array_splice($correo, 0, 1);
        echo json_encode($correo);
    }
    public static function getCorreosData()
    {
        $correo = array();
        $correo = Correo_Modelo::getCorreosData();
        echo json_encode($correo);
    }

    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $correo = array();
            $correo = Correo_Modelo::getOne($id[4]);
            echo json_encode($correo);
        } else {
            echo "fallo al buscar";
        }
    }

    public static function getByCorreo($correo)
    {
        if (isset($correo) && isset($correo[4]) && strlen($correo[4]) > 0) {
            $persona = Correo_Modelo::getUserByCorreo($correo[4]);
            $codeRemind = rand(1000, 9999);
            CorreoSend::send_mail_remind($persona["PER_NOMBRE"], $persona["PER_CORREO"], $codeRemind);
            Correo_Modelo::updateCodigoCorreo($codeRemind, $persona["USR_ID"]);
        } else {
            echo "fallo al buscar";
        }
    }

    public static function compararCodigoRemind($correo, $codigo)
    {
        if (isset($correo) && isset($codigo)) {
            $persona = Correo_Modelo::compararCodigoRemind($correo, $codigo);

            $mensaje["data"] = $persona;
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al buscar";
        }
    }

    public static function create()
    {
        if (isset($_REQUEST['CLI_ID']) && isset($_REQUEST['COR_NOMBRE']) && isset($_REQUEST['COR_CORREO']) && isset($_REQUEST['COR_DESCRIPCION']) && isset($_REQUEST['COR_ASUNTO'])) {
            $correo["CLI_ID"] = $_REQUEST['CLI_ID'];
            $correo["COR_NOMBRE"] = $_REQUEST['COR_NOMBRE'];
            $correo["COR_CORREO"] = $_REQUEST['COR_CORREO'];
            $correo["COR_DESCRIPCION"] = $_REQUEST['COR_DESCRIPCION'];
            $correo["COR_ASUNTO"] = $_REQUEST['COR_ASUNTO'];
            Correo_Modelo::insertCorreo($correo);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Correo_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        if (isset($_REQUEST['CAT_NAME']) && isset($_REQUEST['CAT_DESCRIPCION']) && isset($_REQUEST['CAT_IMAGEN'])) {
            $categoria["CAT_NAME"] = $_REQUEST['CAT_NAME'];
            $categoria["CAT_DESCRIPCION"] = $_REQUEST['CAT_DESCRIPCION'];
            $categoria["CAT_IMAGEN"] = $_REQUEST['CAT_IMAGEN'];
            $categoria["CAT_ESTADO"] = $_REQUEST['CAT_ESTADO'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            Correo_Modelo::updateCorreo($categoria, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
    public static function getDataCorreoById($id)
    {
        $correo = Correo_Modelo::getDataCorreoById($id[4]);
        echo json_encode($correo);
    }
    public static function exportar()
    {
        $correos = Correo_Modelo::getCorreosData();
        include_once("./excel/correoExcel.php");
    }
}
