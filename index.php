<?php

// Important pour la sécurité des fichiers : les sessions
    // Demarrer une session
    session_start();

    // Autoload php généré avec composer
    require_once __DIR__ . '/vendor/autoload.php';

    try {

        $ControllerFront = new \Project\Controllers\ControllerFront(); // Objet Controller
        if(isset($_GET['action'])){
    
            switch ($_GET['action']) {
                case 'contact':
                    $controllerFront->contactFront();
                break;
                case 'contactMessage':
                    $controllerFront->contactMessage();
                break;
                case 'news':
                    $controllerFront->newsFront();
                break;
                case 'team':
                    $controllerFront->teamFront();
                break;
                case 'about':
                    $controllerFront->aboutFront();
                break;
                case 'article':
                    $id = htmlspecialchars($_GET['id']);
                    $ControllerFront->articleFront($id);
                break;
                case 'postComment':
                    $ControllerFront->postComment();
                break;
                case 'inscription':
                    $ControllerFront->inscriptionFront();
                break;
                case 'newUser':
                    $ControllerFront->newUser();
                break;
                case 'login':
                    $ControllerFront->loginFront();
                break; 
                case 'loginUser':
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $password = htmlspecialchars($_POST['password']);
                    $ControllerFront->loginUser($pseudo, $password);
                break; 
                case 'compte':
                    $ControllerFront->compteFront();
                break; 
                case 'deconnexion':
                    $ControllerFront->deconnexion();
                break; 
                case 'cgu':
                    $ControllerFront->cguFront();
                break; 
                case 'legalm':
                    $ControllerFront->legalmFront();
                break; 
                case 'sitemap':
                    $ControllerFront->sitemapFront();
                break; 
                default :          
                require 'app/views/frontOffice/page-404.php';
                break;
            }
        }else{
            $controllerFront->home();
        }
    } catch (Exception $e){
        require 'app/views/frontOffice/page-404.php';
    }
?>