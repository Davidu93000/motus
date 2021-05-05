<?php	//Connexion à la BDD
include("connexion_bdd.php");


//Vérification du formulaire lors de l'inscription

if(isset($_POST['forminscription']))		//réception du formulaire
{
	$id_groupe=2;
	$nom = htmlspecialchars($_POST['lastName']);			//Enregistre les informations envoyées
	$prenom = htmlspecialchars($_POST['firstName']);		//En fesant attention d'appliquer htmlspecialchars
	$email = htmlspecialchars($_POST['email']);

	$mdp_hache = md5($_POST['password']);

	$confirme_mdp = $_POST['confirmPassword'];
	$date_naissance = htmlspecialchars($_POST['birthDate']);
	$pays = htmlspecialchars($_POST['pays']);
	$date_inscription = date("Y-m-d");

	
	//Vérification que tout a bien été remplis
	
	if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['confirmPassword']) AND !empty($_POST['birthDate']) AND !empty($_POST['pays'])) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$reqmail = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ?");		//récupère tous les mails de la base de donnée pour pouvoir comparer à celui envoyé
               $reqmail->execute(array($email));
               $mailexist = $reqmail->rowCount();
			    if($mailexist == 0) {		//si mail n'existe pas dans la bdd
                  if($_POST['password'] == $_POST['confirmPassword']) {				//compare les mots de passe entre eux qu'ils sont identiques.
					  
					// On insère les informations dans la BDD:
					$req = $bdd->prepare('INSERT INTO utilisateurs(id_groupe,nom, prenom, email, mdp, date_naissance, pays,date_inscription) VALUES(:id_groupe,:nom, :prenom, :email, :mdp_hache, :date_naissance, :pays, :date_inscription)');

					$req->bindValue(':id_groupe',$id_groupe,PDO::PARAM_INT);
					$req->bindValue(':nom',$nom,PDO::PARAM_STR);
					$req->bindValue(':prenom',$prenom,PDO::PARAM_STR);
					$req->bindValue(':email',$email,PDO::PARAM_STR);
					$req->bindValue(':mdp_hache',$mdp_hache,PDO::PARAM_STR);
					$req->bindValue(':date_naissance',$date_naissance,PDO::PARAM_STR);
					$req->bindValue(':pays',$pays,PDO::PARAM_STR);
					$req->bindValue(':date_inscription',$date_inscription,PDO::PARAM_STR);

					$req->execute();				//insère dans la base de donnée
				
					$erreur='Félicitations '.ucfirst($prenom." ".$nom).', votre compte est maintenant actif.<br><br> Vous allez bientôt être redirigé vers la page de connexion.'.header ("Refresh: 5;URL='./connexion.php'");
	
				  }else {
                     $erreur = "Vos mots de passes ne correspondent pas !";	//affichera ce message si une erreur dans la condition
                  }
				}else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
			}else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
	}else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>