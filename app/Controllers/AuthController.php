<?php
namespace App\Controllers;
use App\Models\User;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: /admin/index');
            } else {
                $error = "Credenciales inválidas";
                require_once '../app/Views/auth/login.php';
            }
        } else {
            require_once '../app/Views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /blog/index');
    }
}
