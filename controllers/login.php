<?php

function login(){
     if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
        extract($_POST);
        $pass = sha1($pass);
        $bdd = database();
        $req = $bdd->prepare('SELECT * FROM users WHERE pass = :pass AND login = :login');
        $req->execute(array(
            'pass' => $pass,
            'login' => $login
        ));
        if($req->rowCount() > 0){
            $_SESSION['Auth'] = $req->fetch();
            header('Location: index.php');
        }
    }
    require_once('template/login.php');
}