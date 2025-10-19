<?php



if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    require_once('controllers/homepage.php');
}elseif($page == 'about'){
    require_once('controllers/about.php');
}elseif($page == 'service'){
    require_once('controllers/service.php');
}
