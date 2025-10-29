<?php

class HomePage
{

    public function showHome()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['Auth']['id'])) {
            header('Location: ?page=login');
            exit;
        }
        $myView = new View('home');
        $myView->render();
    }

    public function showEvent()
    {
        $myView = new View('event');
        $myView->render();
    }

    public function showAbout()
    {
        $myView = new View('about');
        $myView->render();
    }
    public function showService()
    {
        $myView = new View('service');
        $myView->render();
    }
}
