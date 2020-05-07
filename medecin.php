<!DOCTYPE html>
<html lang="en">

<?php

session_start();
//Si l'utilisateur n'est pas connecté ou n'est pas médecin
if (!isset($_SESSION['estMedecin']) || $_SESSION['estMedecin'] != true) {
  header("location: connexionMedecin.php");
  die();
}

include("head.php");
?>

<body>

  <header>
    <?php include("nav.php"); ?>
    <h1>Résultats Médecin </h1>
    </br>
  </header>

  <?php

  //récupération prélèvements des patients
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
    $bdd;
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $req = $bdd->prepare('SELECT pa.Nom, pa.Prenom, pa.Email, pa.NumeroSecu, pr.Date, pr.RésultatAnalyse from patient As pa, prélèvement AS pr
    WHERE pr.idPatient=pa.id and pr.idMedecin = :id');
  $req->execute(array(
    'id' => $_SESSION['id']
  ));
  //$resultat = $req->fetch();*/
  ?>


  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>N° sécurité sociale</th>
        <th>Date</th>
        <th>Resultat</th>
      </tr>
    </thead>

    <?php

    while ($donnees = $req->fetch()) {
      echo '<tr>';
      echo '<td>' . $donnees['Nom'] . '</td>';
      echo '<td>' . $donnees['Prenom'] . '</td>';
      echo '<td>' . $donnees['Email'] . '</td>';
      echo '<td>' . $donnees['NumeroSecu'] . '</td>';
      echo '<td>' . $donnees['Date'] . '</td>';
      echo '<td>' . $donnees['RésultatAnalyse'] . '</td>';
      echo '</tr>';
    }

    ?>

  </table>

  <?php include("footer.php"); ?>

</body>