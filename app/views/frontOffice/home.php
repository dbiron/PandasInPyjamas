<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>
<div class="bannerHome">
    <div class="bannerHomeFilter">
        <h1>PANDAS IN PYJAMAS<br><span>CSGO team since 2020</span></h1>
    </div>
</div>
<section id="news">
        <?php while($article = $articles->fetch()): ?>
            <article class="newsBloc">
                <div class="newsCard">
                    <figure class="postThumb">
                        <div class="postCat">
                            <span class="label">Team News</span>
                        </div>
                        <a href="#"><img src="app/public/images/<?= $article['image'] ?>" alt="Counter-Terrorist and Lootbox" title="Counter-Terrorist and Lootbox"></a>
                    </figure>
                    <div class="newsInnerContent">
                        <time datetime="2020-03-10" class="postDate"><?= $article['created_at'] ?></time>
                        <h2><?= $article['title'] ?></h2>
                        <p><?= nl2br($article['content']) ?></p>
                    </div>
                    <div class="newsFooter">
                        <div class="newsAuthor">
                            <img src="app/public/images/avatar.jpg" alt="avatar" title="avatar">
                            <h3>Nom de L'auteur</h3>
                        </div>
                        <div class="newsLike">
                            <i class="far fa-comment"></i>
                            <p>2500</p>                          
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
    <?php
include 'app\views\layouts\footer.php';