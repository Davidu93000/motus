<?php // peut améliorer
include("connexion_bdd.php");
if(isset($_SESSION['id']) AND $_SESSION['id_groupe'] == 3) {		//vérifie si bien un admin

	$reqjoueur = $bdd->prepare("SELECT * FROM utilisateurs WHERE id_groupe=2");		//récupère liste de tous les joueurs
	$reqjoueur->execute();
	
	$liste_joueur = $reqjoueur;
	
	if(isset($_GET['supprimer_joueur']) AND !empty($_GET['supprimer_joueur'])) {	//supprime si clique sur supprimer
      $supprime = (int) $_GET['supprimer_joueur'];								
      $reqsupp = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');		//supprime par rapport à l'id
      $reqsupp->execute(array($supprime));
   }
	
	
	
	
	
	
	
	
	
	
}









/*
   if(isset($_POST['supprimer_joueur']) AND !empty($_POST['supprimer_joueur'])) {
      $supprime = (int) $_SESSION['supprime'];
      $req = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');
      $req->execute(array($supprime));
   }
}
$membres = $bdd->query('SELECT * FROM membres ORDER BY id DESC LIMIT 0,5');
$commentaires = $bdd->query('SELECT * FROM commentaires ORDER BY id DESC LIMIT 0,5');
*/
?>