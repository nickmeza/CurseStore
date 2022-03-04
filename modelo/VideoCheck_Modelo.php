<?php
Class VideoCheck{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM video_check",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM video_check WHERE CHECK_ID=?",array($id));
    }
    public static function insertCheck($check){
        Database::queryChange("INSERT INTO video_check (VI_ID, CURS_ID, CLI_ID,CHECK_ESTADO) VALUES (?, ?, ?,?);",array($check["VI_ID"],$check["CURS_ID"],$check["CLI_ID"],1));
    }
    public static function updateCheck($check,$id){
        Database::queryChange("UPDATE video_check SET VI_ID=?, CURS_ID=?, CLI_ID=?, CHECK_ESTADO=? WHERE CHECK_ID=?;",array($check["VI_ID"],$check["CURS_ID"],$check["CLI_ID"],$check["CHECK_ESTADO"],$id));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM video_check WHERE  CHECK_ID=?;",array($id));
    }
}

?>