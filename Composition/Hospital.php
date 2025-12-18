<?php 

namespace Composition;

class Hospital {
    private $doctors = [];
    private $patients = [];

    public function addDoctor(Doctor $d){
        $this->doctors[] = $d;

        echo "Doctor {$d->getName()} has been added to hospital system<br>";
    }

    public function addPatient(Patient $p){
        $this->patients[] = $p;
        echo "Patient {$p->getName()} has been added to hospital system<br>";
    }

    public function listAll(){
        
        foreach($this->doctors as $doctor){
            echo $doctor->getName();
            echo "<br>";
        }

        foreach($this->patients as $patient){
            echo $patient->getName();
            echo "<br>";

        }

    }
}