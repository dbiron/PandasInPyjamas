<?php

namespace Project\Models;

class FrontManager extends Manager{
    public function viewArticles(){

        $bdd = $this -> dbConnect();
        $req = $bdd->prepare ("SELECT id, title, content, image, created_at FROM articles");
        $req->execute(array());
        return $req;
    }

    public function viewArticle($id){

        $bdd = $this -> dbConnect();
        $req = $bdd->prepare ("SELECT id, title, content, image, created_at FROM articles WHERE id=?");
        $req->execute(array($id));
        return $req->fetch();
    }
}

