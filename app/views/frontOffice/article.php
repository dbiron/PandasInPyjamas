<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Section Article ---------->
    <section class="article">
        <article class="articleContent">
            <figure class="articleImage"><img src="app/public/images/<?= $article['image'] ?>"></figure>
            <div class="articleInnerContent">
                <h1><?= $article['title'] ?></h1>
                <p><?= nl2br($article['content']) ?></p>
            </div>
        </article>
        <!---------- Affichage des commentaires ---------->
        <div>
            <h2>Commentaires :</h2>
            <?php foreach($comments as $comment) : ?>
            <p class="info">Posté par : <?= $comment['pseudo'] ?> le :
                <time><?= date_format(new DateTime($comment['created_at']), 'd/m/Y') ?></time></p>
            <p><?= $comment['content'] ?></p>
        </div>
        <?php endforeach;
                if(isset($_SESSION['user'])) :?>
        <!---------- Affichage du formulaire de commentaire si présence d'une session User ---------->
        <div>
            <h2>Poster un commentaire</h2>
            <form method="post" action="postComment">
                <?php if(isset($errors)) :
                if($errors) : 
                foreach($errors as $error) : ?>
                <div class="erreur"><?= $error ?></div>
                <?php
                endforeach; 
                else : ?>
                <div class="validation">Votre commentaire a bien été ajouté !</div>
                <?php endif; endif ?>
                <input type="hidden" value="<?= isset($_GET['id']) ? htmlspecialchars($_GET['id']) : $id_article ?>"
                    name="id_article">
                <div class="newCommentTextarea">
                    <textarea name="commentaire" placeholder="Votre commentaire *"></textarea>
                </div>
                <div class="newCommentButton buttonEffect">
                    <input type="submit" value="Commenter">
                </div>
            </form>
        </div>
        <?php endif ?>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';