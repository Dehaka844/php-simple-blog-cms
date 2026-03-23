<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog MVC</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/blog/index">Inicio</a>
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="/admin/index">Panel</a>
            <a href="/auth/logout">Salir</a>
        <?php else: ?>
            <a href="/auth/login">Login</a>
        <?php endif; ?>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
