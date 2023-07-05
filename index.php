<?php

use App\Person;
use App\School;
use App\Student;

require_once __DIR__.'/vendor/autoload.php';



//  $school = new School('Moulvibazar Govt high School');
// $schoolDetail =  $school->setPrincipleName('Denesh Lal')->setSchoolAddress([
//     'location'=>'Ali Amjad Road',
//     'union'=>'Khasinat',
//     'thana'=>'M Bzar Sadar'
//  ])->detail();

$student = new Student('Moulvibazar Govt high School',43939393);


$detail =  $student->setPrincipleName('Denesh Lal')->setSchoolAddress([
        'location'=>'Ali Amjad Road',
        'union'=>'Khasinat',
        'thana'=>'M Bzar Sadar'
     ])->name('amjad Ali')->setClass('TEN')->section('B');


     $detail->setFatherName('Maruf');
    
    
  $d =    $detail->detail();

echo json_encode($d);



