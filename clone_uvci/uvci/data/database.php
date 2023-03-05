<?php

class DataBase {

  private static $hostName = "localhost";
  private static $dbName = "uvci";
  private static $username = "root";
  private static $password = "";
  
private static $connexion = null;

  public static function connect() {
    try {
      self::$connexion = new PDO("mysql:host=".self::$hostName.";dbname=".self::$dbName, self::$username, self::$password);
      self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $error) {
        echo "Echec de connexion : " . $error->getMessage();
    }
    return self::$connexion; 

}

  public static function disconnect() {
    self::$connexion = null;

  }
}
DataBase::connect();
