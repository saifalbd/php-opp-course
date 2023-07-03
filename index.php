<?php

use App\Person;

require_once __DIR__.'/vendor/autoload.php';



 $person =  new Person('Rubel Ahmed',34);

 Person::$city = 'MoulviBazar';

// echo Person::FATHER_NAME;


echo json_encode(Person::personAddress());

 echo $person->cityName();
 echo  '</br>';
echo $person->age();

