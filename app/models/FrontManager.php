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

    // ++++++++++ Fonction permettant de se deconnecter du compte utilisateur ++++++++++ //
    function logout(){
        unset($_SESSION['user']);
        session_destroy();
    }

    // ++++++++++ Fonction permettant d'obtenir et d'afficher les infos d'un utilisateur ++++++++++ //
    function info(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $info = $bdd->prepare('SELECT mail, pseudo FROM users WHERE id=?');
        $info->execute([$_SESSION['user']]);
        $info = $info->fetch();
        return $info;
    }

    // ++++++++++ Fonction permettant d'obtenir et d'afficher les commentaires d'un utilisateur ++++++++++ //
    function commentsUser(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $comments = $bdd->prepare('SELECT comments.*, articles.title FROM comments INNER JOIN articles ON comments.article_id = articles.id AND comments.user_id = ? ');
        $comments->execute([$_SESSION['user']]);
        $comments = $comments->fetchAll();
        return $comments;
    }

    // ++++++++++ Fonction permettant d'obtenir et d'afficher les commentaires liés à un article ++++++++++ //
    function commentsArticle($id){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $comments = $bdd->prepare('SELECT comments.*, users.pseudo FROM comments INNER JOIN users ON comments.user_id = users.id WHERE article_id=? ORDER BY created_at DESC');
        $comments->execute(array($id));
        return $comments;
    }

    // ++++++++++ Fonction permettant de créer un commentaire lié à un article ++++++++++ //
    function postUserComment(){
        if (isset($_SESSION['user'])) {
            // Connexion à la DB
            $bdd = $this -> dbConnect();
            extract($_POST);
            // Gestion des Erreurs
            $validation = true;
            $errors = [];
            if (empty($commentaire)) {
                $validation = false;
                $errors[] = 'Vous devez mettre un commentaire avant de poster !!!';
            }
            if ($validation) {
                $comments = $bdd->prepare('INSERT INTO comments(user_id, article_id, content) VALUES(:user_id, :article_id, :content)');
                $comments->execute([
                    'user_id' => $_SESSION['user'],
                    'article_id' => $id_article,
                    'content' => nl2br(htmlentities($commentaire)),
                ]);
            }
            return $errors;
        }
    }

    // ++++++++++ Fonction permettant d'envoyer un mail via le formulaire de contact ++++++++++ //
    function contactMail(){
        extract($_POST);
        // Gestion des Erreurs
        $validation = true;
        $errors = [];
        if(empty($nom) || empty($prenom) || empty($email) || empty($sujet) || empty($texte)){
            $validation = false;
            $errors[] = 'Tous les Champs sont OBLIGATOIRES !!!';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors[] = 'L\'Adresse Mail n\'est pas Valide !!!';
        }
        if($validation){
            $to = 'sfu1982@gmail.com';
            $from = 'Nouveau Message de : ' . $nom;
            $message = '
                <h1> Sujet du message : ' . $sujet .'</h1>
                <h2> Nouveau Message de : ' . $nom .' ' . $prenom .'</h2>
                <h2> Adresse E-Mail : ' . $email .'</h2>
                <p>'. nl2br($texte) . '</p>';
                $headers = 'From' . $nom . ' ' . $prenom .' < ' . $email . ' > ' . "\r\n";
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
                mail($to, $from, $message, $headers);
                unset($_POST['nom']);
                unset($_POST['prenom']);
                unset($_POST['email']);
                unset($_POST['sujet']);
                unset($_POST['texte']);   
        }
        return $errors;
    }
    
}