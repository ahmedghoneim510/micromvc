<?php

namespace MVC\core;
class app{

    private $controller = 'home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }


    public function url(){
        
        if (!empty($_SERVER['QUERY_STRING'])) {
            
            $url = explode('=', $_SERVER['QUERY_STRING']);
            $url = explode('/', $url[1]);
            $this->controller = isset($url[0]) ? $url[0] . 'controller' : 'homecontroller';
            $this->method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = array_values($url); 
        } else {
            $this->controller = 'homecontroller';
            $this->method = 'index';
            $this->params = array();
        }
    }

    public function render(){
        // echo $this->controller.' '.$this->method.'<br>';
        $controllerName = "MVC\controllers\\".$this->controller;
        //  $cnt = "MVC\controllers\homecontroller";
        // echo $controllerName.'<br>'.$cnt.'<br>';
        if (class_exists($controllerName)) {
            // echo "class exists";
            $controller = new $controllerName();
            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->params);
            } else {
                echo 'method not exist';
            }
        } else {
            echo "class not exist";
        }
    }


}