<?php
function database()
{
    try {
        $pdo_option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=draft', 'root', 'root', $pdo_option);
    } catch (Exception $e) {
        die('Message :' . $e->getMessage());
    }
    return $bdd;
}
