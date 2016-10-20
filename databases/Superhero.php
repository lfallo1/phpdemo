<?php

class Superhero {

    protected $superhero_id;
    protected $first_name;
    protected $last_name;
    protected $alias;
    protected $suits;

    public function __construct($first_name = '', $last_name = '', $alias = '', $superhero_id = 0) {
        $this->superhero_id = $superhero_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->alias = $alias;
    }

    public function get_superhero_id() {
        return $this->superhero_id;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

    public function get_alias() {
        return $this->alias;
    }

    public function getSuits() {
        return $this->suits;
    }

    public function setSuits($suits) {
        $this->suits = $suits;
    }
    
    public function __toString() {
        $suit_str = '';
        foreach($this->suits as $s){
            $suit_str .= $s->__toString() . ' | ';
        }
        return '(Superhero) ' . $this->alias . ': ' . $this->first_name . ' ' . $this->last_name .  ', Suit: ' . $suit_str .PHP_EOL;
    }
}
