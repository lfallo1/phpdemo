<?php

require_once 'db_connection.php';

$superheroes = get_superheroes();

foreach($superheroes as $s){
    echo $s->__toString();
}

