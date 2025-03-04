<?php
namespace BD;

use PDO;
use PDOException;

class DBLoader {
    private static $connection = null;

    public static function getConnection() {
        if (self::$connection === null) {
            try {
                $dsn = 'mysql:host=servinfo-maria;dbname=DByfournier;charset=utf8';
                $username = 'yfournier';
                $password = 'yfournier';
                self::$connection = new PDO($dsn, $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return self::$connection;
    }
}


?>
