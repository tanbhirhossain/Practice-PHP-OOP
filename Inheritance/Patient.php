<?php 

namespace HMS; 
require_once('Person.php');
class Patient extends Person {
    
    private $disease;

    public function __construct($n, $p, $d)
    {
        Parent::__construct($n, $p);
        $this->disease = $d;
    }
    
    public function setDisease($d){
        if(strlen($d) > 2){
            $this->disease = $d;
        }
    }

    public function getDisease(){
        return $this->disease;
    }
    
}

