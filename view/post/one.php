<figure class="mb-3 mt-5">
    <blockquote class="blockquote">
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p class="mb-0"><?= nl2br(htmlspecialchars($post['content'])).' ...' ?></p>

    </blockquote>
    <figcaption class="blockquote-footer">
        <?= htmlspecialchars($post['user']) ?> <cite title="Source Title"> <?= ', le '. $post['date'] ?></cite>
    </figcaption>
</figure>
<h2>Les Commentaires</h2>
<?php 
    require dirname(__DIR__,2) . '/controller/commentController.php';
    renderComment(); 
?>