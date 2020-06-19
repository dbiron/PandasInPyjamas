<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Page 404 ---------->
    <section id="404">
        <h1>404</h1>
        <p>Oooops !!! La page que vous cherchez semble introuvable</p>
        <a title="Page d'accueil" href="index.php">Retour à l'accueil</a>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';