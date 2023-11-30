<?php

namespace Framework\Database;

use PDO;

class Connection
{

    //private static $config;

//    public function __construct($config)
//    {
//        $this->config = $config;
//    }

    public static function make($config)
    {
        //static::$config = $config;
        try {
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']);
        } catch (\Exception $e) {
            echo 'Error de connexió a la base de dades';
        }
    }


//    function connectDB(){
//        try {
//            return new PDO(
//                $this->config['databasetype'] . ':host=' . $this->config['host'] . ';dbname=' . $this->config['name'],
//                $this->config['user'],
//                $this->config['password']);
//        } catch (\Exception $e) {
//            echo 'Error de connexió a la base de dades';
//        }
//    }
}