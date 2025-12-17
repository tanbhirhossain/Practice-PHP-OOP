<?php 

namespace HMS;

class Person
{
    public $name;
    public $phone;

    public function __construct($n, $p){
        $this->name = $n;
        $this->phone = $p;
    }

    public function getDetails(){
        return "Name: ".$this->name.", Phone: ".$this->phone;
    }
}