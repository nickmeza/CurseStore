<?php 
class Usuario_modelo{
    public static function findUser($usuario,$password){
        $data=Database::query("select * from usuario where usuario=? and password=?",array($usuario,$password));
        if(count($data)>0){
            return true;
        }else{
            return false;
        }

    }
    public static function getUser($usuario,$password){
        return $data=Database::query("select * from usuario where usuario=? and password=?",array($usuario,$password));

    }
}

?>
