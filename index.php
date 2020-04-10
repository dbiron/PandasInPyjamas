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
        }
        else {
            $ControllerFront->home();
        }

    } catch (Exception $e){

    }
?>