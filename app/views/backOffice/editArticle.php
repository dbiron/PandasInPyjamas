<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <section id="editArticle">
        <?php while($article = $articles->fetch()): ?>
            <div class="editArticleList">
                <h2><?= $article['title'] ?></h2>
                <a href="">Modifier la news</a><a href="">Supprimer la news</a>
            </div>
        <?php endwhile; ?>
    </section>
</main>

<?php
include 'app\views\layouts\footer.php';