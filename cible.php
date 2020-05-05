<?php
//////////////////////// ouverture de la connexion////////////////
/*function connect_bd()
{
	$nombd = 'patient';
	$login = 'root';
	$bd = new PDO($nomserveur,$login) or die ("connexion echouee");
	mysql_select_db($nombd,$bd) or die ("La base ne peut pas etre selectionnee");
	return $bd;
	}


$Nom = addslashes($_POST["Nom"]);
$Prenom = addslashes($_POST["Prenom"]);
$Email = addslashes($_POST["Email"]);
$Password = addslashes($_POST["Password"]);

//Insertion de données
$bd=connect_bd();
if($bd<>0)
{

	

    $sql = "INSERT INTO patient(Nom,Prenom,Email,Password) VALUES ('$_POST[Nom]','$_POST[Prenom]','$_POST[Email]','$_POST[Password]')";
    $resultat= @mysql_query($sql,$bd);
    if($resultat<>FALSE)
    {
        echo 'Enregistrement reussi, merci.';
        
    }
    else
    {
        echo "Echec de l'enregistrement, desole";
    }
    deconnect_bd($bd);
} 
*/
?>