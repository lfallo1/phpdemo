<?php

require_once 'Superhero.php';

/**
 * Description of Suit
 *
 * @author lancefallon
 */
class Suit {

    protected $suit_id;
    protected $material;
    protected $color;
    protected $superhero_id;

    public function __construct($suit_id = 0, $material = '', $color = '', $superhero_id = 0) {
        $this->suit_id = $suit_id;
        $this->material = $material;
        $this->color = $color;
        $this->superhero_id = $superhero_id;
    }

    public function getSuit_id() {
        return $this->suit_id;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSuperhero_id() {
        return $this->superhero_id;
    }
    
    public function __toString() {
        return $this->material . ' ' . $this->color;
    }


}
