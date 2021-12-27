<?php 
class UsuarioRol_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM usuario_rol",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM usuario_rol WHERE URO_ID=?",array($id));
    }
    public static function insertUsuario_rol($usuario_rol){
        Database::queryChange("INSERT INTO usuario_rol (USR_ID, ROL_ID,URO_STATUS) VALUES (?, ?, ?);",array($usuario_rol["USR_ID"],$usuario_rol["ROL_ID"],1));
    }
    public static function updateUsuario_rol($usuario_rol,$id){
        Database::queryChange("UPDATE usuario_rol SET USR_ID=?, ROL_ID=?, URO_STATUS=? WHERE  URO_ID=?;",array(array($usuario_rol["USR_ID"],$usuario_rol["ROL_ID"],$usuario_rol["URO_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM usuario_rol WHERE  URO_ID=?;",array($id));
    }
}

?>