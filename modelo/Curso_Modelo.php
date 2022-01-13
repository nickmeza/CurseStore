<?php 
class Curso_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM curso ",array());
    }//
    public static function getByName($buscador){
        return $data=Database::query("SELECT * FROM curso where CURS_NOMBRE LIKE '%$buscador%' ",array());
    }

    public static function getByIds($ids){
        return $data=Database::query('SELECT * FROM curso where CURS_ID IN (' . implode(',', array_map('intval', $ids)) . ')' ,array());
    }

    public static function getOneIdByName($name){
        $data=Database::queryOne("SELECT CURS_ID FROM curso where CURS_NOMBRE like '%$name%';",array());
        return $data['CURS_ID'];
    }

    public static function getCursosDescuento(){
        return $data=Database::query("SELECT c.*, c.CURS_PRECIO - (c.CURS_PRECIO * (d.DESC_PORCENT/100)) as CURS_DISCOUNT FROM detalle_descuento dd, descuento d,curso c WHERE dd.DESC_ID=d.DESC_ID AND dd.CURS_ID=c.CURS_ID AND d.DESC_STATUS=1 AND c.CURS_ESTADO=1;",array());
    }
    //
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM curso where CURS_ID=?",array($id));
    }
    
    public static function insertCurso($curso){
        Database::queryChange("INSERT INTO curso (CAT_ID,PROF_ID,CURS_NOMBRE,CURS_DESCRIPCION,CURS_IMAGEN,CURS_URL_VIDEO,CURS_ESTADO) VALUES (?,?,?,?,?,?,?);", array($curso["CAT_ID"],$curso["PROF_ID"],$curso["CURS_NOMBRE"],$curso["CURS_DESCRIPCION"],$curso["CURS_IMAGEN"],$curso["CURS_URL_VIDEO"],1));
    }
    public static function updateCurso($curso,$id){
        Database::queryChange("UPDATE curso set CAT_ID=?,PROF_ID=?,CURS_NOMBRE=?,CURS_DESCRIPCION=?,CURS_IMAGEN=?,CURS_URL_VIDEO=? where CURS_ID=?",array(array($curso["CAT_ID"],$curso["PROF_ID"],$curso["CURS_NOMBRE"],$curso["CURS_DESCRIPCION"],$curso["CURS_IMAGEN"],$curso["CURS_URL_VIDEO"],$curso["CURS_ESTADO"],$id)));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM curso  where CURS_ID=?",array($id));
    }

}
