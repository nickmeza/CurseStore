<?php
class Database
{

  private static $dbName = 'heroku_123b31a503faa8c' ;
  private static $dbHost = 'us-cdbr-east-03.cleardb.com' ;
  private static $port = "3306";
  private static $dbUsername = 'b9a9a9abb0ae74';
  private static $dbUserPassword = 'adf6ff84';

    // private static $dbName = 'bd_pwabpromed' ;
    // private static $dbHost = 'localhost' ;
    // private static $port = "3306";
    // private static $dbUsername = 'root';
    // private static $dbUserPassword = '';

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
          self::$cont->query("SET NAMES 'utf8';");
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
    }
    public static function query($query, $params = array()) {
      $stmt = self::connect()->prepare($query);
      $stmt->execute($params);
      $data = $stmt->fetchAll();
      return $data;
    }
    public static function queryOne($query, $params = array()) {
      $stmt = self::connect()->prepare($query);
      $stmt->execute($params);
      $data = $stmt->fetch();
      return $data;
    }

    public static function queryChange($query, $params = array()) {
      $stmt = self::connect()->prepare($query);
      $stmt->execute($params);
      self::disconnect();
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>