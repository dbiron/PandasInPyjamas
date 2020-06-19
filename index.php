<?php

// Important pour la sécurité des fichiers : les sessions
    // Demarrer une session
    session_start();

    // Autoload php généré avec composer
    require_once __DIR__ . '/vendor/autoload.php';

    try {

        $ControllerFront = new \Project\Controllers\ControllerFront(); // Objet Controller
        
        if (isset($_GET['action'])){
            if ($_GET['action'] == 'contact'){
                $ControllerFront->contactFront();
            }
            else if ($_GET['action'] == 'contactMessage'){
                $ControllerFront->contactMessage();
            }
            else if ($_GET['action'] == 'news'){
                $ControllerFront->newsFront();
            }
            else if ($_GET['action'] == 'team'){
                $ControllerFront->teamFront();
            }
            else if ($_GET['action'] == 'about'){
                $ControllerFront->aboutFront();
            }
            else if ($_GET['action'] == 'article'){
                $id = htmlspecialchars($_GET['id']);
                $ControllerFront->articleFront($id);
            }
            else if ($_GET['action'] == 'postComment'){
                $ControllerFront->postComment();
            }
            else if ($_GET['action'] == 'inscription'){
                $ControllerFront->inscriptionFront();
            }
            else if ($_GET['action'] == 'newUser'){
                $ControllerFront->newUser();
            }
            else if ($_GET['action'] == 'login'){
                $ControllerFront->loginFront();
            }
            else if ($_GET['action'] == 'loginUser'){
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $password = htmlspecialchars($_POST['password']);
                $ControllerFront->loginUser($pseudo, $password);
            }
            else if ($_GET['action'] == 'compte'){
                $ControllerFront->compteFront();
            }
            else if ($_GET['action'] == 'deconnexion'){
                $ControllerFront->deconnexion();
            }
            else if ($_GET['action'] == 'cgu'){
                $ControllerFront->cguFront();
            }
            else if ($_GET['action'] == 'legalm'){
                $ControllerFront->legalmFront();
            }
            else if ($_GET['action'] == 'sitemap'){
                $ControllerFront->sitemapFront();
            }
        }
        else {
            $ControllerFront->home();
        }

    } catch (Exception $e){
        require 'app/views/frontOffice/page-404.php';
    }
?>