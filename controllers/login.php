<?php

function Auth(){
     if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['mail']) && !empty($_POST['pass'])) {
         $pass = $_POST['pass'];
         $mail = $_POST['mail'];
        $datas = array(
         'pass' => $pass,
         'mail' => $mail
        );
        if(login($datas)){
            header('Location: ?page=home');
            exit;
        }else{
            $error = "Email ou mot de passe incorrect.";
        }
    }
    require_once('template/Auth/login.php');
}