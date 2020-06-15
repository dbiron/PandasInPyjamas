<!---------- Appel du Head et du Header ---------->
<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <!---------- Banner Contact ---------->
    <section class="banner">
        <img src="app/public/images/map-museum.png">
        <div class="bannerFilter">
            <h1>CONTACT<br><span>Si vous voulez nous envoyer un petit message, c'est par ici que sa se passe</span></h1>
        </div>   
    </section>
    <!---------- Contact Form ---------->
    <section id="contact">
        <form class="contactForm" method="post" action="index.php?action=contactMail" onsubmit="return verifForm(this)">
            <?php if(isset($errors)) :
            if($errors) : 
            foreach($errors as $error) : ?>
                <div class="erreur"><?= $error ?></div>
            <?php
            endforeach; 
            else : ?>
                <div class="validation">Confirmation de l'envoi de votre E-Mail !</div>
            <?php endif; endif ?>
            <div class="contactInput">
                <input type="text" name="nom" placeholder="Votre nom *" value="<?php if(isset($_POST['nom'])) echo($_POST['nom']) ?>">
                <input type="text" name="prenom" placeholder="Votre prénom *" value="<?php if(isset($_POST['prenom'])) echo($_POST['prenom']) ?>">
                <input type="text" name="email" placeholder="Votre adresse email *" value="<?php if(isset($_POST['email'])) echo($_POST['email']) ?>">
                <input type="text" name="sujet" placeholder="Sujet du message *" value="<?php if(isset($_POST['sujet'])) echo($_POST['sujet']) ?>">
            </div>
            <div class="contactTextarea">
                <textarea type="text" name="texte" placeholder="Ecrivez votre message *"><?php if(isset($_POST['texte'])) echo($_POST['texte']) ?></textarea>
            </div> 
            <div class="contactButton buttonEffect">
                <input type="submit" value="Envoyer" name="envoi">
            </div>       
        </form>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app\views\layouts\footer.php';