<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classement</title>
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
				<h4>Classement</h4>
			</caption>
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Score</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		
<?php
//FOOTER
include("../Ressources/Scripts/footer.php");
?>

