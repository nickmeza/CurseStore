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
        Database::queryChange("update elemento set nombre=? where idelemento=?",array(array($modulo["CURS_ID"],$modulo["MOD_NOMBRE"],$modulo["MOD_DESCRIPCION"],$modulo["MOD_ESTADO"],1)));
    }
    public static function delete($id){
        Database::queryChange("delete from elemento  where idelemento=?",array($id));
    }

}

?>
