<?php ob_start(); ?>
<h1>Últimos Artículos</h1>
<?php foreach ($posts as $post): ?>
    <article>
        <h2><?php echo $post['title']; ?></h2>
        <p><?php echo substr($post['content'], 0, 100); ?>...</p>
        <a href="/blog/view/<?php echo $post['id']; ?>">Leer más</a>
    </article>
<?php endforeach; ?>
<?php $content = ob_get_clean(); require '../app/Views/layout.php'; ?>
