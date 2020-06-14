<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

    <main class="content">
        <!---------- Message de Bienvenue ---------->
        <section class="compte">
            <div>
                <h1>Bienvenue <?= $info['pseudo']?></h1>
            </div>
            <!---------- Listing des derniers commentaires du User ---------->
            <div>
                <h2>Derniers commentaires :</h2>
            </div>

            <?php foreach($comments as $comment) : ?>
            <div>
                <div>
                    <p class="info">Posté le : <time><?= $comment['created_at'] ?></time></p>
                    <p class="info">Sur L'Article <?= $comment['title']?></p>
                    <p><?= $comment['content']?></p>
                </div>
            </div>
            <?php endforeach ?>
        </section>
    </main>
<?php
include 'app\views\layouts\footer.php';
?>