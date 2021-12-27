<?php 
class Banner_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM banner",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * from banner where BANNER_ID=?",array($id));
    }
    public static function insertBanner($banner){
        Database::queryChange("INSERT INTO banner(BANNER_IMAGEN,BANNER_STATUS) values(?,?)",array($banner["BANNER_IMAGEN"],1));
    }
    public static function updateBanner($banner,$id){
        Database::queryChange("UPDATE banner set BANNER_IMAGEN=?,BANNER_STATUS=? where BANNER_ID=?",
        array(array($banner["BANNER_IMAGEN"],$banner["BANNER_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE from banner  where BANNER_ID=?",array($id));
    }

}

?>