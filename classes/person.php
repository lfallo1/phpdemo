<?php

class Person{
    
    const AVG_LIFE = 79;
    
    protected $firstname;
    protected $lastname;
    protected $age;
   
    public function __construct($firstname = '', $lastname = '', $age = 0) {
        echo 'Person constructor' .PHP_EOL;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }
    
    public function setFirstname($name){
        if(is_string($name)){
            $this->firstname = $name;
        }
    }
    public function setLastname($name){
        if(is_string($name)){
            $this->lastname = $name;
        }
    }
    public function setAge($age){
        if(is_int($age)){
            $this->age = $age;
        }
    }
    
    public function to_string(){
        return $this->firstname . ' ' . $this->lastname . ' ' . $this->age .PHP_EOL;
    }
}