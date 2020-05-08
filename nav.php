<div class="firstbar">
  <img src="images/qicon.png" height="120" ; width="120" ;>

  <nav>
    <ul style="width: 100%;">

      <li>
        <a href="index.php" class="bouton">Home &nbsp;&nbsp;</a>
      </li>

      <li>
        <a href="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal" class="buuton">Contact
          &nbsp;&nbsp;</a>
      </li>
      <li>
        <a href="resultatPatient.php" class="bouton">patient &nbsp;&nbsp;</a>
      </li>

      <li>
        <a href="medecin.php" class="bouton">medecin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>

      <li>
        <?php

        if (isset($_SESSION['id'])) { //si un utilisateur est connecté
          echo '<a href="deconnexion.php" class="bouton">Déconnexion</a>';
        }
        ?>
      </li>

    </ul>
  </nav>

</div>