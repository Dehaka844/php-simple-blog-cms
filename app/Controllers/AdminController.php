<?php
namespace App\Controllers;
use App\Models\Post;

class AdminController {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /auth/login');
            exit;
        }
    }

    public function index() {
        $postModel = new Post();
        $posts = $postModel->getAll();
        require_once '../app/Views/admin/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postModel = new Post();
            $postModel->create($_POST['title'], $_POST['content']);
            header('Location: /admin/index');
        } else {
            require_once '../app/Views/admin/create.php';
        }
    }

    public function delete($id) {
        $postModel = new Post();
        $postModel->delete($id);
        header('Location: /admin/index');
    }
}
