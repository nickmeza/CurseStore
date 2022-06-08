<?php

class Empresa
{
    public static function getAll()
    {
        $empresa = array();
        $empresa = Empresa_Modelo::getAll();
        // array_splice($empresa, 0, 1);
        echo json_encode($empresa);
    }
    
    public static function getById($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $empresa = array();
            $empresa = Empresa_Modelo::getOne($id[4]);
            echo json_encode($empresa);
        } else {
            echo "fallo al buscar";
        }
    }
    public static function create()
    {
        if (isset($_REQUEST['EMP_RUC']) && isset($_REQUEST['EMP_NOMBRE']) && isset($_REQUEST['EMP_DIRECCION']) && isset($_REQUEST['EMP_TELEFONO']) && isset($_REQUEST['EMP_TELEFONO2'])&& isset($_REQUEST['EMP_N_TRABAJADOR'])&& isset($_REQUEST['EMP_CODIGO_CIIU'])&& isset($_REQUEST['EMP_FECHA'])&& isset($_REQUEST['EMP_CORREO'])&& isset($_REQUEST['EMP_FACEBOOK'])&& isset($_REQUEST['EMP_INSTAGRAM'])&& isset($_REQUEST['EMP_LINKEDIN'])) {
            $empresa["EMP_RUC"] = $_REQUEST['EMP_RUC'];
            $empresa["EMP_NOMBRE"] = $_REQUEST['EMP_NOMBRE'];
            $empresa["EMP_DIRECCION"] = $_REQUEST['EMP_DIRECCION'];
            $empresa["EMP_TELEFONO"] = $_REQUEST['EMP_TELEFONO'];
            $empresa["EMP_TELEFONO2"] = $_REQUEST['EMP_TELEFONO2'];
            $empresa["EMP_N_TRABAJADOR"] = $_REQUEST['EMP_N_TRABAJADOR'];
            $empresa["EMP_CODIGO_CIIU"] = $_REQUEST['EMP_CODIGO_CIIU'];
            $empresa["EMP_FECHA"] = $_REQUEST['EMP_FECHA'];
            $empresa["EMP_CORREO"] = $_REQUEST['EMP_CORREO'];
            $empresa["EMP_FACEBOOK"] = $_REQUEST['EMP_FACEBOOK'];
            $empresa["EMP_INSTAGRAM"] = $_REQUEST['EMP_INSTAGRAM'];
            $empresa["EMP_LINKEDIN"] = $_REQUEST['EMP_LINKEDIN'];
            Empresa_Modelo::insertEmpresa($empresa);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    public static function delete($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Empresa_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }
    public static function update($id)
    {
        if (isset($_REQUEST['EMP_RUC']) && isset($_REQUEST['EMP_NOMBRE']) && isset($_REQUEST['EMP_DIRECCION']) && isset($_REQUEST['EMP_TELEFONO']) && isset($_REQUEST['EMP_TELEFONO2'])&& isset($_REQUEST['EMP_N_TRABAJADOR'])&& isset($_REQUEST['EMP_CODIGO_CIIU'])&& isset($_REQUEST['EMP_FECHA'])&& isset($_REQUEST['EMP_CORREO'])&& isset($_REQUEST['EMP_FACEBOOK'])&& isset($_REQUEST['EMP_INSTAGRAM'])&& isset($_REQUEST['EMP_LINKEDIN'])) {
            $empresa["EMP_RUC"] = $_REQUEST['EMP_RUC'];
            $empresa["EMP_NOMBRE"] = $_REQUEST['EMP_NOMBRE'];
            $empresa["EMP_DIRECCION"] = $_REQUEST['EMP_DIRECCION'];
            $empresa["EMP_TELEFONO"] = $_REQUEST['EMP_TELEFONO'];
            $empresa["EMP_TELEFONO2"] = $_REQUEST['EMP_TELEFONO2'];
            $empresa["EMP_N_TRABAJADOR"] = $_REQUEST['EMP_N_TRABAJADOR'];
            $empresa["EMP_CODIGO_CIIU"] = $_REQUEST['EMP_CODIGO_CIIU'];
            $empresa["EMP_FECHA"] = $_REQUEST['EMP_FECHA'];
            $empresa["EMP_CORREO"] = $_REQUEST['EMP_CORREO'];
            $empresa["EMP_FACEBOOK"] = $_REQUEST['EMP_FACEBOOK'];
            $empresa["EMP_INSTAGRAM"] = $_REQUEST['EMP_INSTAGRAM'];
            $empresa["EMP_LINKEDIN"] = $_REQUEST['EMP_LINKEDIN'];
            $mensaje["mensaje"] = "correcto";
            $mensaje["statud"] = "200";
            Empresa_Modelo::updateEmpresa($empresa, $id[4]);
            echo json_encode($mensaje);
        } else {
            echo "fallo al actualizar";
        }
    }
}