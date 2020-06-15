<?php

namespace Project\Controllers;

// ++++++++++ Controller gérant le coté FrontOffice ++++++++++ //
class ControllerFront {

    // ++++++++++ Fonction permettant de gérer la page Home ++++++++++ //
    function home(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/frontOffice/home.php';
    }

    // ++++++++++ Fonction permettant de gérer la page Contact ++++++++++ //
    function contactFront(){
        $title ='PIP - Contactez nous';
        $description ='PIP - Page de contact';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Contact';
        require 'app/views/frontOffice/contact.php';
    }

    // ++++++++++ Fonction permettant d'envoyer un Mail via la page contact ++++++++++ //
    function contactMail(){
        $contactMail = new \Project\Models\FrontManager();
        $errors = $contactMail->contactMail();
        require 'app/views/frontOffice/contact.php';
    }

    // ++++++++++ Fonction permettant de gérer la page News ++++++++++ //
    function newsFront(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        $title ='PIP - Liste des news de la team';
        $description='PIP - Page des news concernant la team';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, News';
        require 'app/views/frontOffice/news.php';
    }

    // ++++++++++ Fonction permettant de gérer la page Team ++++++++++ //
    function teamFront(){
        $title ='PIP - Les membres de la team';
        $description ='PIP - Page des membres constituant la team';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Joueurs';
        require 'app/views/frontOffice/team.php';
    }

    // ++++++++++ Fonction permettant de gérer la page About ++++++++++ //
    function aboutFront(){
        $title ='PIP - About-Us';
        $description ='PIP - Page servant à tout savoir sur la team en général';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, About-Us';
        require 'app/views/frontOffice/about.php';
    }

    // ++++++++++ Fonction permettant de gérer la page Article ++++++++++ //
    function articleFront($id){
        $homeArticle = new \Project\Models\FrontManager();
        $commentArticle = new \Project\Models\FrontManager();
        $article = $homeArticle->viewArticle($id);
        $comments = $commentArticle->commentsArticle($id);
        $title ='PIP - Article de la Team';
        $description ='PIP - Page pour voir un article souhaité ';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Article';
        require 'app/views/frontOffice/article.php';
    }

    // ++++++++++ Fonction permettant de gérer la page Inscription ++++++++++ //
    function inscriptionFront(){
        $title ='PIP - Inscrivez vous';
        $description ='PIP - Page pour s\'inscrire au site';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Inscription';
        require 'app/views/frontOffice/inscription.php';
    }

    // ++++++++++ Fonction permettant de créer un nouveau membre ++++++++++ //
    function newUser(){
        $registerUser = new \Project\Models\FrontManager();
        $errors = $registerUser->register();
        require 'app/views/frontOffice/inscription.php';
    }

    // ++++++++++ Fonction permettant de gérer la page Login ++++++++++ //
    function loginFront(){
        $title ='PIP - Login';
        $description ='PIP - Page dpour se connecter au site';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Login';
        require 'app/views/frontOffice/login.php';
    }

    // ++++++++++ Fonction permettant de se logger ++++++++++ //
    function loginUser($pseudo, $password){
        $loginUser = new \Project\Models\FrontManager();
        $errors = $loginUser->login($pseudo, $password);
        if (empty($errors)){
            header ('Location: index.php?action=compte');
        }
        else{
            require 'app/views/frontOffice/login.php';
        }
    }

    // ++++++++++ Fonction permettant de se deconnecter ++++++++++ //
    function deconnexion(){
        $logoutUser = new \Project\Models\FrontManager();
        $logout = $logoutUser->logout();
        header ('Location: index.php?action=compte');
    }

    // ++++++++++ Fonction permettant de gérer la page du compte user ++++++++++ //
    function compteFront(){
        if ($_SESSION['user']) {
            $infoUser = new \Project\Models\FrontManager();
            $info = $infoUser->info();
            $comments = $infoUser->commentsUser();
            $title ='PIP - CGU';
            $description ='PIP - Page compte user du site de la team';
            $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, user';
            require 'app/views/frontOffice/compte.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: index.php?action=news');
        }
    }

    // ++++++++++ Fonction permettant de poster un commentaire ++++++++++ //
    function postComment(){
        extract($_POST);
        $postComment = new \Project\Models\FrontManager();
        $errors = $postComment->postUserComment();
        if (isset($errors)){
            $article = $postComment->viewArticle($id_article);
            $comments = $postComment->commentsArticle($id_article);
            $title ='PIP - Article de la Team';
            $description ='PIP - Page pour voir un article souhaité ';
            $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Article';
            require 'app/views/frontOffice/article.php';   
        }
        else{
            header ('Location: index.php?action=article&id='.$id_article);   
        }
    }

    // ++++++++++ Fonction permettant de gérer la page CGU ++++++++++ //
    function cguFront(){
        $title ='PIP - CGU';
        $description ='PIP - Page des CGU du site de la team';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, CGU';
        require 'app/views/frontOffice/cgu.php';
    }
   
    // ++++++++++ Fonction permettant de gérer la page Mentions Légales ++++++++++ //
    function legalmFront(){
        $title ='PIP - Mention Légales';
        $description ='PIP - Page des Mentions Légales du site de la team';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, mentions légales';
        require 'app/views/frontOffice/legalm.php';
    }
}