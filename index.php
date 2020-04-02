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
            elseif ($_GET['action'] == 'contactMail') {
                $lastname = htmlspecialchars($_POST['nom']);
                $firstname = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars($_POST['email']);
                $subject = htmlspecialchars($_POST['sujet']);
                $content = htmlspecialchars($_POST['message']);
                if (!empty($lastname) && (!empty($firstname) && (!empty($subject) && (!empty($mail) && (!empty($content)))))) {
                    $ControleurFront->contactMail($lastname, $firstname, $subject, $mail, $content);
                } else {
                    throw new Exception('tous les champs ne sont pas remplis');
                }
            }
        }
        else {
            $ControllerFront->home();
        }

    } catch (Exception $e){

    }
?>