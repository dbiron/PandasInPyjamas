<!---------- Appel du Head et du Header ---------->
<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <!---------- Section Update Article ---------->
    <section id="newArticle">
        <h1>Modifier un Article</h1>
        <form class="newArticleForm" method="post" action="admin.php?action=modifArticle&id=<?= $_GET['id']?>">
            <div class="newArticleInput">
                <input type="text" name="titre" placeholder="Titre *" value="<?= $upArticle['title']?>">
            </div>
            <div class="newArticleTextarea">
                <textarea name="contenu" placeholder="Corps de l'article *" value=""><?= str_replace("<br/>","", $upArticle['content']) ?></textarea>
            </div>
            <div class="newArticleButton buttonEffect">
                <input type="submit" value="Poster!">
            </div>
        </form>
    </section>

</main>

<!---------- Appel du Footer ---------->
<?php
include 'app\views\layouts\footer.php';