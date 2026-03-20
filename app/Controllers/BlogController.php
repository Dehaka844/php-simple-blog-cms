<?php
namespace App\Controllers;
use App\Models\Post;

class BlogController {
    public function index() {
        $postModel = new Post();
        $posts = $postModel->getAll();
        require_once '../app/Views/blog/index.php';
    }

    public function view($id) {
        $postModel = new Post();
        $post = $postModel->find($id);
        if (!$post) die("Post no encontrado");
        require_once '../app/Views/blog/view.php';
    }
}
