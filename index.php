<?php

require_once('classes/Routeur.php');
require_once('lib/Autoloader.php');
require_once('lib/config.php');

MyAutolod::register();

$request = isset($_GET['page']) ? $_GET['page'] : 'null';
$router = new Routeur($request);
$router->renderController();

