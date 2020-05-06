<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>



<body>
  
  <header>
    <?php include("nav.php"); ?>
    <h1>Résultat Patient </h1>
    </br>
  </header>

	<!--<?php
            session_start();
            if(isset($_POST["login"])) {
                if($_POST["login"]=="toto" && $_POST["password"]=="123") {
                    $_SESSION['id']=1;
                    $_SESSION['compte']='patient';
                    header('Location:data_patient.php');
                }
                else { ?>
                        <div class="alert alert-danger" role="alert">
                          Login ou mot de passe incorrect.
                        </div>
                    <?php
                }
            }
        ?>
-->



<table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
		<th>Mot de passe</th>
      </tr>
    </thead>
    
      <tr>
        <td>NJILLA NJONKEP</td>
        <td>Noel landry</td>
        <td>nnjonkep@gmail.com</td>
		<td>innovation</td>
      </tr>
      <tr>
        <td>NTSAGUIM NGUIMEZAP</td>
        <td>Cindy Carelle</td>
        <td>cindycarelle@yncrea.fr</td>
		<td>mabellemarainne</td>
      </tr>
      <tr>
        <td>WAMBO PIAME</td>
        <td>Yvan-hermann</td>
        <td>wamboyvan@gmail.com</td>
		<td>lepiams</td>
      </tr>
	   <tr>
        <td>NEDEYE KHADY</td>
        <td>Diouf</td>
        <td>nkdiouf@icloud.cOM</td>
		<td>llabosseuse</td>
      </tr>
	   <tr>
        <td>Rafa</td>
        <td>SIM</td>
        <td>rafasim@hotmail.fr</td>
		<td>toto</td>
      </tr>
    
  </table>

    <?php include("footer.php"); ?>

  </body>
</html>