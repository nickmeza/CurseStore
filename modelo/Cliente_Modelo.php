<?php
class Cliente_Modelo
{
    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM cliente", array());
    }
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM cliente where CLI_ID=?", array($id));
    }
    public static function insertCliente($cliente)
    { 
            Database::queryChange(
                "CALL AB_AGREGARCLIENTE(?, ?, ?, ?, ?);",
                array($cliente["NOMBRE"], $cliente["APELLIDO"], $cliente["DIRECCION"], $cliente["USUARIO"], $cliente["CONTRASENA"])
            );
        
    }
    public static function updateCliente($cliente, $id)
    {
        Database::queryChange(
            "UPDATE cliente set USR_ID=?,CLI_STATUS,CLI_CREATE where CLI_ID=?",
            array(array($cliente["USR_ID"], $cliente["CLI_STATUS"], $cliente["CLI_CREATE"], $cliente["CLI_STATUS"], $id))
        );
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE from cliente  where CLI_ID=?", array($id));
    }
    public static function getClientData()
    {
        return $data = Database::query("SELECT p.PER_ID ,p.PER_NOMBRE ,p.PER_APELLIDO, p.PER_DIRECCION,p.PER_ESTADO, c.CLI_CREATE FROM cliente c,usuario u,persona p WHERE c.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID;", array());
    }
    public static function ClientData()
    {
        return $data = Database::query("SELECT p.PER_ID ,p.PER_NOMBRE ,u.usr_usuario,p.PER_APELLIDO, p.PER_DIRECCION FROM cliente c,usuario u,persona p WHERE c.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID", array());
    }
}
