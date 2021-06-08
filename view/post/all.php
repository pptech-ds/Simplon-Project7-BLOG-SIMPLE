<div class="row">
    <?php for($i=0; $i<20; $i++) : ?>
    <div class="col-3">
        <div class="card border-success mb-5 mt-5" style="max-width: 20rem;">
            <a href="?page=post.one" style="text-decoration: none">
                <h3 class="card-header" style="color:#99ffbb">Card header</h3>

                <img width="100%" height="100%" src="https://picsum.photos/300/300?random=1">
                <div class="card-body">
                    <p class="card-text" style="color:#ffffff">Some quick example text to build on the card
                        title and
                        make up the bulk of the
                        card's content.</p>
                </div>


                <div class="card-footer text-muted">
                    Par pras le 07-06-2021
                </div>
            </a>
        </div>
    </div>
    <?php endfor; ?>
</div>