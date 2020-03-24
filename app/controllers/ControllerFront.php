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
    function sponsorsFront(){
        require 'app/views/sponsors.php';
    }
}