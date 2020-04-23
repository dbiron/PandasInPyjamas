<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">

    <section id="newArticle">
        <h1>Créer un article </h1>
        <form class="newArticleForm" method="post" action="" enctype="multipart/form-data">
            <div class="newArticleInput">
                <input type="text" name="titre" placeholder="Titre *" value="">
                <input type="file" name="file">
            </div>
            <div class="newArticleTextarea">
                <textarea name="contenu" placeholder="Corps de l'article *" value=""></textarea>
            </div>
            <div class="newArticleButton">
                <input type="submit" value="Poster!">
            </div>
        </form>
    </section>

</main>

<?php
include 'app\views\layouts\footer.php';