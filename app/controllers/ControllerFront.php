<?php

namespace Project\Controllers;

class ControllerFront {

    function home(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/home.php';
    }
    function contactFront(){
        require 'app/views/contact.php';
    }
    function newsFront(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/news.php';
    }
    function teamFront(){
        require 'app/views/team.php';
    }
    function aboutFront(){
        require 'app/views/about.php';
    }
    function articleFront($id){
        $homeArticle = new \Project\Models\FrontManager();
        $article = $homeArticle->viewArticle($id);
        require 'app/views/article.php';
    }
}