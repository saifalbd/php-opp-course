<?php
namespace App;


class School implements SchoolInterface{



public $schoolName;
public $principleName;

public array $addressDetail;


function __construct(string $name)
{
    $this->schoolName = $name;
}
    
 public function setSchoolAddress(array $address):School{
    $this->addressDetail = $address;

    return $this;
 }

 public function setPrincipleName(string $name):School{
    $this->principleName = $name;
    return $this;

 }

  public function detail():array{

    $name = $this->schoolName;
    $principleName = $this->principleName;
    $address = $this->addressDetail;

    return compact('name','principleName','address');

   
 }


}