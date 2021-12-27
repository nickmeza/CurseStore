<?php 
class CaliCurso_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM cali_curso ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM cali_curso where CALI_ID=?",array($id));
    }
    public static function insertCali($cali){
        Database::queryChange("INSERT INTO cali_curso(CLI_ID,CURS_ID,CALI_START) values(?,?,?)",
        array($cali["CLI_ID"],$cali["CURS_ID"],$cali["CURS_START"])); 
    }
    public static function updateCali($cali,$id){
        Database::queryChange("UPDATE cali_curso set CLI_ID=?,CURS_ID=?,CALI_START=? where CALI_ID=?"
        ,array(array($cali["CLI_ID"],$cali["CURS_ID"],$cali["CURS_START"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM cali_curso  where CALI_ID=?",array($id));
    }

}

?>