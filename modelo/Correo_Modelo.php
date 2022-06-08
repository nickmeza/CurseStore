<?php 
class Correo_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM correos ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * from correos where COR_ID=?",array($id));
    }
    public static function insertCorreo($correo){
        Database::queryChange("INSERT INTO correos(CLI_ID,COR_NOMBRE,COR_CORREO,COR_DESCRIPCION,COR_ASUNTO) VALUES (?,?,?,?,?);"
        ,array($correo["CLI_ID"],$correo["COR_NOMBRE"],$correo["COR_CORREO"],$correo["COR_DESCRIPCION"],$correo["COR_ASUNTO"])); 
    }
    public static function updateCorreo($correo,$id){
        Database::queryChange("UPDATE correos set CLI_ID=?,COR_NOMBRE=?,COR_CORREO=?,COR_DESCRIPCION=?,COR_ASUNTO=? where COR_ID=?",
        array($correo["CLI_ID"],$correo["COR_NOMBRE"],$correo["COR_CORREO"],$correo['COR_DESCRIPCION'],$id));
    }
    public static function delete($id){
        $datos = Database::queryChange("DELETE from correos  where COR_ID=?",array($id));
        return $datos;
    }
    public static function getCorreosData()
    {
        return $data = Database::query(
            "SELECT p.*,co.COR_ID,co.COR_CORREO,co.COR_DESCRIPCION,co.COR_ASUNTO FROM correos co,cliente cli ,persona p,usuario u WHERE co.CLI_ID=cli.CLI_ID  AND cli.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID ORDER BY COR_ID DESC" , array());
    }
    public static function getDataCorreoById($id)
    {
        return $data =  Database::queryOne(
            "SELECT p.*,co.COR_ID,co.COR_CORREO,co.COR_DESCRIPCION,co.COR_ASUNTO FROM correos co,cliente cli ,persona p,usuario u WHERE co.CLI_ID=cli.CLI_ID  AND cli.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID AND co.COR_ID = ?;",
            array($id)
        );
    }

}

?>