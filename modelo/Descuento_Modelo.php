<?php 
class Descuento_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM descuento",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM descuento where DESC_ID=?",array($id));
    }
    public static function insertdescuento($descuento){
        Database::queryChange("insert into descuento(DESC_PORCENT,DESC_STAR,DESC_END,DESC_STATUS) values(?,?,?,?)"
        ,array($descuento["DESC_PORCENT"],$descuento["DESC_STAR"],$descuento["DESC_END"],1));
    }
    public static function updatedescuento($descuento,$id){
        Database::queryChange("UPDATE descuento set DESC_PORCENT=?,DESC_STAR=?,DESC_END=?,DESC_STATUS=?
         where DESC_ID=?",array(array($descuento["DESC_PORCENT"],$descuento["DESC_STAR"],$descuento["DESC_END"],$descuento["DESC_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM descuento  where DESC_ID=?",array($id));
    }

}

?>