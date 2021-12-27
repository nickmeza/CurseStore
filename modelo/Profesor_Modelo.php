<?php 
class Profesor_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM profesor",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM profesor WHERE PROF_ID=?",array($id));
    }
    public static function insertProfesor($profesor){
        Database::queryChange("INSERT INTO profesor (USR_ID, PROF_STATUS) VALUES (?, ?);",array($profesor["USR_ID"],1));
    }
    public static function updateProfesor($profesor,$id){
        Database::queryChange("UPDATE profesor SET USR_ID=?, PROF_STATUS=? WHERE  PROF_ID=?;",array(array($profesor["USR_ID"],$profesor["PROF_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM profesor WHERE  PROF_ID=?;",array($id));
    }
}

?>