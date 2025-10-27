<?php

    if(isset($_SESSION)){

        $_SESSION['Auth']['id'] = null;
        header('Location : ?page=login');
        exit;
    }else{
        header('Location : ?page=login');
        exit;
    }