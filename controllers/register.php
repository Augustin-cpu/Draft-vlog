<?php
function register()
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
            addUser($datas);
            header('Location: ?page=login');
            exit;
        }
    }
    require_once('template/Auth/register.php');
}
