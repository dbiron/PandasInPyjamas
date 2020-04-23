<?php

namespace Project\Models;

class BackManager extends Manager{

    function post_article(){
        $bdd = $this -> dbConnect();
        
    }
    

}