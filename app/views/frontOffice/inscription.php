<!---------- Appel du Head et du Header ---------->
<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <!---------- Inscription Form ---------->
    <section id="inscription">
        <form class="inscriptionForm" method="post" action="index.php?action=newUser" onsubmit="return verifForm(this)">
            <?php if(isset($errors)) :
                if($errors) : 
                foreach($errors as $error) : ?>
                    <div class="erreur"><?= $error ?></div>
                <?php
                endforeach; 
                else : ?>
                    <div class="validation">Confirmation de votre Inscription !</div>
            <?php endif; endif ?>
            <div class="inscriptionInput">
                <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo($_POST['pseudo']) ?>">
                <input type="text" name="email" placeholder="Adresse e-mail *" value="<?php if(isset($_POST['email'])) echo($_POST['email']) ?>">
                <input type="text" name="emailconf" placeholder="Vérification de l'e-mail *" value="<?php if(isset($_POST['emailconf'])) echo($_POST['emailconf']) ?>">
                <input type="password" name="password" placeholder="Mot de passe *">
                <input type="password" name="passwordconf" placeholder="Vérification du mot de passe *">
            </div> 
            <div class="inscriptionButton buttonEffect">
                <input type="submit" value="Inscription" name="envoi">
            </div>       
        </form>
    </section>
</main>

<!---------- Appel du Footer ---------->
<?php
include 'app\views\layouts\footer.php';