<?php 
class Video_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM video",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM video WHERE VI_ID=?",array($id));
    }
    public static function insertVideo($video){
        Database::queryChange("INSERT INTO video (SMOD_ID, VI_DESCRIPCION,VI_URL,VI_ESTADO) VALUES (?, ?, ?, ?);",array($video["SMOD_ID"],$video["VI_DESCRIPCION"],$video["VI_URL"],1));
    }
    public static function updateVideo($video,$id){
        Database::queryChange("UPDATE video SET SMOD_ID=?, VI_DESCRIPCION=?, VI_URL=?, VI_ESTADO=? WHERE  VI_ID=?;",array(array($video["SMOD_ID"],$video["VI_DESCRIPCION"],$video["VI_URL"],$video["VI_ESTADO"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM video WHERE  VI_ID=?;",array($id));
    }
}

?>