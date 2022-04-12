<?php
class Persona_Modelo
{
    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM persona", array());
    }
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM persona WHERE  PER_ID=?;", array($id));
    }
    public static function insertModulo($persona)
    {
        Database::queryChange("INSERT INTO persona (PER_NOMBRE, PER_APELLIDO, PER_DIRECCION,PER_ESTADO) VALUES (?, ?, ?, ?);", array($persona['PER_NOMBRE'], $persona['PER_APELLIDO'], $persona['PER_DIRECCION'], 1));
    }
    public static function updateModulo($persona, $id)
    {
        Database::queryChange("UPDATE persona SET PER_NOMBRE=?, PER_APELLIDO=?, PER_DIRECCION=?, PER_ESTADO=? WHERE PER_ID=?;", array($persona['PER_NOMBRE'], $persona['PER_APELLIDO'], $persona['PER_DIRECCION'], $persona['PER_ESTADO'], $id));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM persona WHERE  PER_ID=?;", array($id));
    }
}
