<?php
require_once('lib/include.php');


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    homepage();
}elseif($page === 'login'){
    login();
}elseif($page === 'register'){
    register();
}
