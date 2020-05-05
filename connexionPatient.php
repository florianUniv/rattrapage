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

    <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="style-menu_raphael-simonnet_noel-landry.css"/>
    <title>Connexion patient</title>
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
</head>

<body>
	

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

	<center><h4 style="background-color: #FCE4EC"><p> Connectez-vous pour voir vos informations de santé</p></h4></center>


	 <form  method = "POST"  action="verificationConnexionPatient.php" style="margin: 0 auto 0 auto; width: 800px">
  
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


</body>