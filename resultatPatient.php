<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>

  <header>
    <?php include("nav.php"); ?>
    <h1>Résultat Patient </h1>
    </br>
  </header>

  <?php
    session_start();
    if (!isset($_SESSION['id'])){
      header("location: connexionPatient.php");
      die();
    }

    //récupération data patient
    try{
      $bdd = new PDO('mysql:host=localhost;dbname=bd1;charset=utf8', 'root', '');
      $bdd;
    }
    catch (Exception $e){
      die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('SELECT Nom, Prenom, Email, NumeroSecu from patient WHERE id = :id');
    $req->execute (array(
        'id' => $_SESSION['id']));
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

  <?php include("footer.php"); ?>

  </body>
</html>
