<?php
include 'layouts/head.php';
include 'layouts/header.php';
?>

<main class="content">
    <section class="article">

            <article class="articleContent">
                <figure class="articleImage"><img src="app/public/images/<?= $article['image'] ?>"></figure>
                <div class="articleInnerContent">
                    <h2><a href="#"><?= $article['title'] ?></a></h2>
                    <p><?= nl2br($article['content']) ?></p>
                </div>
            </article>

    </section>
</main>

<?php
include 'layouts/footer.php';