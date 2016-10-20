<?php

include 'Person.php';

class Superhero extends Person {
    private static $count = 0;
    protected $alias;
    public function __construct($firstname = '', $lastname = '', $age = 0, $alias='') {
        Superhero::$count++;
        echo 'Superhero constructor' .PHP_EOL;
        parent::__construct($firstname, $lastname, $age);
        $this->alias = $alias;
    }
    
    public function to_string() {
        return '(Superhero) ' . $this->alias . ': ' . parent::to_string();
    }
    
    public static function getCount(){
        return self::$count;
    }
}
