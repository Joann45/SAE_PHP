<?php
namespace BD;

use PDO;
use PDOException;

class SupabaseLoader {
    private static $connection = null;

    public static function getConnection() {
        $password = 'nOIWUSLNVFS5i9BX'; 
        $host = 'aws-0-eu-west-3.pooler.supabase.com';
        $port = '6543';
        $dbname = 'postgres';
        $user = 'postgres.uqphmrdxocqjbcbucdju';

        if (self::$connection === null) {
            try {
                $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
                self::$connection = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function query($connection, $sql, $params = []) {
        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute($params);
            echo "La requête a bien été prise en compte !";
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
        }
    }
}


?>
