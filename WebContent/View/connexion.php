<?php
session_start();

//Vérifie si mail et mdp sont dans la base de donnée
//Si oui, redirige vers espace perso
include("../Ressources/Scripts/verification_connexion.php");


?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Connexion </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../Ressources/Stylesheets/connexion.css">
	</head>

	<body>

	<?php //barre de navigation
	include("../Ressources/Scripts/barre_navigation.php");
	?>

	<!-- --------------------------- CONNEXION ---------------------------->
	<div class="container-fluid">
	  <div class="row no-gutter">
		<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image" ></div>
		<div class="col-md-8 col-lg-6">
		  <div class="login d-flex align-items-center py-5">
			<div class="container">
			  <div class="row">
				<div class="col-md-9 col-lg-8 mx-auto">
				  <h3 class="login-heading mb-4">Se connecter</h3><br>
				  <form   method="POST" action="">
					<div class="form-label-group">
					  <input id="inputEmail" name="email" type="email" class="form-control" placeholder="email" required autofocus>
					  <label for="inputEmail">Adresse Mail</label>
					</div>

					<div class="form-label-group">
					  <input id="inputPassword" name="password" type="password" class="form-control" placeholder="password" required>
					  <label for="inputPassword">Mot de passe</label>
					</div><br>
					<button name="formconnexion" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
				  </form> <?php
			 if(isset($erreur)) {
				echo '<br><font color="red">'.$erreur."</font>";
			 }
			 ?>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>


<?php
//FOOTER
include("../Ressources/Scripts/footer.php");
?>
