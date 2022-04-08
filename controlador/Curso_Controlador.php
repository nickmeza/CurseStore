<?php

class Curso
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
        $cursos = Curso_Modelo::getAll();
        echo json_encode($cursos);
    }
    public static function getCursosDescuento()
    {
        $cursosdescuento = Curso_Modelo::getCursosDescuento();
        echo json_encode($cursosdescuento);
    }
    public static function getOne($id)
    {
        $cursosdescuento = Curso_Modelo::getOne($id[4]);
        echo json_encode($cursosdescuento);
    }
    public static function getCursosByOrder($id)
    {
        $cursosdescuento = Curso_Modelo::getCursosByOrder($id[4]);
        echo json_encode($cursosdescuento);
    }
    public static function updateAprovalOrder()
    {
        var_dump($_REQUEST);
        if (isset($_REQUEST['ORD_APROVAL']) && isset($_REQUEST['ORD_ID'])) {
            $order['ORD_APROVAL'] = $_REQUEST['ORD_APROVAL'];
            $order['ORD_ID'] = $_REQUEST['ORD_ID'];
            $cursosdescuento = Curso_Modelo::updateAprovalOrder($order);
            echo json_encode($cursosdescuento);
        } else {
            echo "fallo al actualizar";
        }
    }

    public static function getByName($codigocurso)
    {
        $buscador = str_replace("%20", " ", $codigocurso[4]);
        $cursoname = Curso_Modelo::getByName($buscador);
        echo json_encode($cursoname);
    }
    //getByIds
    public static function getByIds()
    {
        if (isset($_POST['ids'])) {
            $id = $_POST["ids"];
            $id = substr($id, 0, -1);
            $id = substr($id, 1);
            $cursos = Curso_Modelo::getByIds($id);
            echo json_encode($cursos);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["statud"] = "500";
            echo json_encode($mensaje);
        }
    }
    public static function getCursoIsComprado()
    {
        if (isset($_POST['curso']) && isset($_POST['usuario'])) {
            $curso = $_POST["curso"];
            $usuario = $_POST["usuario"];
            $cursos = Curso_Modelo::getCursoIsComprado($curso, $usuario);
            echo json_encode($cursos);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["statud"] = "500";
            echo json_encode($mensaje);
        }
    }
    public static function getById($id)
    {
        var_dump($id[4]);
        include_once "./vistas/cliente/curso/Categoria.php";
        var_dump($id);
    }

    public static function create()
    {
        var_dump($_POST);
        if (
            isset($_POST['CURS_NOMBRE']) && isset($_POST['CURS_DESCRIPCION'])
            && isset($_POST['CURS_PRECIO']) && isset($_POST['PROF_ID'])
            && isset($_POST['CURS_URL_VIDEO']) && isset($_FILES['CURS_IMAGEN'])
            && isset($_POST['CAT_ID'])
        ) {
            $curso["CAT_ID"] = $_POST["CAT_ID"];
            $curso["PROF_ID"] = $_POST["PROF_ID"];
            $curso["CURS_NOMBRE"] = $_POST["CURS_NOMBRE"];
            $curso["CURS_DESCRIPCION"] = $_POST["CURS_DESCRIPCION"];
            $curso["CURS_PRECIO"] = $_POST["CURS_PRECIO"];
            $curso["CURS_IMAGEN"] = Curso::CargarImagen($_FILES['CURS_IMAGEN']);
            $curso["CURS_URL_VIDEO"] = $_POST["CURS_URL_VIDEO"];
            Curso_Modelo::insertCurso($curso);
            $mensaje["mensaje"] = "exito";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["status"] = "500";
            echo json_encode($mensaje);
        }
    }

    public static function delete()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function update($id)
    {
        if (isset($_FILES['CURS_IMAGEN']) && isset($_REQUEST['CURS_NOMBRE'])) {
            
            $curso["CURS_NOMBRE"] = $_REQUEST['CURS_NOMBRE'];
            $curso["CURS_DESCRIPCION"] = $_REQUEST['CURS_DESCRIPCION'];
            $curso["CURS_PRECIO"] = $_REQUEST['CURS_PRECIO'];
            $curso["CAT_ID"] = $_REQUEST['CAT_ID'];
            $curso["PROF_ID"] = $_REQUEST['PROF_ID'];
            $curso["CURS_IMAGEN"] = Curso::CargarImagen($_FILES['CURS_IMAGEN']);
            $curso["CURS_URL_VIDEO"] = $_REQUEST['CURS_URL_VIDEO'];
            $curso["CURS_ESTADO"] = 1;
            
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
           Curso_Modelo::updateCurso($curso, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
    public static function updateDeshabilitar()
    {
        if (isset($_POST['estado']) && isset($_POST['id'])) {
            $curso["CURS_ESTADO"] = $_POST["estado"];
            $id = $_POST['id'];
            $cursos = Curso_Modelo::updateCursoDeshabilitar($curso, $id);
            $mensaje["mensaje"] = "exito";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["statud"] = "500";
            echo json_encode($mensaje);
        }
    }


    public static function getCursosByidUser()
    {
        if (isset($_POST['usuario'])) {
            $usuario = $_POST["usuario"];
            $cursos = Curso_Modelo::getCursosByidUser($usuario);
            echo json_encode($cursos);
        } else {
            $mensaje["mensaje"] = "fallo";
            $mensaje["statud"] = "500";
            echo json_encode($mensaje);
        }
    }

    public static function createVideoCheck()
    {
        $check["VI_ID"] = $_POST['VI_ID'];
        $check["CURS_ID"] = $_POST['CURS_ID'];
        $check["CLI_ID"] = $_POST['CLI_ID'];
        $cursos = VideoCheck_Modelo::insertCheck($check);
        echo json_encode($cursos);
    }
}
