<?php

class Database
{
    private static  $bdd;
    private function __construct(){}
    public static function database()
    {
        try {
            $pdo_option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$bdd = new PDO('mysql:host=localhost;dbname=draft', 'root', 'root', $pdo_option);
        } catch (Exception $e) {
            die('Message :' . $e->getMessage());
        }
        return self::$bdd;
    }
    public static function add($statement, $donnees)
    {
        $bdd = self::database();
        $req = $bdd->prepare($statement);
        $req->execute([
            'fullname' => $donnees['fullname'],
            'mail' => $donnees['mail'],
            'pass' => $donnees['pass']
        ]);
    }
    public static function show($statement, $id) {}
    public static function getList($statement) {}
    public static function update($statement, array $donnees) {}
    public static function delete($id) {}
    public static function count_users($statement, $id) {}

    public static function login(array $data)
    {
        // 1. Définition des variables et connexion
        $bdd = self::database();

        // 2. Récupérer l'utilisateur par l'e-mail SEULEMENT.
        // On doit récupérer le HASH du mot de passe pour la vérification.
        $req = $bdd->prepare('SELECT id_users, mail, pass FROM users WHERE mail = :mail');

        $req->execute(array(
            'mail' => $data['mail']
        ));

        // 3. Vérifier si l'utilisateur existe
        if ($req->rowCount() > 0) {
            $user = $req->fetch(PDO::FETCH_ASSOC);

            // 4. Vérifier le mot de passe fourni avec le HASH stocké
            // La fonction password_verify() gère la comparaison sécurisée.
            if (password_verify($data['pass'], $user['pass']) && $data['mail'] === $user['mail']) {

                // Connexion réussie : Nettoyage avant de stocker en session
                unset($user['pass']); // Très important : ne pas stocker le hash en session

                $_SESSION['Auth']['id'] = $user['id_users'];
                return true;
                exit;
            }
        }

        // Si l'utilisateur n'existe pas OU si le mot de passe est incorrect
        // Pour des raisons de sécurité, ne pas indiquer lequel des deux est faux.
        return false; // Indiquer que la connexion a échoué
    }
    public static function addUser(array $data)
    {
        $bdd = self::database();
        $req = $bdd->prepare('INSERT INTO users(fullname,mail,pass)VALUES(:fullname,:mail,:pass)');

        $req->execute([
            'fullname' => $data['fullname'],
            'mail' => $data['mail'],
            'pass' => $data['pass']
        ]);
    }
}
