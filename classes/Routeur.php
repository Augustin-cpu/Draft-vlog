<?php

class Routeur
{
    private $_mControllers = ['home','event','login','logout','register'];
    private $_mRouter;

    public function __construct($route)
    {
        $this->_mRouter = $route;
    }

    public function Render()
    {
        $controller = $this->_mRouter;
        if (is_file('controllers/'.$controller.'.php')) {
            include_once('controllers/'.$controller.'.php');
        }else{
            echo $this->_mRouter;
            die('Pas introuvable');
        }
    }
}
