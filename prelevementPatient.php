<!DOCTYPE html>
<html lang="en">

<?php 

    session_start();
    //Si l'utilisateur n'est pas connecté ou n'est pas patient
    if (!isset($_SESSION['estMedecin']) || $_SESSION['estMedecin'] != false){
        header("location: connexionPatient.php");
        die();
    }

    include("head.php"); 
?>

<body>

    <header>
        <?php include("nav.php"); ?>
        <h1>Prélèvements Patient </h1>
    </br>
    </header>

    <?php
        
        //récupération prélèvements patient
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
            $bdd;
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('SELECT m.Nom, m.Email, pr.Date, pr.RésultatAnalyse from medecin As m, prélèvement AS pr
        WHERE pr.idMedecin=m.id and pr.idPatient = :id');
        $req->execute (array(
        'id' => $_SESSION['id']));

    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nom Médecin</th>
                <th>Email</th>
                <th>Date</th>
                <th>Resultat</th>
            </tr>
        </thead>

    <?php
    
    while ($donnees = $req->fetch()){
        echo '<tr>';
        echo '<td>'.$donnees['Nom'].'</td>';
        echo '<td>'.$donnees['Email'].'</td>';
        echo '<td>'.$donnees['Date'].'</td>';
        echo '<td>'.$donnees['RésultatAnalyse'].'</td>';
        echo '</tr>';
      }

    ?>

    </table>

    <?php include("footer.php"); ?>

</body>