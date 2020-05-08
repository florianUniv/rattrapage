<!DOCTYPE html>
<html lang="en">

<?php

session_start();
//Si l'utilisateur n'est pas connecté ou n'est pas patient
if (!isset($_SESSION['estMedecin']) || $_SESSION['estMedecin'] != false) {
  header("location: connexionPatient.php");
  die();
}

include "head.php"
?>

<body>

  <header>
    <?php include "nav.php"; ?>
    <h1>Résultat Patient </h1>
    </br>
  </header>

  <?php

  //récupération data patient
  
  // Connexion à la BD
  include_once("connexionBD.php");
  $bdd = connexionBD();

  $req = $bdd->prepare('SELECT Nom, Prenom, Email, NumeroSecu from patient WHERE id = :id');
  $req->execute(array(
    'id' => $_SESSION['id']
  ));
  $resultat = $req->fetch();
  ?>

  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>N° de sécurité sociale</th>
      </tr>
    </thead>

    <tr>
      <td><?php echo $resultat['Nom']; ?></td>
      <td><?php echo $resultat['Prenom']; ?></td>
      <td><?php echo $resultat['Email']; ?></td>
      <td><?php echo $resultat['NumeroSecu']; ?></td>
    </tr>
  </table>

  <a href="prelevementPatient.php" class="btn btn-primary">Accéder à mes prélèvements</a>

  <!--Pour ajouter un espace avant le footer-->
  <div id="blank"></div>

  <?php include "footer.php"; ?>

</body>

</html>