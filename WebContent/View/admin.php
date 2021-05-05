<?php
session_start();
include("../Ressources/Scripts/administration.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Administration</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../Ressources/Stylesheets/classement.css">
	</head>

	<body>

		<?php //barre de navigation
		include("../Ressources/Scripts/barre_navigation.php");
		?>
	
		<table class="table table-bordered table-striped table-sm">
			<caption>
					<h4>Administration</h4>
			</caption>
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Nom</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

					<?php while($m = $liste_joueur->fetch()) { ?>
					<tr><td><?= $m['id'] ?></td><td><?= $m['nom'] ?></td><td><a href="admin.php?supprimer_joueur=<?= $m['id'] ?>">Supprimer</a></td></tr>
					<?php } ?>
				
			</tbody>
		</table>
		</br> </br>
		



	</body>
</html>
