<?php 
namespace SPattern;

require_once 'Person.php'; // Add this line

class Doctor extends Person {

    public $specialization;

    public function __construct($n, $p, $s){
        parent::__construct($n, $p);
        $this->specialization = $s;
    }

    public function getRole()
    {
        return "I am a Doctor";
    }

    public function getDoctorInfo(){
        return $this->getDetails() . " Specialist:" .$this->specialization;
    }

    public function calculateBill($days)
    {
        return $days * 5000;
    }

}

