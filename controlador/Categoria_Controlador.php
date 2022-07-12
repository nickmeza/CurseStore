<?php

class Categoria

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
    public static function getAll()
    {
        $categorias = Categoria_Modelo::getAll();
        echo json_encode($categorias);
    }
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $categorias = array();
            $categorias = Categoria_Modelo::getOne($id[4]);
            echo json_encode($categorias);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_FILES['CAT_IMAGEN'])) {
            $categoria["CAT_IMAGEN"] = Categoria::CargarImagen($_FILES['CAT_IMAGEN']);
            $categoria["CAT_NAME"] = $_REQUEST['CAT_NAME'];
            $categoria["CAT_DESCRIPCION"] = $_REQUEST['CAT_DESCRIPCION'];
            Categoria_Modelo::insertCategoria($categoria);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Categoria_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        
        if (isset($_REQUEST['CAT_NAME']) && isset($_REQUEST['CAT_DESCRIPCION']) && isset($_FILES['CAT_IMAGEN'])) {
            $categoria["CAT_NAME"] = $_REQUEST['CAT_NAME'];
            $categoria["CAT_DESCRIPCION"] = $_REQUEST['CAT_DESCRIPCION'];
            $categoria["CAT_IMAGEN"] = Categoria::CargarImagen($_FILES['CAT_IMAGEN']);
            $categoria["CAT_ESTADO"] = $_REQUEST['CAT_ESTADO'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            Categoria_Modelo::updateCategoria($categoria, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
    public static function exportar()
    {
        $categoria = Categoria_Modelo::getAll();
        include_once("./excel/categoriaExcel.php");
    }
}
