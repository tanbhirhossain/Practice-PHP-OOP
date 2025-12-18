<?php 

namespace Interface_;
require_once('Person.php');
require_once('PayableInterface.php');
class Patient extends Person implements Payable {
    
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

    public function processPayment($amount){
        return "Processing payment of ".$amount." for ".$this->name;
    }

    
}

echo Patient::getTotalCount();

