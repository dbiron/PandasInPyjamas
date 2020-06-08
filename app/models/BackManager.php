<?php

namespace Project\Models;

class BackManager extends Manager{

    // ++++++++++ Fonction de création d'un nouvel article ++++++++++ //    
    function post_article(){
        // Connexion à la DB
        $bdd = $this -> dbConnect();
        // Extraction des POST
        extract($_POST);
        // Gestion de l'upload pour l'image 
        // Et relocalisation de cette dernière dans le dossier Images
        $image = basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], 'app/public/images/'.$image);
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