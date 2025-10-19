<?php

function Auth(){
     if (isset($_POST) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
        extract($_POST);
        $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);
       login($hashed_pass,$mail);
    }
    require_once('template/Auth/login.php');
}