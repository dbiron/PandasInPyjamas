<?php

// Important pour la sécurité des fichiers : les sessions
    // Demarrer une session
    session_start();

    // Autoload php généré avec composer
    require_once __DIR__ . '/vendor/autoload.php';

    try {

        $ControllerBack = new \Project\Controllers\ControllerBack(); // Objet Controller

        if (isset($_GET['action'])){
            if ($_GET['action'] == 'panelAdmin'){
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
        }

    } catch (Exception $e){

    }
?>