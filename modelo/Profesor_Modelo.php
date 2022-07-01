<?php
class Profesor_Modelo
{
    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM profesor", array());
    }
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM profesor WHERE PROF_ID=?", array($id));
    }
    public static function insertProfesor($profesor)
    {
        Database::queryChange(
            "CALL AB_AGREGARPROFESOR(?, ?, ?, ?, ?, ?);",
            array($profesor["NOMBRE"], $profesor["APELLIDO"], $profesor["DIRECCION"],$profesor["CORREO"], $profesor["USUARIO"], $profesor["PASSWORD"])
        );
    }
    public static function updateProfesor($profesor, $id)
    {
        Database::queryChange("UPDATE profesor SET USR_ID=?, PROF_STATUS=? WHERE  PROF_ID=?;", array(array($profesor["USR_ID"], $profesor["PROF_STATUS"], $id)));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM persona WHERE  PER_ID=?;", array($id));
    }
    public static function getProfesorbyId($usuario)
    {
        return $data = Database::queryOne("SELECT p.*, pr.*,u.* from profesor pr, usuario u, persona p 
        WHERE p.PER_ID=u.PER_ID AND pr.USR_ID=u.USR_ID AND p.PER_ID = ?", array($usuario));
    }
    public static function getProfesorData()
    {
        return $data = Database::query("SELECT p.*, pro.PROF_ID FROM profesor pro,usuario u,persona p WHERE pro.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID;", array());
    }
    public static function getProfesorData2()
    {
        return $data = Database::query("SELECT pro.PROF_ID,  FROM profesor pro,usuario u,persona p WHERE pro.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID;", array());
    }
    public static function agregandoProfesor($profesor)
    {
        Database::queryChange("", array($profesor));
    }
}
