<?php

namespace Project\Models;

class Manager{
    // Connexion à la BDD
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_192d244b1257d91;charset=utf8', 'bae38272a5913d', '7c5b0fae');
            return $bdd;
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getmessage());
        }
    }
}