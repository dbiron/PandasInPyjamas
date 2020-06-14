<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <section>
        <div class="bannerNews">
            <div class="bannerNewsFilter">
                <h1>NEWS<br><span>Toutes les news à propos de la team se trouvent ici</span></h1>
            </div>
        </div>    
    </section>
    <!---------- Section News ---------->
    <section class="article">
        <?php while($article = $articles->fetch()): ?>
        <article class="articleContent">
            <figure class="articleImage"><img src="app/public/images/<?= $article['image'] ?>"></figure>
            <div class="articleInnerContent">
                <h2><a title="Cliquez pour voir l'article" href="index.php?action=article&id=<?= $article['id']?>"><?= $article['title'] ?></a></h2>
            </div>
        </article>
    <?php endwhile; ?>
    </section>
</main>

<?php
include 'app\views\layouts\footer.php';