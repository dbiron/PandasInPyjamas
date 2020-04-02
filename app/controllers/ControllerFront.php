<?php

namespace Project\Controllers;

class ControllerFront {
    function home(){
        $homeFront = new \Project\Models\FrontManager();
        $accueil = $homeFront->viewFront();
        require 'app/views/home.php';
    }
    function contactFront(){
        require 'app/views/contact.php';
    }
    function newsFront(){
        require 'app/views/news.php';
    }
    function teamFront(){
        require 'app/views/team.php';
    }
    function aboutFront(){
        require 'app/views/about.php';
    }
    function contactMail($lastname, $firstname, $mail, $content){
        $userManager = new \Projet\Models\UserManager();
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $contactUserMail = $userManager->addMail($lastname, $firstname, $subject, $mail, $content);
            require 'app/views/contact.php';
        } else {
        }
    }    

}