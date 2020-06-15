<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Page 403 ---------->
    <section id="404">
        <h1>403</h1>
        <p>Oooops !!! Accès refusé</p>
        <p>Vous n'êtes pas autorisé à consulter cette page.</p>
        <a title="Page d'accueil" href="index.php">Retour à l'accueil</a>    
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';