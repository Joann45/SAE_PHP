<?php
namespace BD;

class SupabaseLoader {
    private static $connection = null;

    public static function getConnection(){
        $password = 'nOIWUSLNVFS5i9BX'; 

        $host = 'db.uqphmrdxocqjbcbucdju.supabase.co';
        $port = '5432';
        $dbname = 'postgres';
        $user = 'postgres';

        $connectionString = "host=$host port=$port dbname=$dbname user=$user password=$password";
        $connection = pg_connect($connectionString);
        if (!$connection) {
            die("La connexion à la base de données a échoué");
        }
        return $connection;
    }

    public static function query($connection, $request){
        $result = pg_query($connection, $request);
        
        if (!$result) {
            die("Erreur de requête");
        }
        
        pg_close($connection);
    }
}

?>
