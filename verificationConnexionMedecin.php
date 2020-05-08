<?php

// Connexion à la BD
include_once("connexionBD.php");
$bdd = connexionBD();

//  Récupération de l'utilisateur et de son pass 
$req = $bdd->prepare('SELECT id, Password from medecin WHERE Email = :email');
$req->execute(array(
    'email' => $_POST['Email']
));
$resultat = $req->fetch();

//Vérification mot de passe
if (!$resultat) {
    $_SESSION['erreurLogin'] = "Mauvais identifiant ou mot de passe !";
    header("location:connexionMedecin.php?Authentification=Error");
    die();
} else {

    if ($_POST['Password'] == $resultat['Password']) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['estMedecin'] = true;
        //$_SESSION['pseudo'] = $pseudo;
        //echo "bienvenue";
        header("location:medecin.php");
        die();
    } else {
        $_SESSION['erreurLogin'] = "Mauvais identifiant ou mot de passe !";
        header("location:connexionMedecin.php?Authentification=Error");
        die();
    }
}
