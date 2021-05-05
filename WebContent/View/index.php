<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Accueil</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../Ressources/Stylesheets/index.css">
	</head>

	<body>

	<?php //barre de navigation
	include("../Ressources/Scripts/barre_navigation.php");
	?>

	<!-- ---------------------- ACCUEIL ---------------------------->
	<div class="container">
	  <div class="card border-0 shadow my-5">
		<div class="card-body p-5">
		 <h1 class="font-weight-light">Bienvenue sur Motus !</h1><br>
		 <p class="lead">Le jeu du Motus a été créé par Ralph Andrew et se fit connaître en France à travers la chaîne de télévision France 2.
			Le Motus est un jeu de recherche de mots selon un nombre fixé de lettres.
			<br><br>
			<strong>Les spécificités du jeu par défaut: </strong>
			<br><br>
			<ul>
			<li>Le jeu se déroule dans une grille de longueur 7 et de largeur 6.</li>
			<br>
			<li>Le mot possède 7 lettres. </li>
			<br>
			<li>Le nombre de tentatives possible est de 6.</li>
			<br>
			<li>Chaque tentative est assimilée à une ligne dans la grille.</li>
			<br>
			<li>Vous devez proposer un mot dans un délai de 8 secondes.</li>
			<br>
			<li>La première lettre du mot est donnée par le programme.</li>
			<br>
			<li>Selon le mot que vous aurez saisi, la grille sera actualisée.</li>
			</ul>
		 </p>
		</div>
		</div>
	  </div>
	<div class="container">
		<div class="card border-0 shadow my-5">
		<div class="card-body p-5">
			<!-- règles du jeu -->
			<h4>Règles du jeu</h4>

				<ul>
				<br>
				<li>Si le mot entré correspond au mot à trouver, alors vous gagnez.</li>
				<br>
				<li>Si le mot entré possède des lettres correspondant au mot à trouver et qu’ils sont placés correctement, alors les lettres sont coloriées en rouge.</li>
				<br>
				<li>Si le mot entré possède des lettres que le mot à trouver possède, mais qu’ils ne sont pas au bon endroit, alors les lettres sont entourées en jaune.</li>
				<br>
				<li>Si le mot entré n’existe pas ou contient des caractères non autorisés, un message sera affiché.</li>
				<br>
				<li>Si vous n'avez pas trouvé le mot à la fin des tentatives possibles, on vous donnera la bonne réponse.</li>

				</ul>
			<br><br>
		 <h4>Amusez vous bien ! </h4>

		 <div style="height: 10px"></div>

		</div>
	  </div>
	</div>


<?php
//FOOTER
include("../Ressources/Scripts/footer.php");
?>
