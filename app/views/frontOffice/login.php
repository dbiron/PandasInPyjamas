<?php
include 'app\views\layouts\head.php';
include 'app\views\layouts\header.php';
?>

<main class="content">
    <!---------- Login Form ---------->
    <section id="login">
        <form class="loginForm" method="post" action="index.php?action=loginUser" onsubmit="return verifForm(this)">
            <?php if(isset($errors)) :
                if($errors) : 
                foreach($errors as $error) :  ?>
                <div>
                    <div>
                        <div><?= $error ?></div>
                    </div>
                </div>
            <?php
            endforeach; 
            endif;
            endif ?>

            <div class="loginInput">
                <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo($_POST['pseudo']) ?>">
                <input type="password" name="password" placeholder="Mot de passe *">
            </div> 
            <div class="loginButton buttonEffect">
                <input type="submit" value="Se Connecter" name="envoi">
            </div>       
        </form>
    </section>
</main>

<?php
include 'app\views\layouts\footer.php';