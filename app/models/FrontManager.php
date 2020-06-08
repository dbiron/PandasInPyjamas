<?php

namespace Project\Models;

class FrontManager extends Manager{

    // ++++++++++ Fonction d'affichage des articles par ordre de création Descandant ++++++++++ //
    // ++++++++++ Ceci concerne la page News ++++++++++ //
    public function viewArticles(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $req = $bdd->prepare ("SELECT id, title, content, image, created_at FROM articles ORDER BY created_at DESC");
        $req->execute(array());
        return $req;
    }

    // ++++++++++ Fonction d'affichage d'un seul article ++++++++++ //
    // ++++++++++ Ceci affiche l'article sur lequel on clique en fonction de son ID ++++++++++ //
    public function viewArticle($id){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $req = $bdd->prepare ("SELECT id, title, content, image, created_at FROM articles WHERE id=?");
        $req->execute(array($id));
        return $req->fetch();
    }

    // ++++++++++ Fonction de création de compte ++++++++++ //
    function register(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Extraction des POST
        extract($_POST);
        // Mise en place de la gestion des erreurs
        $validation = true;
        $errors = [];
        // On vérifie que tous les champs sont remplis
        if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)){
            $validation = false;
            $errors[] = 'Tous les Champs sont OBLIGATOIRES !!!';
        }
        // On vérifie la validité de l'email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors[] = 'L\'Adresse Mail n\'est pas Valide !!!';
        }
        // On vérifie que l'email noté et l'email de confirmation correspondent
        if($emailconf != $email){
            $validation = false;
            $errors[] = 'L\'Adresse Mail de Confirmation ne correspond pas !!!';
        }
        // On vérifie que le password noté et le password de confirmation correspondent
        if($passwordconf != $password){
            $validation = false;
            $errors[] = 'Le Password de Confirmation ne correspond pas !!!';
        }
        // On vérifie si le pseudo entré n'est pas déjà pris
        if($this->pseudo_check($pseudo)){
            $validation = false;
            $errors[] = 'Ce Pseudo est déjà pris';
        }
        // Si tous les critères sont remplis, on entre le nouveau compte dans la base de donnée
        if ($validation) {
            // Préparation de la DB et exécution
            $register = $bdd->prepare('INSERT INTO users(pseudo, mail, password) VALUES (:pseudo, :email, :password)');
            $register->execute([
                'pseudo'=>htmlentities($pseudo),
                'email'=>htmlentities($email),
                'password'=>password_hash($password, PASSWORD_DEFAULT)
            ]);
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['emailconf']);
        }
        // Retour des erreurs
        return $errors;
    }

    // ++++++++++ Fonction permettant de vérifier si le pseudo demandé n'est pas déjà pris ++++++++++ //
    public function pseudo_check($pseudo){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $result = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo=?');
        $result->execute([$pseudo]);
        $result = $result->fetch()[0];
        return $result;
    }

    // ++++++++++ Fonction permettant de se connecter au compte utilisateur ++++++++++ //
    function login($pseudo, $password){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Extraction des POST
        // extract($_POST);
        // Gestion des Erreurs
        $validation = true;
        $errors = [];
        // On vérifie que tous les champs sont remplis
        if(empty($pseudo) || empty($password)){
            $validation = false;
            $errors[] = 'Tous les Champs sont OBLIGATOIRES !!!';
        }
        if ($validation) {
            // Préparation de la DB et exécution
            $login = $bdd->prepare('SELECT * FROM users WHERE pseudo=?');
            $login->execute([$pseudo]);
            $login = $login->fetch();
            if (password_verify($password, $login['password'])) {
                $_SESSION['user'] = $login['id'];
            }
            else
            {
                $errors[] = 'Cela ne correspond à aucun compte actif';
            }
        }
        else
        {
            $errors[] = 'Cela ne correspond à aucun compte actif';
        }
        return $errors;
    }
    
}