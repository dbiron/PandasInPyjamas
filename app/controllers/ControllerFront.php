<?php

namespace Project\Controllers;

class ControllerFront {

    function home(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/frontOffice/home.php';
    }
    function contactFront(){
        require 'app/views/frontOffice/contact.php';
    }
    function newsFront(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/frontOffice/news.php';
    }
    function teamFront(){
        require 'app/views/frontOffice/team.php';
    }
    function aboutFront(){
        require 'app/views/frontOffice/about.php';
    }
    function articleFront($id){
        $homeArticle = new \Project\Models\FrontManager();
        $article = $homeArticle->viewArticle($id);
        require 'app/views/frontOffice/article.php';
    }
}