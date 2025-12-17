<?php 

class Patient
{
    //Properties
    public $name;
    public $disease;

    //Constructor
    public function __construct($n, $d)
    {
        $this->name = $n;
        $this->disease = $d;
    }

    //Methods
    public function introduce() {
        return "Patient  ".$this->name." is suffering from ".$this->disease;
    }
}

$patient1 = new Patient("Rahim", "Fever");
// $patient1->name = "Rahim";
// $patient1->disease = "Fever";

echo $patient1->introduce();
