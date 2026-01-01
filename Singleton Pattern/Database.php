<?php 

namespace SPattern;

use PDOException;

class Database {

    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $host = 'localhost';
        $db = 'learn_php';
        $user = 'root';
        $pass = 'Amz@mysql@2023';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


        try{
            $this->connection = new \PDO($dsn, $user, $pass);
            echo "Database Connected Safely<br>";
        }catch(\PDOException $e){
            echo "Connection Failed: " . $e->getMessage();
        }


    }

    public static function getInstance(){

        if(self::$instance == null){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function query($sql, $params = [])
    {
    // এখানে prepare-এর আগে $stmt = লিখতে হবে
    $stmt = $this->connection->prepare($sql); 
    
    $stmt->execute($params);
    echo "Executing Query: [$sql] <br>";
    return $stmt;
    }

}