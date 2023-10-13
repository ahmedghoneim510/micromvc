<?php 
namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;


class model{
    static  function dp(){
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => '127.0.0.1',
            'port' => '3306'
        ];
        return $dp = new Database($options);
    }
}

?>