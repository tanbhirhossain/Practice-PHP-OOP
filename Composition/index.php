<?php

namespace Composition;

require_once('Person.php');
require_once('PayableInterface.php');
require_once('LoggerTrait.php');
require_once('Patient.php');
require_once('Doctor.php');
require_once('Hospital.php');

$hospital = new Hospital();

$doctor1 = new Doctor("DR MURAD HOSSAIN", "0154646405544", "Cardiologist");
$hospital->addDoctor($doctor1);

$doctor2 = new Doctor("DR MIHAD", "01554466664", "GYNEE AND OBS");
$hospital->addDoctor($doctor2);


$patient1 = new Patient("MR AMZAD HOSSAIN", "016664400", "ALLERGY");
$hospital->addPatient($patient1);

$patient2 = new Patient("MR VUL ", "016664400", "SCABIES");
$hospital->addPatient($patient2);

echo "<br> -------------- HOSPITAL RECORDS------------<BR>";
$hospital->listAll();