<?php

class Banner
{
    public static function get_all()
    {
        $banner = Banner_Modelo::getAll();
        echo json_encode($banner);
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $banners = array();
            $banners = Banner_Modelo::getOne($id[4]);
            echo json_encode($banners);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_REQUEST['BANNER_IMAGEN'])) {
            $banner["BANNER_IMAGEN"] = $_REQUEST['BANNER_IMAGEN'];
            $banner["BANNER_TITULO"] = $_REQUEST['BANNER_TITULO'];
            Banner_Modelo::insertBanner($banner);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Banner_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        if (isset($_REQUEST['BANNER_IMAGEN']) && isset($_REQUEST['BANNER_STATUS'])) {
            $banner["BANNER_IMAGEN"] = $_REQUEST['BANNER_IMAGEN'];
            $banner["BANNER_TITULO"] = $_REQUEST['BANNER_TITULO'];
            $banner["BANNER_STATUS"] = $_REQUEST['BANNER_STATUS'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            Banner_Modelo::updateBanner($banner, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
}
