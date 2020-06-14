<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <section id="admin">
        <h1>Panneau D'Administration</h1>
        <article class="adminBloc">
            <div class="adminCard">
                <figure class="adminThumb">
                    <img src="app/public/images/add-article.svg" alt="" title="">
                </figure>
                <div class="adminFooter">
                <a title="Création d'un article" href="admin.php?action=newArticle"><h2>Ecrire un article</h2></a>
                </div>
            </div>
        </article>
        <article class="adminBloc">
            <div class="adminCard">
                <figure class="adminThumb">
                    <img src="app/public/images/edit-article.svg" alt="" title="">
                </figure>
                <div class="adminFooter">
                <a title="Edition ou suppression d'un article" href="admin.php?action=editArticle"><h2>Editer/Supprimer un article</h2></a>
                </div>
            </div>
        </article>
    </section>
</main>

<?php
include 'app\views\layouts\footer.php';