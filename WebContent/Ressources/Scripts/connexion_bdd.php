<?php
try
{
	//Connexion à la base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=projet_motus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
