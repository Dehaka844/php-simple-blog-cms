<?php
namespace App\Models;
use App\Config\Database;

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
