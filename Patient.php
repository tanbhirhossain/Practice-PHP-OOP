<?php 

namespace HMS; 
require_once('Person.php');
class Patient extends Person {
    
    public $disease;
    
    public function __construct($n, $p, $d)
    {
        Parent::__construct($n, $p);
        $this->disease = $d;
    }

    public function getPatientInfo(){
        return $this->getDetails(). " Diseases: ". $this->disease;
    }
    
}

$patient = new Patient("Murad Hossain", "10699", "Lomba");
echo $patient->getPatientInfo();