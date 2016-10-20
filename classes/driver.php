<?php

//'require' terminates if file is not found
//'include' will throw a warning, but continue execution

include_once 'Superhero.php';
//require 'Superhero.php';

//$p1 = new Person('kara','smith',29);
$sp2 = new Superhero('bruce', 'wayne', '40', 'batman');
$sp3 = new Superhero('clark', 'kent', '34', 'superman');
$superheroes = array($sp2, $sp3);

//$sp1->setFirstname('lance');
//$sp1->setLastname('fallon');
//$sp1->setAge(30);

echo $sp2->to_string();
echo $sp3->to_string();

echo Person::AVG_LIFE . PHP_EOL;
echo 'Superhero count: ' . Superhero::getCount() . PHP_EOL;

for($i = 0; $i < count($superheroes); $i++):
    echo $superheroes[$i]->to_string();
endfor;