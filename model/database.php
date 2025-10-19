<?php

function add($statement, $donnees){
    $bdd = database();
    $req = $bdd->prepare($statement);
    $req->execute([
        'fullname' => $donnees['fullname'],
        'mail' => $donnees['mail'],
        'pass' => $donnees['pass']
    ]);

}
function show($statement,$id){}
function getList($statement){}
function update($statement,array $donnees){}
function delete($id){}
function count_users($statement,$id){}

function login($pass,$mail){
     $bdd = database();
        $req = $bdd->prepare('SELECT * FROM users WHERE pass = :pass AND mail = :mail');
        $req->execute(array(
            'pass' => $pass,
            'mail' => $mail
        ));
        if($req->rowCount() > 0){
            $_SESSION['Auth'] = $req->fetch();
            header('Location: index.php');
        }
}
function addUser(array $data){
    $bdd = database();
    $req = $bdd->prepare('INSERT INTO users(fullname,mail,pass)VALUES(:fullname,:mail,:pass)');

    $req->execute([
        'fullname' => $data['fullname'],
        'mail' => $data['mail'],
        'pass' => $data['pass']
]);
}