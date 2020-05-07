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
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
    $bdd;
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

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

  <a href="prelevementPatient.php" class="bouton">Accéder à mes prélèvements</a>

  <?php include "footer.php"; ?>

</body>

</html>