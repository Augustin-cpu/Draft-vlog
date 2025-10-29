<?php

class Routeur
{

    private $request;
    private $routes = [
        'login' => ['controller' => 'Auth', 'method' => 'AuthUsers'],
        'register' => ['controller' => 'Auth', 'method' => 'RegisterUsers'],
        'logout' => ['controller' => 'Auth', 'method' => 'LogoutUsers'],
        'home' => ['controller' => 'HomePage', 'method' => 'showHome'],
        'event' => ['controller' => 'HomePage', 'method' => 'showEvent'],
        'about' => ['controller' => 'HomePage', 'method' => 'showAbout']
    ];

    public function __construct($request){
        $this->request = $request;
    }

    public function renderController(){
        $request = $this->request;
        if(key_exists($request, $this->routes)){
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];

            $currentController = new $controller();
            $currentController->$method();
        }else{
            die('Page introuvable');
        }
    }
}
