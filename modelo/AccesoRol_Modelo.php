<?php 
class AccesoRol_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM acceso_rol",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM acceso_rol where ACCRO_ID=?",array($id));
    }
    public static function insertAccesoRol($AccesoRol){
        Database::queryChange("INSERT INTO acceso_rol(ACC_ID,ROL_ID,ACCRO_STATUS) values(?,?,?);",
        array($AccesoRol["ACC_ID"],$AccesoRol["ROL_ID"],1));
    }

    public static function updateAccesoRol($AccesoRol,$id){
        Database::queryChange("UPDATE acceso_rol set ACC_ID=?,ROL_ID=?,ACCRO_STATUS=? where ACCRO_ID=?",
        array(array($AccesoRol["ACC_ID"],$AccesoRol["ROL_ID"],$AccesoRol["ACCRO_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE from acceso_rol  where idelemento=?",array($id));
    }

}

?>
