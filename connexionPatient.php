<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>

  <header>
    <?php include("nav.php"); ?>
  </header>

  <center>
    <h4 style="background-color: #FCE4EC">
      <p> Connectez-vous pour voir vos informations de santé</p>
    </h4>
  </center>


  <?php if (isset($_GET["Authentification"]) && $_GET["Authentification"] == "Error") {
    echo '<div class="alert alert-danger" role="alert">' . 'Identifiant ou mot de passe incorrect' . '</div>';
  }
  ?>


  <form method="POST" action="verificationConnexionPatient.php" style="margin: 0 auto 0 auto; width: 800px">

    <div class="form-group">
      <label for="Email">Votre Email:</label>
      <input type="email" class="form-control" id="Email" name="Email">
    </div>

    <div class="form-group">
      <label for="Password">Votre mot de passe:</label>
      <input type="password" class="form-control" id="Password" name="Password">
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Remember me
      </label>
    </div>
    <button type="submit" value="envoyer" class="btn btn-primary">Connexion</button>
  </form>

  <!--Pour ajouter un espace avant le footer-->
  <div id="blank"></div>
  
  <?php include("footer.php"); ?>

</body>