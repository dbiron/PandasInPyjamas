<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Banner News ---------->
    <section class="banner">
        <img src="app/public/images/map-cache.png" alt="Banniere cache about" title="Banniere cache about">
            <div class="bannerFilter">
                <h1>NEWS<br><span>Toutes les news à propos de la team se trouvent ici</span></h1>
            </div>  
    </section>
    <!---------- Section News ---------->
    <section class="article">
        <?php while($article = $articles->fetch()): ?>
        <article class="articleContent">
            <figure class="articleImage"><img src="app/public/images/<?= $article['image'] ?>"></figure>
            <div class="articleInnerContent">
                <h2><a title="Cliquez pour voir l'article" href="article&id=<?= $article['id']?>"><?= $article['title'] ?></a></h2>
            </div>
        </article>
    <?php endwhile; ?>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';