<?php

require_once 'Suit.php';

function map_superhero_suits($rs, &$ret = null){
    $ret = array();
    foreach($rs as $row){
        echo 'Alias: ' . $row['alias'] . PHP_EOL;
        
        $superhero = new Superhero($row['first_name'], $row['last_name'], $row['alias'], $row['superhero_id']);

        $suits_results = json_decode($row['suits']);
        
        $suits = array();
        foreach($suits_results as $s){
            array_push($suits, new Suit($s->{'suit_id'}, $s->{'material'}, $s->{'color'}, $s->{'superhero_id'}));
        }
        $superhero->setSuits($suits);
        array_push($ret, $superhero);
    }
}

