<?php 
class Modulo_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM modulo",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM modulo WHERE MOD_ID=?",array($id));
    }
    public static function insertModulo($modulo){
        Database::queryChange("INSERT INTO modulo (CURS_ID, MOD_NOMBRE, MOD_DESCRIPCION, MOD_ESTADO) VALUES (?, ?, ?, ?);",array($modulo["CURS_ID"],$modulo["MOD_NOMBRE"],$modulo["MOD_DESCRIPCION"],1));
    }
    public static function updateModulo($modulo,$id){
        Database::queryChange("UPDATE modulo SET CURS_ID=?, MOD_NOMBRE=?, MOD_DESCRIPCION=?, MOD_ESTADO=? WHERE  MOD_ID=?;",array(array($modulo["CURS_ID"],$modulo["MOD_NOMBRE"],$modulo["MOD_DESCRIPCION"],$modulo["MOD_ESTADO"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM modulo WHERE  MOD_ID=?;",array($id));
    }

}

?>
