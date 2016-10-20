<?php

include_once 'Superhero.php';
require_once 'mapper_superhero.php';

function connect(){
    $host = 'localhost';
    $port = '5432';
    $db_name = 'superhero';
    $url = "pgsql:dbname=$db_name;host=$host";
    $username = 'postgres';
    $password = 'admin';
    return new PDO($url, $username, $password);
}

function add_superhero($superhero){
    $connection = connect();
    $query = "insert into superhero ...";
    $connection->query($query);
    $connection->lastInsertId();
}

function get_superheroes(){
    try{
        $connection = connect();

        $query = "select s.*, array_to_json(array_agg(suit)) as suits from superhero s inner join suit on s.superhero_id = suit.superhero_id group by s.superhero_id;";
        $result_obj = $connection->query($query);
        if($result_obj->rowCount() > 0){
            map_superhero_suits($result_obj, $superheroes);
            return $superheroes;
        }

        $result_obj = null;
        $connection = null;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}