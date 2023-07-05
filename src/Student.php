<?php
namespace App;

 class Student extends School {
    

    use Parents;

    public array $parents;
    public $studentName;
    public $className;
    public $rollNo;
    protected $regNo;
    public $sectionName;



    function __construct($schoolName,$regNo){
        parent::__construct($schoolName);
        $this->regNo = $regNo;
    }


    public function name($name){
        $this->studentName = $name;

        return $this;
    }

    public function setClass($cls){
        $this->className = $cls;
        return $this;
    }

    public function section($section){
        $this->sectionName = $section;
        return $this;
    }


    public function detail(): array
    {
        $name = $this->studentName;
        $className = $this->className;
        $section = $this->sectionName;
        $father = $this->fatherName;
        $school = parent::detail();
        return compact('name','className','section','father','school');
    }

  




    
    
}