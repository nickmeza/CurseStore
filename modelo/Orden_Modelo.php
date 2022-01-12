<?php 
class Orden_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM orden",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM orden WHERE  ORD_ID=?;",array($id));
    }
    public static function get_estado(){
        return $data=Database::query("SELECT o.*,p.PER_ID ,p.PER_NOMBRE ,p.PER_APELLIDO, p.PER_DIRECCION,p.PER_ESTADO, c.CLI_CREATE FROM orden o, cliente c,usuario u,persona p WHERE c.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID AND ORD_APPROVAL = 0 AND o.CLI_ID=c.CLI_ID ;",array());
    }
    public static function insertModulo($orden){
        Database::queryChange("INSERT INTO orden (CLI_ID, ORD_DATE_ORDER, ORD_APPROVAL, ORD_VOUCHER, ORD_TOTAL_PRICE, ORD_DISCOUNT, ORD_IGV, ORD_STATUS) VALUES (?,?,?,?,?,?,?,?);",
                              array($orden['CLI_ID'],$orden['ORD_DATE_ORDER'],$orden['ORD_APPROVAL'],$orden['ORD_VOUCHER'],$orden['ORD_TOTAL_PRICE'],$orden['ORD_DISCOUNT'],$orden['ORD_IGV'],1));
    }
    public static function updateModulo($orden,$id){
        Database::queryChange("UPDATE orden SET CLI_ID=?, ORD_DATE_ORDER=?, ORD_APPROVAL=?, ORD_VOUCHER=?, ORD_TOTAL_PRICE=?, ORD_DISCOUNT=?, ORD_IGV=?, ORD_STATUS=? WHERE  ORD_ID=?;",
                            array($orden['CLI_ID'],$orden['ORD_DATE_ORDER'],$orden['ORD_APPROVAL'],$orden['ORD_VOUCHER'],$orden['ORD_TOTAL_PRICE'],$orden['ORD_DISCOUNT'],$orden['ORD_IGV'],$orden['ORD_STATUS'],$id));
    }
    public static function delete($id){
        Database::queryChange("DELETE FROM orden WHERE  ORD_ID=?;",array($id));
    }



}

?>