<?php 
class Cliente_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM cliente",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM cliente where CLI_ID=?",array($id));
    }
    public static function insertCliente($cliente){
        Database::queryChange("INSERT INTO cliente (USR_ID,CLI_STATUS, CLI_CREATE) VALUES (?,?,?);",
        array($cliente["USR_ID"],1,$cliente["CLI_CREATE"])); //ESTADO
    }
    public static function updateCliente($cliente,$id){
        Database::queryChange("UPDATE cliente set USR_ID=?,CLI_STATUS,CLI_CREATE where CLI_ID=?",
        array(array($cliente["USR_ID"],$cliente["CLI_STATUS"],$cliente["CLI_CREATE"],$cliente["CLI_STATUS"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE from cliente  where CLI_ID=?",array($id));
    }

}

?>