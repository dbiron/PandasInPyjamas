<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Section Messagerie ---------->
    <section id="messagerie">
        <h1>Liste des Messages reçus</h1>
        <?php while($message = $messages->fetch()): ?>
        <div class="messageList">
            <h2><?= $message['sujet'] ?></h2>
            <p class="italic">Le : <time><?= date_format(new DateTime($message['created_at']), 'd/m/Y') ?></time></p>
            <p class="italic">Ce message a été envoyé par <?= $message['nom'] ?> <?= $message['prenom'] ?></p>
            <p class="italic">Adresse mail : <?= $message['mail'] ?>
                <h3>Contenu du message :</h3>
                <p class="contenuMessage"><?= $message['content'] ?></p>
        </div>
    </section>
    <?php endwhile; ?>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';