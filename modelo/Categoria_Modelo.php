<?php 
class Categoria_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM categoria ",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * from categoria where CAT_ID=?",array($id));
    }
    public static function insertCategoria($categoria){
        Database::queryChange("INSERT INTO categoria(CAT_NAME,CAT_DESCRIPCION,CAT_ESTADO,CAT_IMAGEN) VALUES (?,?,?,?);"
        ,array($categoria["CAT_NAME"],$categoria["CAT_DESCRIPCION"],1,$categoria["CAT_IMAGEN"])); 
    }
    public static function updateCategoria($categoria,$id){
        Database::queryChange("UPDATE categoria set CAT_NAME=?,CAT_DESCRIPCION=?,CAT_ESTADO=?,CAT_IMAGEN=? where CAT_ID=?",
        array($categoria["CAT_NAME"],$categoria["CAT_DESCRIPCION"],$categoria["CAT_ESTADO"],$id));
    }
    public static function delete($id){
        Database::queryChange("DELETE from categoria  where CAT_ID=?",array($id));
    }

}

?>