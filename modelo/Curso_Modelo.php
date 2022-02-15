<?php
class Curso_Modelo
{
    public static function getAll()
    {
        return $data = Database::query("SELECT * FROM curso ", array());
    } //
    public static function getByName($buscador)
    {
        $ggetname = str_replace("%20", " ", $buscador);
        return $data = Database::query("SELECT * FROM curso where CURS_NOMBRE LIKE '%$ggetname%' ", array());
    }
    public static function getByIds($ids)
    {

        return $data = Database::query('SELECT * FROM curso where CURS_ID IN (' . $ids . ')', array());
    }
    public static function getCursosByOrder($ids)
    {

        return $data = Database::query('SELECT od.ORD_ID,c.CURS_NOMBRE,od.ODT_SUBTOTAL, c.CURS_DESCRIPCION,c.CURS_IMAGEN FROM orden_detalle  od, curso c WHERE c.CURS_ID = od.CURS_ID AND od.ORD_ID = ? ;', array($ids));
    }

    public static function getOneIdByName($name)
    {
        $data = Database::queryOne("SELECT CURS_ID FROM curso where CURS_NOMBRE like '%$name%';", array());
        return $data['CURS_ID'];
    }

    public static function getCursosDescuento()
    {
        return $data = Database::query("SELECT c.*, c.CURS_PRECIO - (c.CURS_PRECIO * (d.DESC_PORCENT/100)) as CURS_DISCOUNT FROM detalle_descuento dd, descuento d,curso c WHERE dd.DESC_ID=d.DESC_ID AND dd.CURS_ID=c.CURS_ID AND d.DESC_STATUS=1 AND c.CURS_ESTADO=1;", array());
    }
    public static function updateAprovalOrder($orderupdate)
    {
        return $data = Database::queryChange("CALL AB_CHAGEAPROBALORDER(?, ?);", array($orderupdate['ORD_APROVAL'], $orderupdate['ORD_ID']));
    }
    //
    public static function getOne($id)
    {
        return $data = Database::queryOne("SELECT * FROM curso where CURS_ID=?", array($id));
    }
    public static function getCursoIsComprado($curso, $usuario)
    {
        return $data = Database::queryOne("SELECT * FROM usuario u, cliente c,orden o, orden_detalle od, curso cu WHERE u.USR_ID=c.USR_ID 
        AND c.CLI_ID=o.CLI_ID AND o.ORD_ID=od.ORD_ID AND o.ORD_APPROVAL=1 AND od.CURS_ID=cu.CURS_ID AND cu.CURS_ID=? AND u.USR_ID=?", array($curso, $usuario));
    }

    public static function insertCurso($curso)
    {
        Database::queryChange("INSERT INTO curso (CAT_ID,PROF_ID,CURS_NOMBRE,CURS_DESCRIPCION,CURS_IMAGEN,CURS_URL_VIDEO,CURS_ESTADO) VALUES (?,?,?,?,?,?,?);", array($curso["CAT_ID"], $curso["PROF_ID"], $curso["CURS_NOMBRE"], $curso["CURS_DESCRIPCION"], $curso["CURS_IMAGEN"], $curso["CURS_URL_VIDEO"], 1));
    }
    public static function updateCurso($curso, $id)
    {
        Database::queryChange("UPDATE curso set CAT_ID=?,PROF_ID=?,CURS_NOMBRE=?,CURS_DESCRIPCION=?,CURS_IMAGEN=?,CURS_URL_VIDEO=? where CURS_ID=?", array(array($curso["CAT_ID"], $curso["PROF_ID"], $curso["CURS_NOMBRE"], $curso["CURS_DESCRIPCION"], $curso["CURS_IMAGEN"], $curso["CURS_URL_VIDEO"], $curso["CURS_ESTADO"], $id)));
    }
    public static function delete($id)
    {
        Database::queryChange("DELETE FROM curso  where CURS_ID=?", array($id));
    }
    public static function getCursosByidUser( $usuario)
    {
        return $data = Database::query("SELECT * FROM usuario u, cliente c,orden o, orden_detalle od, curso cu WHERE u.USR_ID=c.USR_ID 
        AND c.CLI_ID=o.CLI_ID AND o.ORD_ID=od.ORD_ID AND o.ORD_APPROVAL=1 AND od.CURS_ID=cu.CURS_ID AND u.USR_ID=?", array( $usuario));
    }
}
