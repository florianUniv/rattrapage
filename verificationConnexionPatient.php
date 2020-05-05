<?php

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
        $bdd;
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, Password from patient WHERE Email = :email');
    $req->execute (array(
        'email' => $_POST['Email']));
    $resultat = $req->fetch();
    
    //Vérification mot de passe
    if (!$resultat){
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else{

        if ($_POST['Password'] == $resultat['Password']) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            //$_SESSION['pseudo'] = $pseudo;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }


    
?>