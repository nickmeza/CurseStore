<?php 
class Rol_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM rol",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM rol WHERE ROL_ID=?",array($id));
    }
    public static function insertRol($rol){
        Database::queryChange("INSERT INTO rol (ROL_NOMBRE, ROL_DESCRIPCION, ROL_STATUS) VALUES (?, ?, ?);",array($rol["ROL_NOMBRE"],$rol["ROL_DESCRIPCION"],1));
    }
    public static function updateRol($rol,$id){
        Database::queryChange("UPDATE rol SET ROL_NOMBRE=?, ROL_DESCRIPCION=?, ROL_STATUS=? WHERE  ROL_ID=?;",array(array($rol["ROL_NOMBRE"],$rol["ROL_DESCRIPCION"],$rol["ROL_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM rol WHERE  ROL_ID=?;",array($id));
    }
}

?>