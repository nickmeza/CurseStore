<?php
Class VideoCheck_Modelo{
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
    public static function checkVideo($id){
        Database::query("SELECT * FROM (SELECT c.CURS_ID,v.VI_ID 
            FROM modulo m, submodulo s,curso c, video v WHERE m.CURS_ID=c.CURS_ID 
            AND s.MOD_ID = m.MOD_ID AND v.SMOD_ID = s.SMOD_ID
            AND c.CURS_ID = ?) 
            AS comp LEFT JOIN video_check vc
            ON  comp.VI_ID= vc.VI_ID",array($id));
    }
}

?>