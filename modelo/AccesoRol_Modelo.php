<?php 
class AccesoRol_Modelo{
    public static function getAll(){
        return $data=Database::query("select * from elemento ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("select * from elemento where idelemento=?",array($id));
    }
    public static function insertModulo($nombre){
        Database::queryChange("insert into elemento(nombre,estado) values(?,?)",array($nombre,1));
    }
    public static function updateModulo($nombre,$id){
        Database::queryChange("update elemento set nombre=? where idelemento=?",array($nombre,$id));
    }
    public static function delete($id){
        Database::queryChange("delete from elemento  where idelemento=?",array($id));
    }

}

?>
