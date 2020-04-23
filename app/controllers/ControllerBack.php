<?php

namespace Project\Controllers;

class ControllerBack {

    function panelAdmin(){
        require 'app/views/backOffice/panelAdmin.php';    
    }
    function newArticle(){
        require 'app/views/backOffice/newArticle.php';    
    }
    function editArticle(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/backOffice/editArticle.php';    
    }
}