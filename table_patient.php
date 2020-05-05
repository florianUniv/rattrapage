<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="insertpatient.php" type="text/php">
	 <link rel="stylesheet" href="cible2.php" type="php">

    <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="style-menu_raphael-simonnet_noel-landry.css"/>
    <title>Table patients</title>
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
</head>



<body>
	

	<!--<?php
            session_start();
            if(isset($_POST["login"])) {
                if($_POST["login"]=="toto" && $_POST["password"]=="123") {
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
-->

	<center><h2><p> Information patient</p></h2></center>


	 <form  method = "POST"  action="cible2.php" style="margin: 0 auto 0 auto; width: 800px">
  <div class="form-group">
    <label for="Nom">Votre nom:</label>
    <input type="text" class="form-control" name= "Nom" id="Nom">
  </div>
  <div class="form-group">
    <label for="Prenom">Votre prenom:</label>
    <input type="text" class="form-control" name= "Prenom" id="Prenom">
  </div>

  <div class="form-group">
    <label for="Email">Votre Email:</label>
    <input type="email" class="form-control" id="Email" name= "Email">
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
  <button type="submit" value= "envoyer" class="btn btn-primary">Submit</button>
</form> 



<!........................................................................................>
<center><h2><p> table patient</p></h2></center>
<div class="container" style="margin: 0 auto 0 auto; width: 800px">
  <center><p>Visualiser les informations dans la base de données patients</p></center>            
  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>NJILLA</td>
        <td>landry</td>
        <td>nl@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Cale</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
</body>