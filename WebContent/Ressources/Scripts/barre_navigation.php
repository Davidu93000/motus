<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
		  <div class="container">
			<a class="navbar-brand" href="./index.php">Motus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<?php
				if(isset($_SESSION['id'])AND $_SESSION['id'] > 0 AND $_SESSION['id_groupe'] ==2){ //si c'est un joueur inscrit
				?>
				<li class="nav-item">
				  <a class="nav-link" href="./jouer.php">Jouer</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="./classement.php">Classement</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="./historique.php">Historique</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link" href="../Ressources/Scripts/deconnexion.php">Se déconnecter</a>
				</li>
				<?php
				}else if(isset($_SESSION['id'])AND $_SESSION['id'] > 0 AND $_SESSION['id_groupe'] ==3){  //si c'est un admin
				?>
				<li class="nav-item">
				  <a class="nav-link" href="./admin.php">Admin</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link" href="../Ressources/Scripts/deconnexion.php">Se déconnecter</a>
				</li>
				<?php
				}else{		//si pas inscrit
				?>
				<li class="nav-item">
				  <a class="nav-link" href="./jouer.php">Jouer</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="./connexion.php">Se connecter</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link" href="./inscription.php">S'inscrire</a>
				</li>
				<?php
				}
				?>
			  </ul>
			</div>
		  </div>
		</nav>
