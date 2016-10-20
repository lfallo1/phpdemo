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

class Superhero extends Person {
    protected $alias;
    public function __construct($firstname = '', $lastname = '', $age = 0, $alias='') {
        echo 'Superhero constructor' .PHP_EOL;
        parent::__construct($firstname, $lastname, $age);
        $this->alias = $alias;
    }
    
    public function to_string() {
        return '(Superhero) ' . $this->alias . ': ' . parent::to_string();
    }
}

//$p1 = new Person('kara','smith',29);
$p2 = new Superhero('bruce', 'wayne', '40', 'batman');

//$p1->setFirstname('lance');
//$p1->setLastname('fallon');
//$p1->setAge(30);

echo $p2->to_string();

echo Person::AVG_LIFE;
