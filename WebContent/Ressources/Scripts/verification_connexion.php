<?php
//Connexion à la BDD
include("connexion_bdd.php");


if(isset($_POST['formconnexion'])) {		//réception du formulaire
   $email = htmlspecialchars($_POST['email']);		//récupère les informations envoyés dans des variables
   $mdp_hache = md5($_POST['password']);
   if(!empty($email) AND !empty($mdp_hache)) {		//vérifie que les informations ne sont pas vides
      $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ? AND mdp = ?");			//récupère les informations de l'utilisateur avec tel mail, mdp
      $requser->execute(array($email, $mdp_hache));
      $userexist = $requser->rowCount();
      if($userexist == 1) {		//si email et mdp correspondent à un utilisateur dans la BDD 
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];		//ouvre une session et stocke dans des variables les informations concernant l'utilisateur
		 $_SESSION['nom'] = $userinfo['nom'];
		 $_SESSION['prenom'] = $userinfo['prenom'];
		 $_SESSION['email'] = $userinfo['email'];
		 $_SESSION['id_groupe'] = $userinfo['id_groupe'];
		 $_SESSION['date_naissance'] = $userinfo['date_naissance'];
		 $_SESSION['pays'] = $userinfo['pays'];
		 $_SESSION['date_inscription'] = $userinfo['date_inscription'];
		 
		 if($userinfo['id_groupe']==3){ 	//id_groupe = 3 correspond à être un admin
            header("Location: ./admin.php");	//envoie vers la page d'admin
         }else{
			header("Location: ./index.php");		
          }
		  
      } else {
         $erreur = "Mauvais email ou mot de passe !";		//affichera ce message si une erreur dans la condition
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
