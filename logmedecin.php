<?php
	$dbh=new PDO("mysql:host=localhost;dbname= data_patient",'root','');
	 $sql="INSERT INTO patient(Nom,Prenom,Email) VALUES('$_POST[Nom]','$_POST[Prenom]','$_POST[Email]')";
	echo $sql;
	$dbh->exec($sql);
	
	$dbh=null;

?>