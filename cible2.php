<?php

$dbh = new PDO("mysql:host=localhost;dbname=data_patient", 'root', '');

$sql = "INSERT INTO patient(Nom,Prenom,Email,Password) VALUES ('$_POST[Nom]','$_POST[Prenom]','$_POST[Email]','$_POST[Password]')";

echo 'Enregistrement reussi, merci.';

$dbh -> exec($sql);

$dbh = null; 

?>