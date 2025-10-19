<?php
function homepage(){
    if(!isset($_SESSION['Auth']['id'])){
        header('Location: ?page=login');
        exit;
    }
    require_once('template/homepage.php');
}