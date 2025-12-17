<?php 

namespace HMS;

class Person
{
    protected $name;
    public $phone;

    public function __construct($n, $p)
    {
        $this->name = $n;
        $this->phone = $p;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(strlen($name) > 2){
            $this->name = $name;
        }
    }
}