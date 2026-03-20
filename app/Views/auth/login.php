<?php ob_start(); ?>
<h1>Login de Administrador</h1>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="username" placeholder="Usuario" required>  

    <input type="password" name="password" placeholder="Contraseña" required>  

    <button type="submit">Entrar</button>
</form>
<?php $content = ob_get_clean(); require '../app/Views/layout.php'; ?>
