<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Section Edit Article ---------->
    <section id="editArticle">
        <?php while($list = $lists->fetch()): ?>
        <div class="editArticleList">
            <h2><?= $list['title'] ?></h2>
            <div class="edit"><a title="Modification d'une News"
                    href="admin.php?action=updateArticle&id=<?= $list['id']?>">Modifier la news</a><a
                    id="myBtn">Supprimer la news</a></div>
        </div>

    </section>
    <!---------- Modal de validation "Supprimer Article" ---------->
    <div id="validationDelete" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Êtes-vous sûr de vouloir supprimer cet article ?</h2>
            </div>
            <div class="modal-footer">
                <a title="Supprimer une News" href="admin.php?action=deleteArticle&id=<?= $list['id']?>">OUI</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';