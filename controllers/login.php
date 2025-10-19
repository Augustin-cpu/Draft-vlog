<?php

function Auth(){
     if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['mail']) && !empty($_POST['pass'])) {
         $pass = $_POST['pass'];
         $mail = $_POST['mail'];
        $datas = array(
         'pass' => $pass,
         'mail' => $mail
        );
        login($datas);
    }
    require_once('template/Auth/login.php');
}