<?php

//'require' terminates if file is not found
//'include' will throw a warning, but continue execution

include_once 'Superhero.php';
//require 'Superhero.php';

//$p1 = new Person('kara','smith',29);
$p2 = new Superhero('bruce', 'wayne', '40', 'batman');
$p3 = new Superhero('clark', 'kent', '34', 'superman');

//$p1->setFirstname('lance');
//$p1->setLastname('fallon');
//$p1->setAge(30);

echo $p2->to_string();
echo $p3->to_string();

echo Person::AVG_LIFE . PHP_EOL;
echo 'Superhero count: ' . Superhero::getCount();