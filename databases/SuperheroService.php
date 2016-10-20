<?php

// register autoload with PHP.
function SuperheroServiceAutoload($class){
    require_once $class . '.php';
}
spl_autoload_register('SuperheroServiceAutoload');

class SuperheroService{
    
    private static $instance = null;
    
    private function __construct() {
        
        echo 'Creating '. __CLASS__ .' singleton instance';
    }
    
    public static function get_instance(){
        if(!self::$instance){
            $instance = new SuperheroService;
        }
        return $instance;
    }

    public function add_superhero($superhero){
        $connection = Connection::get_instance()->get_connection();
        $query = "insert into superhero ...";
        $connection->query($query);
        $connection->lastInsertId();
    }

    public function get_superheroes(){
        try{
            $connection = Connection::get_instance()->get_connection();

            $query = "select s.*, array_to_json(array_agg(suit)) as suits from superhero s inner join suit on s.superhero_id = suit.superhero_id group by s.superhero_id;";
            $result_obj = $connection->query($query);
            if($result_obj->rowCount() > 0){
                MapperSuperhero::get_instance()->map_superhero_suits($result_obj, $superheroes);
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
    
}