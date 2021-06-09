<div class="row">
    <?php foreach($posts as $num => $post) : ?>
    <div class="col-3">
        <div class="card border-success mb-5 mt-5" style="max-width: 20rem;">
            <a href="?page=post.one&id=<?= $post['id'] ?>" style="text-decoration: none">
                <h3 class="card-header" style="color:#99ffbb"><?= htmlspecialchars($post['title']) ?></h3>
                <img width="100%" height="100%" src="https://picsum.photos/300/300?random=<?= $num ?>">
                <div class="card-body">
                    <p class="card-text" style="color:#ffffff"><?= nl2br(htmlspecialchars($post['content'])).' ...' ?>
                    </p>
                </div>


                <div class="card-footer text-muted">
                    <?= htmlspecialchars($post['user']).', le '. $post['date'] ?>
                </div>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>