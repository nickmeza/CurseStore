<?php

class Descuento
{


    public static function admin_descuento_eliminar($id)
    {
        if (isset($id) && isset($id[4]) && strlen($id[4]) > 0) {
            $borrado = Descuento_Modelo::delete($id[4]);
            $mensaje["mensaje"] = "correcto";
            $mensaje["status"] = "200";
            echo json_encode($mensaje);
        } else {
            echo "fallo al borrar";
        }
    }

    public static function admin_descuento_agregar($args = array())
    {
        if (isset($_REQUEST['DESC_PORCENT'])) {
            $descuento["DESC_PORCENT"] = $_REQUEST['DESC_PORCENT'];
            $descuento["DESC_DESCRIPTION"] = $_REQUEST['DESC_DESCRIPTION'];
            $descuento["DESC_STAR"] = $_REQUEST['DESC_STAR'];
            $descuento["DESC_END"] = $_REQUEST['DESC_END'];
            Descuento_Modelo::insertDescuento($descuento);
            $descuentoNew = Descuento_Modelo::getByAllAtribute($descuento);
        }
        echo json_encode($descuentoNew);
    }
    public static function admin_detalledescuento_agregar($args = array())
    {
        $detalleDescuento["CURS_ID"] = $_REQUEST['CURS_ID'];
        $detalleDescuento["DESC_ID"] = $_REQUEST['DESC_ID'];
        DetalleDescuento_Modelo::insertModulo($detalleDescuento);
        echo 'creado correctamente';
    }
    public static function admin_descuento_get_one($id)
    {
        if(isset($id[4])){
            $Descuento = Descuento_Modelo::getOne($id[4]);
            $bloque_arr = array(
                'DESC_ID' => $Descuento['DESC_ID'],
                'DESC_PORCENT' => $Descuento['DESC_PORCENT'],
                'DESC_DESCRIPTION' => $Descuento['DESC_DESCRIPTION'],
                'DESC_STAR' => $Descuento['DESC_STAR'],
                'DESC_END' => $Descuento['DESC_END'],
            );
            echo json_encode($bloque_arr);
        }

        //$Session = new UsuarioSession();

        /*if (isset($_SESSION['user'])) {
            if (isset($id[4])) {
                $Descuento = Descuento_Modelo::getOne($id[4]);
                $bloque_arr = array(
                    'idelemento' => $Descuento['idelemento'],
                    'nombre' => $Descuento['nombre'],
                );
                echo json_encode($bloque_arr);
            }else{
                echo json_encode($id);
            }
        }else{
            echo json_encode($id);
        }*/
    }
    public static function admin_descuento_editar($args = array())
    {
        $Session = new UsuarioSession();
        if (isset($_SESSION['user'])) {
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['idelemento'])) {
                Descuento_Modelo::updateDescuento($_REQUEST['nombre'], $_REQUEST['idelemento']);
                echo "success";
            } else {
                echo "not found";
            }
        } else {
            echo "error";
        }
    }
    public static function admin_Descuento_get_all()
    {
        $Descuentos = Descuento_Modelo::getAll();
        echo json_encode($Descuentos);
    }
    public static function exportar()
    {
        $descuentos = Descuento_Modelo::getAll();
        include_once("./excel/descuentoExcel.php");
    }
}
