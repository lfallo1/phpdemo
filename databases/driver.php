<?php

require_once 'SuperheroService.php';

$superheroes = SuperheroService::getInstance()->get_superheroes();

foreach($superheroes as $s){
    echo $s->__toString();
}

