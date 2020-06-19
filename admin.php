<?php

// Important pour la sécurité des fichiers : les sessions
    // Demarrer une session
    session_start();

    // Autoload php généré avec composer
    require_once __DIR__ . '/vendor/autoload.php';

    try {

        $ControllerBack = new \Project\Controllers\ControllerBack(); // Objet Controller

        if (isset($_GET['action'])){
            if ($_GET['action'] == 'admin'){
                $ControllerBack->loginBack();
            }
            else if ($_GET['action'] == 'loginAdmin'){
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $password = htmlspecialchars($_POST['password']);
                $ControllerBack->loginAdmin($pseudo, $password);
            }
            else if ($_GET['action'] == 'logout'){
                $ControllerBack->logout();
            }
            else if ($_GET['action'] == 'panelAdmin'){
                $ControllerBack->panelAdmin();
            }
            else if ($_GET['action'] == 'newArticle'){
                $ControllerBack->newArticle();
            }
            else if ($_GET['action'] == 'createArticle'){
                $ControllerBack->createArticle();
            }
            else if ($_GET['action'] == 'editArticle'){
                $ControllerBack->editArticle();
            }
            else if ($_GET['action'] == 'updateArticle'){
                $id = htmlspecialchars($_GET['id']);
                $ControllerBack->updateArticle($id);
            }
            else if ($_GET['action'] == 'modifArticle'){
                $id = htmlspecialchars($_GET['id']);
                $ControllerBack->modifArticle($id);
            }
            else if ($_GET['action'] == 'deleteArticle'){
                $id = htmlspecialchars($_GET['id']);
                $ControllerBack->deleteArticle($id);
            }
            else if ($_GET['action'] == 'messagerie'){
                $ControllerBack->messagerie();
            }
        }

    } catch (Exception $e){
        require 'app/views/frontOffice/page-404.php';
    }
?>