<?php

//Fonction pour se connecter à la base de données
function connexionBD(){
    try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}

?>