<?php
function homepage(){
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION['Auth']['id'])){
        header('Location: ?page=login');
        exit;
    }else{
        require_once('template/homepage.php');
    }
}