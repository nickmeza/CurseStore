<?php 
class SubModulo_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM submodulo",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM submodulo WHERE SMOD_ID=?",array($id));
    }
    public static function getbyMod($id){
        return $data=Database::query("SELECT * FROM submodulo WHERE MOD_ID LIKE '$id'",array());        
    }
    public static function insertSubmodulo($submodulo){
        Database::queryChange("INSERT INTO submodulo (MOD_ID, SMOD_NOMBRE,SMOD_DESCRIPCION,SMOD_ESTADO) VALUES (?, ?, ?, ?);",array($submodulo["MOD_ID"],$submodulo["SMOD_NOMBRE"],$submodulo["SMOD_DESCRIPCION"],1));
    }
    public static function updateSubmodulo($submodulo,$id){
        Database::queryChange("UPDATE submodulo SET MOD_ID=?, SMOD_NOMBRE=?, SMOD_DESCRIPCION=?, SMOD_ESTADO=? WHERE  SMOD_ID=?;",array(array($submodulo["MOD_ID"],$submodulo["SMOD_NOMBRE"],$submodulo["SMOD_DESCRIPCION"],$submodulo["SMOD_ESTADO"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM submodulo WHERE  SMOD_ID=?;",array($id));
    }
}

?>