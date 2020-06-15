<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

    <main class="content">
        <!---------- Message de Bienvenue ---------->
        <section class="compte">
            <h1>Bienvenue <?= $info['pseudo']?></h1>
            <!---------- Listing des derniers commentaires du User ---------->
            <h2>Derniers commentaires :</h2>
            <?php foreach($comments as $comment) : ?>
                    <p class="info">Posté le : <time><?= $comment['created_at'] ?></time></p>
                    <p class="info">Sur L'Article <?= $comment['title']?></p>
                    <p><?= $comment['content']?></p>
            <?php endforeach ?>
        </section>
    </main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';