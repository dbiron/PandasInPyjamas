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
            if ($_GET['action'] == 'newArticle'){
                $ControllerBack->newArticle();
            }
            if ($_GET['action'] == 'editArticle'){
                $ControllerBack->editArticle();
            }
        }

    } catch (Exception $e){

    }
?>