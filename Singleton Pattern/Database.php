<?php 

namespace SPattern;

class Database {

    private static $instance = null;

    private function __construct()
    {
        echo "Database Connected Successfully<br>";
    }

    public static function getInstance(){

        if(self::$instance == null){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function query($sql)
    {
        echo "Executing Query: [$sql] <br>";
    }

}