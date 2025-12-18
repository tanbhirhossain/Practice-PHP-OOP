<?php 

namespace Static;
require_once('Person.php');
class Patient extends Person {
    
    private $disease;
    public static $totalPatients = 0;

    public function __construct($n, $p, $d){
        Parent::__construct($n, $p);
        $this->disease = $d;
        self::$totalPatients++;
    }

    
    public function setDisease($d){
        if(strlen($d) > 2){
            $this->disease = $d;
        }
    }

    public function getDisease(){
        return $this->disease;
    }


    public function getRole(){
        return "I am a Patient";
    }

    public function calculateBill($days){
        return $days * 2000;
    }

    public static function getTotalCount(){
        return self::$totalPatients;
    }

    
}

echo Patient::getTotalCount();

