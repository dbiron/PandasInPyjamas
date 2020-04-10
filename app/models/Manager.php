<?php

namespace Project\Models;

class Manager{
    // Connexion à la BDD
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=pip;charset=utf8', 'root', '');
            return $bdd;
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getmessage());
        }
    }
}