<?php

class Correo
{
    public static function getAll()
    {
        $categorias = array();
        $categorias = Correo_Modelo::getAll();
        array_splice($categorias, 0, 1);
        echo json_encode($categorias);
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $categorias = array();
            $categorias = Correo_Modelo::getOne($id[4]);
            echo json_encode($categorias);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_REQUEST['CAT_NAME']) && isset($_REQUEST['CAT_DESCRIPCION']) && isset($_REQUEST['CAT_IMAGEN'])) {
            $categoria["CAT_NAME"] = $_REQUEST['CAT_NAME'];
            $categoria["CAT_DESCRIPCION"] = $_REQUEST['CAT_DESCRIPCION'];
            $categoria["CAT_IMAGEN"] = $_REQUEST['CAT_IMAGEN'];
            Correo_Modelo::insertCorreo($categoria);
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
}
