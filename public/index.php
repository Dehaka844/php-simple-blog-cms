<?php
session_start();

// Autoload simple para cargar clases automáticamente
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class);
    $file = __DIR__ . '/../' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Enrutador básico
$url = $_GET['url'] ?? '';
$url = rtrim($url, '/');
$parts = explode('/', $url);

$controllerName = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'BlogController';
$methodName = $parts[1] ?? 'index';
$param = $parts[2] ?? null;

$fullControllerName = "App\\Controllers\\" . $controllerName;

if (class_exists($fullControllerName)) {
    $controller = new $fullControllerName();
    if (method_exists($controller, $methodName)) {
        $controller->$methodName($param);
    } else {
        die("404 - Método no encontrado");
    }
} else {
    die("404 - Controlador no encontrado");
}
