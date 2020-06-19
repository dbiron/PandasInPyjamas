<?php

namespace Project\Models;

class BackManager extends Manager{

    // ++++++++++ Fonction permettant de se connecter au compte administrateur ++++++++++ //
    function loginMaster($pseudo, $password){
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
            $login = $bdd->prepare('SELECT * FROM admins WHERE pseudo=?');
            $login->execute([$pseudo]);
            $login = $login->fetch();
            var_dump($login);
            if (password_verify($password, $login['password'])) {
                $_SESSION['admin'] = $login['id'];
            }
            else
            {
                $errors[] = 'Cela ne correspond à aucun compte admin actif';
            }
        }
        else
        {
            $errors[] = 'Cela ne correspond à aucun compte admin actif';
        }
        return $errors;
    }

    // ++++++++++ Fonction permettant de se deconnecter du compte administrateur ++++++++++ //
    function logout(){
        unset($_SESSION['admin']);
        session_destroy();
    }

    // ++++++++++ Fonction d'affichage des articles par ordre de création Descandant ++++++++++ //
    public function listArticles(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $req = $bdd->prepare ("SELECT id, title, content, image, created_at FROM articles ORDER BY created_at DESC");
        $req->execute(array());
        return $req;
    }
    // ++++++++++ Fonction de création d'un nouvel article ++++++++++ //    
    function post_article(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Gestion des Erreurs
        extract($_POST);
        $validation = true;
        $errors = [];
        // On vérifie que tous les champs sont remplis
        if (empty($titre)) {
            $validation = false;
            $errors[] = 'Un titre est requis';
        }
        if (empty($contenu)) {
            $validation = false;
            $errors[] = 'Un contenu est requis';
        }
        if ($validation) {
            // Gestion de l'upload pour l'image
            // Autorisation de certains type de fichiers
            $image = basename($_FILES["image"]["name"]);
            $type_file = $_FILES['image']['type'];
            if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png')) {
                $errors[] = 'Votre image doit être en JPG, JPEG ou PNG';
            }
            else {
                // Relocalisation de l'image dans le dossier Images si le type est autorisé
                move_uploaded_file($_FILES['image']['tmp_name'], 'app/public/images/'.$image);
                // Préparation de la DB et Exécution
                $post = $bdd->prepare('INSERT INTO articles(title, content, image) VALUES(:title, :content, :image)');
                $post -> execute([
                    'title' => htmlentities($titre),
                    'content' => nl2br(htmlentities($contenu)),
                    'image' => htmlentities($image),
                ]);
                unset($_POST['titre']);
                unset($_POST['contenu']);
            }
        }
        return $errors;
    } 
    // ++++++++++ Fonction de modification d'un article ++++++++++ //
    // ++++++++++ Ceci récupère l'article à modifier via son ID ++++++++++ //
    function update($id){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Extraction des POST
        extract($_POST);
        // On vérifie que les champs ne soient pas vide
        // Puis on prépare la DB et on exécute
        if(!empty($titre) AND !empty($contenu)){
            $update = $bdd->prepare('UPDATE articles SET title = :title, content = :content WHERE id= :id');
            $update->execute([
                "title" => htmlentities($titre),
                "content" => nl2br(htmlentities($contenu)),
                "id" => $id
            ]);
        }
    }

    // ++++++++++ Fonction de suppression d'article ++++++++++ //
    // ++++++++++ Ceci récupère l'article à supprimer via son ID ++++++++++ //
    function delete($id){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB pour l'image
        $image = $bdd->prepare('SELECT image FROM articles WHERE id = ?');
        $image->execute([$id]);
        $image = $image->fetch()['image'];
        // On delié l'image du dossier Images
        unlink("app/public/images/".$image);
        // Préparation de la DB pour le reste de l'article
        $delete = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        // Suppression de l'article via son ID
        $delete->execute([$id]);
    }

    // ++++++++++ Fonction d'affichage des messages par ordre de création Descandant ++++++++++ //
    public function listMessages(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Préparation de la DB et exécution
        $req = $bdd->prepare ("SELECT id, nom, prenom, mail, sujet, content, created_at FROM messages ORDER BY created_at DESC");
        $req->execute(array());
        return $req;
    }

}