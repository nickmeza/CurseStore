<?php 
class Cliente_Modelo{
    public static function getAll(){
        return $data=Database::query("select * from elemento ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("select * from elemento where idelemento=?",array($id));
    }
    public static function insertModulo($cliente){
        Database::queryChange("insert into elemento(nombre,CLI_NOMBRE,estado) values(?,?,?,??)",array($cliente['CLI_NOMBRE'],1));
    }
    public static function updateModulo($cliente,$id){
        Database::queryChange("update elemento set nombre=? where idelemento=?",array($cliente,$id));
    }
    public static function delete($id){
        Database::queryChange("delete from elemento  where idelemento=?",array($id));
    }

}

?>