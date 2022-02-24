<?php 
class MetodoPago_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM metodo_pago",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * from metodo_pago where MET_ID=?",array($id));
    }
    public static function insertMetodoPago($metodoP){
        Database::queryChange("INSERT INTO metodo_pago(MET_NOMBRE,MET_DATOS,MET_IMAGEN,MET_ESTADO) values(?,?,?,?)",array($metodoP["MET_NOMBRE"],$metodoP["MET_DATOS"],$metodoP["MET_IMAGEN"],1));
    }
    public static function updateBanner($metodoP,$id){
        if($metodoP['MET_IMAGEN']!="publico/img/imagen_default.png" ) {
        Database::queryChange("UPDATE metodo_pago set MET_IMAGEN=?,MET_ESTADO=?,MET_NOMBRE=?,MET_DATOS=? where BANNER_ID=?",
            array($metodoP["MET_IMAGEN"],$metodoP["MET_ESTADO"],$metodoP["MET_NOMBRE"],$metodoP["MET_DATOS"],$id));
    } else {
        Database::queryChange("UPDATE metodo_pago set MET_ESTADO=?,MET_NOMBRE=?, MET_DATOS=? where MET_ID=?",
                   array($metodoP["MET_ESTADO"],$metodoP["MET_NOMBRE"],$metodoP["MET_DATOS"],$id));
     }
 }
    public static function delete($id){
        Database::queryChange("DELETE from metodo_pago  where MET_ID=?",array($id));
    
        }
 }
