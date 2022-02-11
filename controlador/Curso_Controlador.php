<?php

class Curso
{
    public static function getAll()
    {
        echo "json";
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function getCursosDescuento()
    {
        $cursosdescuento = Curso_Modelo::getCursosDescuento();
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
            $curso = $_POST["ids"];
            $usuario = $_POST["ids"];
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
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function delete()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
    public static function update()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
}
