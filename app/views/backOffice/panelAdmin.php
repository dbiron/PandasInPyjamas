<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <section id="admin">
        <article class="adminArticle">
            <figure><img src="app/public/images/add-article.svg"></figure>
            <a href="admin.php?action=newArticle"><h1>Ecrire un article</h1></a>
        </article>
        <article class="adminArticle">
            <figure><img src="app/public/images/edit-article.svg"></figure>
            <a href="admin.php?action=editArticle"><h1>Editer/Supprimer un article</h1></a>
        </article>         
    </section>
</main>

<?php
include 'app\views\layouts\footer.php';