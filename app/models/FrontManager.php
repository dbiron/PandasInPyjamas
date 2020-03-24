<?php

namespace Project\Models;

class FrontManager extends Manager{
    public function viewFront(){
        $bdd = $this -> dbConnect();
        $req = $bdd->prepare ("SELECT id, title, content FROM articles");
        $req->execute(array());
        $req = $req->fetch()[1];
        return $req;
    }
}