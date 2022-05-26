<?php 

class Router{
    protected $routes=[
        "GET"=>[],
        "POST"=>[],
        "PUT"=>[]
    ];
    public static function load(){
        $route=new Router;
        require "route.php";
        return $route;
    }
    public function register($routes){
        $this->routes=$routes;
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$controller;
    }

    public function put($uri,$controller){
        $this->routes['PUT'][$uri]=$controller;
    }

    public function direct($uri,$method){
        if(array_key_exists($uri,$this->routes[$method])){
            return $this->routes[$method][$uri];
        }
        die('404 Page');
    }
}