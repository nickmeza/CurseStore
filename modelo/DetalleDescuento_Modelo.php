<?php 
class DetalleDescuento_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM detalle_descuento;",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM detalle_descuento WHERE  DSC_ID=?;",array($id));
    }
    public static function insertModulo($detalledescuento){
        Database::queryChange("INSERT INTO detalle_descuento (CURS_ID, DESC_ID) VALUES (?, ?);",array($detalledescuento['CURS_ID'],$detalledescuento['DESC_ID']));
    }
    public static function updateModulo($detalledescuento,$id){
        Database::queryChange("UPDATE detalle_descuento SET CURS_ID=?,DESC_ID=? WHERE  DSC_ID=?;",array($detalledescuento['CURS_ID'],$detalledescuento['DESC_ID'],$id));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM detalle_descuento WHERE  DSC_ID=?;",array($id));
    }

}

?>