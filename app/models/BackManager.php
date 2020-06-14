<?php

namespace Project\Models;

class BackManager extends Manager{

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
        if(!isset($_FILES['file']) || $_FILES['file']['error'] > 0){
            $validation = false;
            $errors[]= 'Vous n\'avez pas mis d\'image';
        }
        if ($validation) {
            // Gestion de l'upload pour l'image
            // Et relocalisation de cette dernière dans le dossier Images
            $image = $_FILES['file']['tmp_name'];
            if (in_array($image, array('jpeg', 'jpg', 'png'))) {
                move_uploaded_file($_FILES['file']['tmp_name'], 'app/public/images/'.$image);
            } else {
                $errors[] = 'Votre image doit être en JPG, JPEG ou PNG';
            }
            // Préparation de la DB et Exécution
            $post = $bdd->prepare('INSERT INTO articles(title, content, image) VALUES(:title, :content, :image)');
            $post -> execute([
                'title' => htmlentities($titre),
                'content' => htmlentities($contenu),
                'image' => htmlentities($image),
            ]);
            unset($_POST['titre']);
            unset($_POST['contenu']);
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


}