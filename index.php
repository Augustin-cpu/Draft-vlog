<?php
// require_once('lib/include.php');
require_once('classes/Routeur.php');


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}
$router = new Routeur($page);
$router->Render();

