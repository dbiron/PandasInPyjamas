<?php

namespace Project\Controllers;

// ++++++++++ Controller gérant le coté BackOffice ++++++++++ //
class ControllerBack {

    // ++++++++++ Fonction permettant de gérer la page Login ++++++++++ //
    function loginBack(){
        $title ='PIP - Login - Admin';
        $description ='PIP - Page pour se connecter au site en admin';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, Login, Admin';
        require 'app/views/backOffice/login.php';
    }
    
    // ++++++++++ Fonction permettant de se logger ++++++++++ //
    function loginAdmin($pseudo, $password){
        $loginAdmin = new \Project\Models\BackManager();
        $errors = $loginAdmin->loginMaster($pseudo, $password);
        if (empty($errors)){
            header ('Location: admin.php?action=panelAdmin');
        }
        else{
            require 'app/views/backOffice/login.php';
        }
    }

    // ++++++++++ Fonction permettant de se deconnecter ++++++++++ //
    function logout(){
        $logoutAdmin = new \Project\Models\BackManager();
        $logout = $logoutAdmin->logout();
           header ('Location: index.php');
    }

    // ++++++++++ Fonction permettant de gérer la page PanelAdmin ++++++++++ //    
    function panelAdmin(){
        $title ='PIP - PanelAdmin';
        $description ='PIP - Page pour gérer les articles';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, PanelAdmin';
        if ($_SESSION['admin']) {
            require 'app/views/backOffice/panelAdmin.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: admin.php?action=admin');
        }   
    }

    // ++++++++++ Fonction permettant de gérer la page NewArticle ++++++++++ //    
    function newArticle(){
        $title ='PIP - NewArticle';
        $description ='PIP - Page pour créer un nouvel article';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, NewArticle';
        if ($_SESSION['admin']) {
            require 'app/views/backOffice/newArticle.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: admin.php?action=admin');
        }       
    }

    // ++++++++++ Fonction permettant de gérer l'ajout d'un nouvel article ++++++++++ //
    function createArticle(){
        if ($_SESSION['admin']) {
            $postArticles = new \Project\Models\BackManager();
            $errors = $postArticles->post_article();
            require 'app/views/backOffice/newArticle.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: admin.php?action=admin');
        }   
    }

    // ++++++++++ Fonction permettant de gérer la page EditArticle ++++++++++ //
    function editArticle(){
        $title ='PIP - EditArticle';
        $description ='PIP - Page pour éditer un article';
        $keywords = 'ESport, Team, Jeux-Vidéo, Game, Counter-Strike, EditArticle';
        if ($_SESSION['admin']) {
            $listArticles = new \Project\Models\BackManager();
            $lists = $listArticles->listArticles();
            require 'app/views/backOffice/editArticle.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: admin.php?action=admin');
        }      
    }

    // ++++++++++ Fonction permettant de gérer la page UpdateArticle ++++++++++ //    
    function updateArticle($id){
        if ($_SESSION['admin']) {
            $updateArticle = new \Project\Models\FrontManager();
            $upArticle = $updateArticle->viewArticle($id);
            require 'app/views/backOffice/updateArticle.php';
        }
        else
        {
            // A changer pour page unhotorize connection
            header ('Location: admin.php?action=admin');
        }        
    }

    // ++++++++++ Fonction permettant de modifier un article ++++++++++ //    
    function modifArticle($id){
        $modifArticle = new \Project\Models\BackManager();
        $modifArticle->update($id);
        header ('Location: admin.php?action=editArticle');
    }

    // ++++++++++ Fonction permettant de supprimer un article ++++++++++ //       
    function deleteArticle($id){
        $deleteArticle = new \Project\Models\BackManager();
        $deleteArticle ->delete($id);
        header ('Location: admin.php?action=editArticle');
    }
}