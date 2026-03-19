<?php
namespace App\Models;
use App\Config\Database;

class Post {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll();
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($title, $content) {
        $stmt = $this->db->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        return $stmt->execute([$title, $content]);
    }

    public function update($id, $title, $content) {
        $stmt = $this->db->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
        return $stmt->execute([$title, $content, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM posts WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
