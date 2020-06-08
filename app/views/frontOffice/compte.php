<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

    <main class="content">
        <!---------- Message de Bienvenue ---------->
        <div class="col-xs-12">
            <h1>Bienvenue <!--<?= $info['pseudo']?>--> !</h1>
        </div>
        <!---------- Listing des derniers commentaires du User ---------->
        <div class="col-xs-12">
            <h1>Derniers commentaires !</h1>
        </div>

        <!-- <?php foreach($comments as $comment) : ?>
        <div class="row commentaire">
            <div class="col-xs-12">
                <p class="date">Posté le <time datetime="<?= $comment['created_at']?>"><?= datation($comment['created_at']) ?></time> :</p>
                <p>Sur L'Article <?= $comment['title']?></p>
                <p><?= $comment['content']?></p>
            </div>
        </div>
        <?php endforeach ?> -->
    </main>
<?php
include 'app\views\layouts\footer.php';
?>