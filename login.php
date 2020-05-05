        <?php
            session_start();
            if(isset($_POST["login"])) {
                if($_POST["Email"]=="toto@gmail.com" && $_POST["pwd"]=="123") {
                    $_SESSION['id']=1;
                    $_SESSION['compte']='patient';
                    header('Location:patient.php');
                }
                else { ?>
                        <div class="alert alert-danger" role="alert">
                          Login ou mot de passe incorrect.
                        </div>
                    <?php
                }
            }
        ?>
Bonjour
<th scope="col">first</th>

<?php{
	echo 'Enregistrement reussi, merci.';

	$bd=connect_bd();
if($bd<0)

    $sql = "INSERT INTO patient(Nom,Prenom,Email,Password) VALUES ('$_POST[Nom]','$_POST[Prenom]','$_POST[Email]','$_POST[Password]')";
        

    
        echo 'Enregistrement reussi, merci.';
		echo $sql;
        
    
    
    
        echo "Echec de l'enregistrement, desole";
    
    deconnect_bd($bd);
} 
?>