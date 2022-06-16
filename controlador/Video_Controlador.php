<?php

class Video
{
    public static function create()
    {
        var_dump($_POST);
        if (
            isset($_POST['SMOD_ID']) && isset($_POST['VI_NOMBRE']) && isset($_POST['VI_DESCRIPCION']) && isset($_POST['VI_URL'])
        ) {
            $video["SMOD_ID"] = $_POST["SMOD_ID"];
            $video["VI_NOMBRE"] = $_POST["VI_NOMBRE"];
            $video["VI_DESCRIPCION"] = $_POST["VI_DESCRIPCION"];
            $video["VI_URL"] = $_POST["VI_URL"];
            Video_Modelo::insertVideo($video);
            $mensaje["mensaje"] = "exito";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["status"] = "500";
            echo json_encode($mensaje);
        }
    }
    public static function video_get_one($args = array())
    {
        if (isset($args[4])) {
            $video = Video_Modelo::getOne($args[4]);
            echo json_encode($video);
        }
    }
    public static function video_editar($args = array())
    {
        if (isset($_REQUEST['VI_NOMBRE']) && isset($_REQUEST['VI_DESCRIPCION']) && isset($_REQUEST['VI_URL']) && isset($_REQUEST['VI_ESTADO']) && isset($_REQUEST['VI_ID'])) {

            $video["VI_NOMBRE"] = $_REQUEST['VI_NOMBRE'];
            $video["VI_DESCRIPCION"] = $_REQUEST['VI_DESCRIPCION'];
            $video["VI_URL"] = $_REQUEST['VI_URL'];
            $video["VI_ESTADO"] = $_REQUEST['VI_ESTADO'];
            $id=$_REQUEST['VI_ID'];
            Video_Modelo::updateVideo($video,$id);
            echo "success";
        } else {
            echo "not found";
        }
    }
}
