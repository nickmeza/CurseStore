<?php
class Usuario_modelo
{

    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM usuario", array());
    }
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM usuario WHERE USR_ID=?", array($id));
    }
    public static function insertUsuario($usuario)
    {
        Database::queryChange("INSERT INTO usuario (PER_ID, USR_USUARIO,USR_PASSWORD,USR_STATUS) VALUES (?, ?, ?, ?);", array($usuario["PER_ID"], $usuario["USR_USUARIO"], $usuario["USR_PASSWORD"], 1));
    }
    public static function updateUsuario($usuario, $id)
    {
        Database::queryChange("UPDATE usuario SET PER_ID=?, USR_USUARIO=?, USR_PASSWORD=?, USR_STATUS=? WHERE  USR_ID=?;", array(array($usuario["PER_ID"], $usuario["USR_USUARIO"], $usuario["USR_PASSWORD"], $usuario["USR_STATUS"], $id)));
    }
    public static function updatePerfilUsuario($usuario, $id)
    {
        Database::queryChange("CALL AB_EDITARPERFIL(?,?,?,?,?)", array($usuario["nombre"], $usuario["apellido"], $usuario["direccion"], $usuario["usuario"], $id));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM usuario WHERE  USR_ID=?;", array($id));
    }

    public static function findUser($usuario, $password)
    {
        $data = Database::query("SELECT * FROM usuario WHERE usr_usuario=? AND usr_password=?", array($usuario, $password));
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function getUser($usuario, $password)
    {
        return $data = Database::query("SELECT * FROM usuario WHERE USR_USUARIO=? AND USR_PASSWORD=?", array($usuario, $password));
    }
    public static function getClientbyUser($usuario)
    {
        return $data = Database::queryOne("SELECT * from cliente where USR_ID = ?", array($usuario));
    }
}
