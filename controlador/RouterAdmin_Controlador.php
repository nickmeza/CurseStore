<?php

class RoutesAdmin
{
    public static function index()
    {
        include_once "./vistas/administrador/Admin.php";
    }
    public static function curso($codigocurso)
    {
        $dataCategoria = Categoria_Modelo::getAll();
        $dataProfesores = Profesor_Modelo::getProfesorData();
        if (isset($codigocurso[3]) && strlen($codigocurso[3]) > 0) {
            include_once "./vistas/administrador/cursos/DetalleCurso.php";
        } else {
            include_once "./vistas/administrador/cursos/Curso.php";
        }
    }
    public static function ventas()
    {
        include_once "./vistas/administrador/ventas/Orden.php";
    }
    public static function promocion()
    {
        include_once "./vistas/administrador/ventas/Promocion.php";
    }
    public static function indexOf($array, $word)
    {
        foreach ($array as $key => $value) if ($value === $word) return $key;
        return -1;
    }
    public static function descuento()
    {
        $allCursos = Curso_Modelo::getAll();
        $cursosEdit = $allCursos;
        $cursosDescuento = Curso_Modelo::getAllIfNotDiscount();
        foreach ($cursosDescuento as $curso) {
            for ($i = 0; $i < sizeof($allCursos); $i++) {
                if (isset($allCursos[$i]) && ($allCursos[$i]['CURS_ID'] == $curso['CURS_ID'])) {
                    unset($allCursos[$i]);
                }
            }
        }
        $cursos = $allCursos;

        include_once "./vistas/administrador/ventas/Descuento.php";
    }
    public static function crear_curso($url)
    {   
        $dataCategoria = Categoria_Modelo::getAll();
        $dataProfesores = Profesor_Modelo::getProfesorData();
        include_once "./vistas/administrador/cursos/CrearCurso.php";
    }
    public static function perfil()
    {
        include_once "./vistas/administrador/perfil/Cuenta.php";
    }
    public static function categoria()
    {
        include_once "./vistas/administrador/cursos/Categoria.php";
    }
    public static function historial()
    {
        include_once "./vistas/administrador/cursos/Categoria.php";
    }
    public static function solicitudes()
    {
        include_once "./vistas/administrador/ventas/Solicitudes.php";
    }

    public static function admin()
    {
        include_once "./vistas/administrador/Admin.php";
    }
    public static function profesor()
    {
        include_once "./vistas/administrador/usuario/Profesor.php";
    }
    public static function cliente()
    {
        include_once "./vistas/administrador/usuario/Cliente.php";
    }
    public static function empresa()
    {
        include_once "./vistas/administrador/tienda/Empresa.php";
    }
    public static function correos()
    {
        include_once "./vistas/administrador/tienda/Correo.php";
    }
    public static function metodo_pagos()
    {
        include_once "./vistas/administrador/tienda/Metodo_Pagos.php";
    }
}
