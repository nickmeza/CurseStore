<?php

class Orden
{
    public static function getAll()
    {
        $orden = Orden_Modelo::getAll();
        echo json_encode($orden);
    }
    public static function get_estado()
    {
        $orden = Orden_Modelo::get_estado();
        echo json_encode($orden);
    }
    public static function getDataOrderById($id)
    {
        $orden = Orden_Modelo::getDataOrderById($id[4]);
        echo json_encode($orden);
    }
    public static function insertOrder()
    {
        if (isset($_FILES['ORD_VOUCHER'])) {
            $orden["ORD_VOUCHER"] = Banner::CargarImagen($_FILES['ORD_VOUCHER']);
            $orden['CLI_ID'] = $_REQUEST['CLI_ID'];
            $orden['ORD_DATE_ORDER'] = $_REQUEST['ORD_DATE_ORDER'];
            $orden['ORD_APPROVAL'] = $_REQUEST['ORD_APPROVAL'];
            $orden['ORD_TOTAL_PRICE'] = $_REQUEST['ORD_TOTAL_PRICE'];
            $orden['ORD_DISCOUNT'] = $_REQUEST['ORD_DISCOUNT'];
            $orden['ORD_IGV'] = $_REQUEST['ORD_IGV'];
            Orden_Modelo::insertOrder($orden);
            $orderCreated = Orden_Modelo::selectOrderByAllAtribute($orden);
            echo json_encode($orderCreated);
        } else {
            echo "fallo al crear";
        }
    }
    public static function insertOrderDetalle()
    {
        if (isset($_REQUEST['ORD_ID'])) {
            $ordenDetalle["ORD_ID"] = $_REQUEST['ORD_ID'];
            $ordenDetalle['CURS_ID'] = $_REQUEST['CURS_ID'];
            $ordenDetalle['DESC_ID'] = $_REQUEST['DESC_ID'];
            $ordenDetalle['ODT_SUBTOTAL'] = $_REQUEST['ODT_SUBTOTAL'];
            OrdenDetalle_Modelo::insertOrdemdetalle($ordenDetalle);
            echo "correctamente creado";
        } else {
            echo "fallo al crear";
        }
    }
    public static function update()
    {
        include_once "./vistas/cliente/curso/Categoria.php";
    }
}
