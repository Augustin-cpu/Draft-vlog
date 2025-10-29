<?php
class Auth
{
    public function AuthUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['login']) && !empty($_POST['pass'])) {
            $pass = $_POST['pass'];
            $mail = $_POST['mail'];
            $datas = array(
                'pass' => $pass,
                'mail' => $mail
            );
            if (Database::login($datas)) {
                header('Location: ?page=home');
                exit;
            } else {
                $_SESSION['Auth']['error'] = "Email ou mot de passe incorrect.";
            }
        }
        $myView = new View('login');
        $myView->render();
        // Le reste de login.php affiche le formulaire et l'éventuel $error_message
        // require_once('template/Auth/login.php');
    }
    public function LogoutUsers()
    {
        if (isset($_SESSION)) {

            $_SESSION['Auth']['id'] = null;
            header('Location : ?page=login');
            exit;
        } else {
            header('Location : ?page=login');
            exit;
        }
    }
    public function RegisterUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['pass']) && !empty($_POST['fullname']) && !empty($_POST['mail']) && !empty($_POST['confirmPass'])) {
            $pass = $_POST['pass'];
            $mail = $_POST['mail'];
            $fullname = $_POST['fullname'];
            $confirmPass = $_POST['confirmPass'];
            if ($pass !== $confirmPass && $pass < 8) {
                $_SESSION['Auth']['message'] = "Votre mot de pass doit correspondre";
            } else {
                $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);
                $datas = array(
                    'fullname'    =>    $fullname,
                    'mail'        =>    $mail,
                    'pass'        =>    $hashed_pass
                );
                Database::addUser($datas);
                header('Location: ?page=login');
                exit;
            }
        }
        $myView = new View('register');
        $myView->render();
    }
}
