<?php 

namespace SPattern;
abstract class Person {
    protected $name;
    protected $phone;

    public function __construct($n, $p)
    {
        $this->name = $n;
        $this->phone = $p;
    }

    abstract public function getRole();
    abstract public function calculateBill($days);

    public function getName(){
        return $this->name;
    }

    public function getDetails(){
        return "Name: ". $this->name.", Phone: ".$this->phone;
    }
}