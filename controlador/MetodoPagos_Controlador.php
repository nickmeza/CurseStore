<?php

class MetodoPago
{
    public static function CargarImagen($file_imagen, $ruta_de_gurdado = 'publico/img/', $editar = 0, $valor_editar = "", $tamano = "")
    {

        if ($file_imagen['tmp_name'] != "" || $file_imagen['tmp_name'] != null) {

            $rtOriginal = $file_imagen['tmp_name'];
            $nombre = $file_imagen['name'];
            $fileNameCmps = explode(".", $nombre);
            $extension = strtolower(end($fileNameCmps));
            $nuevonombre = time() . $nombre;
            $directoriosubida = $ruta_de_gurdado;
            $pathcompleto = $directoriosubida . $nuevonombre;
            switch ($extension) {
                case "jpg":
                case "jpeg":
                    $original = imagecreatefromjpeg($rtOriginal);
                    break;
                case "png":
                    $original = imagecreatefrompng($rtOriginal);
                    break;
            }
            //Ancho y alto máximo
            /*  $tamano_separado = explode("|", $tamano);
            $max_ancho = intval($tamano_separado[0]);
            $max_alto = intval($tamano_separado[1]); */
            //Medir la imagen
            list($ancho, $alto) = getimagesize($rtOriginal);
            //Crear un lienzo
            $lienzo = imagecreatetruecolor($ancho, $alto);
            imagealphablending($lienzo, false);
            imagesavealpha($lienzo, true);
            //Copiar original en lienzo
            imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho, $alto, $ancho, $alto);
            //Destruir la original
            imagedestroy($original);

            switch ($extension) {
                case "jpg":
                case "jpeg":
                    imagejpeg($lienzo, $pathcompleto);
                    break;
                case "png":
                    imagepng($lienzo, $pathcompleto);
                    break;
            }
            if ($editar == 1) {
                if ($valor_editar == "publico/img/imagen_default.png") {
                } else {
                    if (unlink($valor_editar)) {
                    };
                }
            }
            return $pathcompleto;
        } else {

            if ($editar == 1) {
                if ($valor_editar == "") {
                    return "publico/img/imagen_default.png";
                } else {
                    return $valor_editar;
                }
            } else {
                return "publico/img/imagen_default.png";
            }
        }
    }
    public static function get_all()
    {
        $metodo = MetodoPago_Modelo::getAll();
        echo json_encode($metodo);
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $metodos = array();
            $metodos = MetodoPago_Modelo::getOne($id[4]);
            echo json_encode($metodos);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_FILES['MET_IMAGEN'])) {
            $metodo["MET_IMAGEN"] = MetodoPago::CargarImagen($_FILES['MET_IMAGEN']);
            $metodo["MET_NOMBRE"] = $_REQUEST['MET_NOMBRE'];
            MetodoPago_Modelo::insertMetodoPago($metodo);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = MetodoPago_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        if (isset($_FILES['MET_IMAGEN']) && isset($_REQUEST['MET_NOMBRE'])) {
            $metodo["MET_IMAGEN"] = MetodoPago::CargarImagen($_FILES['MET_IMAGEN']);
            $metodo["MET_NOMBRE"] = $_REQUEST['MET_NOMBRE'];
            $metodo["MET_DATOS"] = $_REQUEST['MET_DATOS'];
            $metodo["MET_ESTADO"] = $_REQUEST['MET_ESTADO'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            MetodoPago_Modelo::updateMetodo($metodo, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
}
