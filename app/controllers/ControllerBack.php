<?php

namespace Project\Controllers;

// ++++++++++ Controller gérant le coté BackOffice ++++++++++ //
class ControllerBack {

    // ++++++++++ Fonction permettant de gérer la page PanelAdmin ++++++++++ //    
    function panelAdmin(){
        require 'app/views/backOffice/panelAdmin.php';    
    }

    // ++++++++++ Fonction permettant de gérer la page NewArticle ++++++++++ //    
    function newArticle(){
        require 'app/views/backOffice/newArticle.php';    
    }

    // ++++++++++ Fonction permettant de gérer l'ajout d'un nouvel article ++++++++++ //
    function createArticle(){

        $postArticles = new \Project\Models\BackManager();
        $errors = $postArticles->post_article();
        require 'app/views/backOffice/newArticle.php';
        // header ('Location: admin.php?action=panelAdmin');
    }

    // ++++++++++ Fonction permettant de gérer la page EditArticle ++++++++++ //
    function editArticle(){
        $homeArticles = new \Project\Models\FrontManager();
        $articles = $homeArticles->viewArticles();
        require 'app/views/backOffice/editArticle.php';    
    }
    
    function updateArticle($id){
        $updateArticle = new \Project\Models\FrontManager();
        $upArticle = $updateArticle->viewArticle($id);
        require 'app/views/backOffice/updateArticle.php';
    }

    function modifArticle($id){
        $modifArticle = new \Project\Models\BackManager();
        $modifArticle->update($id);
        header ('Location: admin.php?action=editArticle');
    }
    
    function deleteArticle($id){
        $deleteArticle = new \Project\Models\BackManager();
        $deleteArticle ->delete($id);
        header ('Location: admin.php?action=editArticle');
    }
}