<?php

class Profesor
{
    
    public static function get_all()
    {
        $profesor = Profesor_Modelo::getAll();
        echo json_encode($profesor);
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $profesor = array();
            $profesor = Profesor_Modelo::getOne($id[4]);
            echo json_encode($profesor);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_FILES['BANNER_IMAGEN'])) {
            $profesor["BANNER_IMAGEN"] = Banner::CargarImagen($_FILES['BANNER_IMAGEN']);
            $profesor["BANNER_TITULO"] = $_REQUEST['BANNER_TITULO'];
            Profesor_Modelo::insertProfesor($profesor);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Profesor_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        if (isset($_FILES['BANNER_IMAGEN']) && isset($_REQUEST['BANNER_TITULO'])) {
            $profesor["BANNER_IMAGEN"] = Banner::CargarImagen($_FILES['BANNER_IMAGEN']);
            $profesor["BANNER_TITULO"] = $_REQUEST['BANNER_TITULO'];
            $profesor["BANNER_STATUS"] = $_REQUEST['BANNER_STATUS'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            profesor_Modelo::updateProfesor($profesor, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
}
