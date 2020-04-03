<?php
include 'layouts/head.php';
include 'layouts/header.php';
?>

<main class="content">
    <!---------- Banner Contact ---------->
    <section>
        <div class="bannerContact">
            <div class="bannerContactFilter">
                <h1>CONTACT<br><span>Si vous voulez nous envoyer un petit message, c'est par ici que sa se passe</span></h1>
            </div>
        </div>    
    </section>
    <!---------- Contact Form ---------->
    <section id="contact">
        <form class="contactForm" method="post" action="index.php?action=contactMail" onsubmit="return verifForm(this)">
            <div class="contactInput">
                <input type="text" name="nom" placeholder="Votre nom">
                <input type="text" name="prenom" placeholder="Votre prénom">
                <input type="text" name="email" placeholder="Votre adresse email">
                <input type="text" name="sujet" placeholder="Sujet du message">
            </div>
            <div class="contactTextarea">
                <textarea type="text" name="message" placeholder="Ecrivez votre message"></textarea>
            </div> 
            <div class="contactButton">
                <input type="submit" value="Envoyer" name="envoi">
            </div>       
        </form>
    </section>
</main>

<?php
include 'layouts/footer.php';