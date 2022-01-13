<?php
class OrdenDetalle_Modelo
{
    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM orden_detalle", array());
    }
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM orden_detalle WHERE  ODT_ID=?;", array($id));
    }
    public static function insertOrdemdetalle($ordendetalle)
    {
        Database::queryChange(
            "INSERT INTO orden_detalle (ORD_ID, CURS_ID, DESC_ID, ODT_SUBTOTAL, ODT_STATUS) VALUES (?,?,?,?,?);",
            array($ordendetalle['ORD_ID'], $ordendetalle['CURS_ID'], $ordendetalle['DESC_ID'], $ordendetalle['ODT_SUBTOTAL'], 1)
        );
    }
    public static function updateModulo($ordendetalle, $id)
    {
        Database::queryChange("UPDATE orden_detalle SET ORD_ID=?,CURS_ID=?, DESC_ID=?,ODT_SUBTOTAL=?, ODT_STATUS=? WHERE  ODT_ID=?;", array($ordendetalle['ORD_ID'], $ordendetalle['CURS_ID'], $ordendetalle['DESC_ID'], $ordendetalle['ODT_SUBTOTAL'], $ordendetalle['ODT_STATUS'],$id));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM orden_detalle WHERE  ODT_ID=?;", array($id));
    }
}
