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
            "CALL AB_AGREGARPROFESOR(?, ?, ?, ?, ?);",
            array($profesor["NOMBRE"], $profesor["APELLIDO"], $profesor["DIRECCION"], $profesor["USUARIO"],$profesor["CONTRASENA"])
        );
    }
    public static function updateProfesor($profesor, $id)
    {
        Database::queryChange("UPDATE profesor SET USR_ID=?, PROF_STATUS=? WHERE  PROF_ID=?;", array(array($profesor["USR_ID"], $profesor["PROF_STATUS"], $id)));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM profesor WHERE  PROF_ID=?;", array($id));
    }
    public static function getProfesorData()
    {
        return $data = Database::query("SELECT p.* FROM profesor pro,usuario u,persona p WHERE pro.USR_ID=u.USR_ID AND u.PER_ID=p.PER_ID;", array());
    }
    public static function agregandoProfesor($profesor)
    {
        Database::queryChange("", array($profesor));
    }
}
