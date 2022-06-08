<?php 
class Empresa_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM empresa",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * from empresa where EMP_ID=?",array($id));
    }
    public static function insertEmpresa($empresa){
        Database::queryChange("INSERT INTO empresa(EMP_RUC,EMP_NOMBRE,EMP_DIRECCION,EMP_TELEFONO,EMP_TELEFONO2,EMP_N_TRABAJADOR,EMP_CODIGO_CIIU,EMP_FECHA,EMP_CORREO,EMP_FACEBOOK,EMP_INSTAGRAM,EMP_LINKEDIN) values(?,?,?,?,?,?,?,?,?,?,?,?)",array($empresa["EMP_RUT"],$empresa["EMP_NOMBRE"],$empresa["EMP_DIRECCION"],$empresa["EMP_TELEFONO"],$empresa["EMP_TELEFONO2"],$empresa["EMP_N_TRABAJADOR"],$empresa["EMP_CODIGO_CIIU"],$empresa["EMP_FECHA"],$empresa["EMP_CORREO"],$empresa["EMP_FACEBOOK"],$empresa["EMP_INSTAGRAM"],$empresa["EMP_LINKEDIN"]));
    }
    public static function updateEmpresa($empresa,$id){
         Database::queryChange(
             "UPDATE empresa set EMP_RUC=?,EMP_NOMBRE=?,EMP_DIRECCION=?,EMP_TELEFONO=?,EMP_TELEFONO2=?,EMP_N_TRABAJADOR=?,EMP_CODIGO_CIIU=?,EMP_FECHA=?,EMP_CORREO=?,EMP_FACEBOOK=?,EMP_INSTAGRAM=?,EMP_LINKEDIN=? where EMP_ID=?",
                    array($empresa["EMP_RUC"],$empresa["EMP_NOMBRE"],$empresa["EMP_DIRECCION"],$empresa["EMP_TELEFONO"],$empresa["EMP_TELEFONO2"],$empresa["EMP_N_TRABAJADOR"],$empresa["EMP_CODIGO_CIIU"],$empresa["EMP_FECHA"],$empresa["EMP_CORREO"],$empresa["EMP_FACEBOOK"],$empresa["EMP_INSTAGRAM"],$empresa["EMP_LINKEDIN"],$id));
     
    }
    public static function delete($id){
        Database::queryChange("DELETE from empresa  where EMP_ID=?",array($id));
    
        }

 }
