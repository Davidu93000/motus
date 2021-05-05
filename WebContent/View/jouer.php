<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Jouer</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Ressources/Stylesheets/jouer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<script src="../Ressources/Scripts/dico.js"></script>
				<script src="../Ressources/Scripts/jouer.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <?php //barre de navigation
    include("../Ressources/Scripts/barre_navigation.php");
    ?>

    <div class="mode mx-auto text-center mb-5">
      <div class="mode">
        <span class="six"> 6 lettres </span>
        <span class="sept"> 7 lettres </span>
        <span class="huit"> 8 lettres </span>
        <span class="neuf"> 9 lettres </span>
        <span class="dix"> 10 lettres </span>
      </div>
    </div>

	<div class="debut">
    <div class="jeu mx-auto text-center"> <!-- jeu-->
	  </div>
	  <br/>

    <button type="button" class="btn btn-outline-primary commencer mb-3" > Commencer </button>
    <div class="saisie-temps">
      <label class="label temps_modifier">Le temps est de 8 secondes voulez vous modifier ?</label>
      <br>
      <input type="number" min=8 id="modif_temps" class="modif_temps" placeholder=" Saisir un chiffre"/>
      <input id="changer" class="btn btn-outline-primary changer" type="submit" value="Changer">
    </div>

    <form name="monFormulaire" id="monFormulaire" method="post" onsubmit="return false">
      <div class="mx-auto saisie-mot mt-4 affichage">
        <label class="label"></label>
        <input class="controle" type="text" name="mot" maxlength="7" placeholder=" Saisir votre mot" autofocus>
        <input id="envoyer" class="btn btn-primary envoyer" type="submit" value="Valider"> <br>
        <p id="resultat" class="mt-2"></p>
        <br>
        <p id="timer" class="timer text-center"></p>
        <br><br>
      </div>
    </form>
	</div>

  <div style="height: 50px"></div>
</body>
		<?php
		//FOOTER
			include("../Ressources/Scripts/footer.php");
		?>
</html>
