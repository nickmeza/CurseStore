<?php 
class Orden_Modelo{
    public static function getAll(){
        return $data=Database::query("SELECT * FROM orden",array());
    }
    public static function getOne($id){
        return $data=Database::queryOne("SELECT * FROM orden WHERE  ORD_ID=?;",array($id));
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