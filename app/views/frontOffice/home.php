<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Banner Home ---------->
    <section class="banner">
        <img src="app/public/images/banner.png" alt="Banniere csgo home" title="Banniere csgo home">
        <div class="bannerFilter">
            <h1>PANDAS IN PYJAMAS<br><span>CSGO team since 2020</span></h1>
        </div>
    </section>
    <!---------- Section News ---------->
    <section id="news">
        <?php while($article = $articles->fetch()): ?>
        <article class="newsBloc">
            <div class="newsCard">
                <figure class="postThumb">
                    <div class="postCat">
                        <span class="label">Team News</span>
                    </div>
                    <a href="article&id=<?= $article['id']?>" title=""><img
                            src="app/public/images/<?= $article['image'] ?>" alt="Counter-Terrorist and Lootbox"
                            title="Counter-Terrorist and Lootbox"></a>
                </figure>
                <div class="newsInnerContent">
                    <time class="postDate"><?= date_format(new DateTime($article['created_at']), 'd/m/Y') ?></time>
                    <h2><?= $article['title'] ?></h2>
                    <p><?= nl2br($article['content']) ?></p>
                </div>
                <div class="newsFooter">
                    <a href="article&id=<?= $article['id']?>" title="Lire l'article">Lire l'article</a>
                </div>
            </div>
        </article>
        <?php endwhile; ?>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';