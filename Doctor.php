<?php 

class Doctor
{
    //Properties
    public $name;
    public $specializations;


    //Methods
    public function introduce(){
        return "Hello I am doctor ". $this->name . "I am a .". $this->specializations . " experts";
    }

}