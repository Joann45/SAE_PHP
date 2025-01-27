<?php
namespace BD;

class SupabaseLoader {
    private static $connection = null;

    public static function getConnection(){
        $password = 'nOIWUSLNVFS5i9BX'; 
        $host = 'aws-0-eu-west-3.pooler.supabase.com';
        $port = '6543';
        $dbname = 'postgres';
        $user = 'postgres.uqphmrdxocqjbcbucdju ';

        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        
        try {
            self::$connection = new \PDO($dsn, $user, $password);
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo "Connexion à la base de données réussie !";
        } catch (\PDOException $e) {
            die("La connexion à la base de données a échoué: " . $e->getMessage());
        }
        
        return self::$connection;
    }

    public static function query($connection, $request){
        try {
            $result = $connection->query($request);
            echo "La requête a bien été prise en compte !";
        } catch (\PDOException $e) {
            die("Erreur de requête: " . $e->getMessage());
        }
    }
}

?>
