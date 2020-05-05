<?php
	$dbh=new PDO("mysql:host=localhost;dbname=patients",'root','');
	 $sql="SELECT * FROM patients";
	//echo $sql;
	foreach($dbh->query($sql) as $row) {
		echo "$row[nom] $row[prenom] <a href='prelevements.php?idPatient=$row[id]'>Voir prelevements</a><br />";
	}
	
	$dbh=null;

?>