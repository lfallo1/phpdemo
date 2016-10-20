<?php

class Connection{
    
    private static $instance = null;
    
    private function __construct() {
        echo 'Creating '. __CLASS__ .' singleton instance';
    }
    
    public static function get_instance(){
        if(!self::$instance){
            $instance = new Connection;
        }
        return $instance;
    }
    
    function get_connection(){
        $host = 'localhost';
        $port = '5432';
        $db_name = 'superhero';
        $url = "pgsql:dbname=$db_name;host=$host";
        $username = 'postgres';
        $password = 'admin';
        return new PDO($url, $username, $password);
    }   
}

