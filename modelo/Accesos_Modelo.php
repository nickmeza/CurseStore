<?php 
class Accesos_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM accesos ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM accesos where ACC_ID=?",array($id));
    }
    public static function insertAcceso($acceso){
        Database::queryChange("INSERT INTO accesos (ACC_URL,ACC_STATUS) values(?,?);",
        array($acceso["ACC_URL"],1));
    }
    public static function updateAcceso($acceso,$id){
        Database::queryChange("UPDATE accesos set ACC_URL=?,ACC_STATUS=? where ACC_ID=?",
        array(array($acceso["ACC_URL"],$acceso["ACC_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM accesos  where ACC_ID=?",array($id));
    }

}

?>