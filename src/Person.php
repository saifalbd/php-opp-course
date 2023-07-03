<?php
namespace App;

class  Person {

    CONST FATHER_NAME = "FATHER name here";

    public  static  $city;
    private string $personName;
    public int $personAge;
    public function __construct($name,$age)
    {
        $this->personName = $name;
        $this->personAge = $age;

    }


    public  static  function personAddress(){
        return [
            'village'=>'Athangiri',
            'union'=>'kagabola',
            'town'=>static::$city
        ];
}

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }


    public  function  cityName(){
     self::$city = '';

    }

    public  function  name(){

        return $this->personName;
    }

    public function  age(){
        return $this->personAge;
    }
}