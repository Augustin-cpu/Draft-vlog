<?php
require_once('model/Database.php');
session_start();

class MyAutolod {

    public static function autoload($classe){
        if(file_exists('controllers/'.$classe.'.php')){
            include_once('controllers/'.$classe.'.php');
        }elseif(file_exists('model/'.$classe.'.php')){
            include_once('model/'.$classes.'.php');
        }elseif(file_exists('template/'.$classe.'.php')){
            include_once('template/'.$classe.'.php');
        }elseif(file_exists('lib/'.$classe.'.php')){
            include_once('lib/'.$classe.'.php');
        }elseif(file_exists('classes/'.$classe.'.php')){
            include_once('classes/'.$classe.'.php');
        }
    }
    public static function register(){
        spl_autoload_register([__CLASS__,'autoload']);
    }
}