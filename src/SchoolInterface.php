<?php
namespace App;


interface SchoolInterface {

public function setSchoolAddress(array $address):SchoolInterface;
public function setPrincipleName(string $name):SchoolInterface;


}