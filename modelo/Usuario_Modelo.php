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
        Database::queryChange("UPDATE usuario SET PER_ID=?, USR_USUARIO=?, USR_PASSWORD=?, USR_STATUS=? WHERE  USR_ID=?;", array($usuario["PER_ID"], $usuario["USR_USUARIO"], $usuario["USR_PASSWORD"], $usuario["USR_STATUS"], $id));
    }

    public static function updatePerfilUsuario($usuario, $id)
    {
        if (isset($usuario['admin'])) {
            Database::queryChange("CALL AB_EDITARPERFILADMIN(?,?,?,?,?)", array($usuario["nombre"], $usuario["apellido"], $usuario["direccion"], $usuario["usuario"], $id));
        } else {
            Database::queryChange("CALL AB_EDITARPERFILCLIENT(?,?,?,?,?)", array($usuario["nombre"], $usuario["apellido"], $usuario["direccion"], $usuario["usuario"], $id));
        }
    }
    public static function updateContraseña($usuario, $id)
    {
        Database::queryChange("UPDATE usuario set USR_PASSWORD = ? WHERE USR_ID = ?;", array($usuario["contraseña"], $id));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM usuario WHERE  USR_ID=?;", array($id));
    }
    public static function chageEstado($id, $estado)
    {
        Database::queryChange("CALL AB_EDITESTADO(?, ?)", array($estado, $id));
    }
    public static function validatedDelete($id)
    {
        $data = Database::query("SELECT * FROM orden o, cliente c, usuario u,persona p WHERE 
        o.CLI_ID=c.CLI_ID AND c.USR_ID = u.USR_ID AND p.PER_ID = u.PER_ID AND p.PER_ID=?;", array($id));
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function validatedProfesorDelete($id)
    {
        $data = Database::query("SELECT * FROM curso c, profesor p, usuario u,persona p WHERE 
        c.PROF_ID=p.PROF_ID AND p.USR_ID = u.USR_ID AND p.PER_ID = u.PER_ID AND p.PER_ID=?;", array($id));
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function getPasswordByUser($id)
    {
        Database::queryChange("select USR_PASSWORD FROM usuario WHERE USR_ID= ?;", array($id));
    }


    public static function findUser($usuario, $password)
    {
        $data = Database::query("SELECT * FROM usuario WHERE USR_USUARIO=? AND USR_PASSWORD=? AND USR_STATUS=1", array($usuario, $password));
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function findUserAdmin($usuario, $password)
    {
        $data = Database::query("SELECT * FROM usuario u, rol r, usuario_rol ur 
        WHERE USR_USUARIO=? AND USR_PASSWORD=?
        AND USR_STATUS=1 AND r.ROL_ID=ur.ROL_ID AND ur.USR_ID=u.USR_ID
        AND r.ROL_NOMBRE<>'Cliente'", array($usuario, $password));
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function getUser($usuario, $password)
    {
        return $data = Database::query("SELECT * FROM usuario WHERE USR_USUARIO=? AND USR_PASSWORD=? AND USR_STATUS=1", array($usuario, $password));
    }
    public static function getUserAdmin($usuario, $password)
    {
        return $data = Database::query("SELECT u.*,r.ROL_NOMBRE FROM usuario u, rol r, usuario_rol ur 
        WHERE USR_USUARIO=? AND USR_PASSWORD=?
        AND USR_STATUS=1 AND r.ROL_ID=ur.ROL_ID AND ur.USR_ID=u.USR_ID
        AND r.ROL_NOMBRE<>'Cliente'", array($usuario, $password));
    }
    public static function getUserAcces($id_usuario)
    {
        return $data = Database::query("SELECT * FROM usuario WHERE USR_ID=? USR_STATUS=1", array($id_usuario));
    }
    public static function getClientbyUser($usuario)
    {
        return $data = Database::queryOne("SELECT p.*, c.*,u.USR_USUARIO from cliente c, usuario u, persona p 
        WHERE p.PER_ID=u.PER_ID AND c.USR_ID=u.USR_ID AND c.USR_ID = ?", array($usuario));
    }
    public static function getClientbyId($usuario)
    {
        return $data = Database::queryOne("SELECT p.*, c.*,u.USR_USUARIO from cliente c, usuario u, persona p 
        WHERE p.PER_ID=u.PER_ID AND c.USR_ID=u.USR_ID AND p.PER_ID = ?", array($usuario));
    }
}
