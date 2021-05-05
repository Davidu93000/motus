console.log("Ce programme JS vient d'être chargé");
$(document).ready(function() {

  console.log("Le document est pret");
  var dico = dico7;
  var mot = tirage(dico);    // Mot aléatoire choisi dans le dico7
  var tab_mot = [];
  var tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur
  var trouver_reponse = false; // permet de savoir si la réponse est trouve ou non
  var partie_commencer = false // permet de savoir le bouton commencer a été cliqué ou non

  for (var i=0; i<mot.length; i++){
    tab_mot[i] = mot.substr(i,1);
  }

  $('.commencer').click(function(){     // quand on clique sur le bouton commencer
    $('#envoyer').val('Valider');       // renommer valider
    $('.commencer').hide();             // on cache le bouton Commencer
    $('.saisie-temps').hide();          // on cache la zone pour changer le temps
	  $('.affichage').show();            // on affiche la zone de saisie de l'utilisateur
    $('.controle').show();
    $(".controle").focus();                               // focus sur la saisie
	  partie_commencer = true;
	  timer();                           // on lance le timer
	});

  $(".sept").addClass('selection');

  var tab_jaune = [0,0,0,0,0,0,0,0,0,0];
  console.log(tab_mot);
  console.log(mot);

  var tentative = 0;
  var tentative_max = 5;

  // création de la grille
  function creer_grille(){
    tentative = 0;                                        // tentative remis à 0
    $(".controle").val("");                               // saisie remis à 0
    $(".controle").focus();                               // focus sur la saisie
    $(".controle").attr('maxlength',mot.length);               // saisie maximum nb lettres du mot recherché
    var grille="<table class=\"grille\">";              // ouverture table
    for (var i=0; i<=tentative_max; i++){             // boucle ligne
      grille +="<tr>";                                 // ouverture ligne
      for (var j=0; j<mot.length; j++){              // boucle colonne
        grille += "<td class=L"+i+"C"+j+"> </td>";     //ajout de chaque case
      }
      grille += "</tr>";                               // fermeture ligne
    }
    grille += "</table>";                              // fermeture table

    $(".jeu").html(grille);                            // ajoute la grille dans la div jeu
    $(".grille").css('background','#1E90FF');          // grille couleur bleu
    $(".grille").css('color','white');
    $(".L0C0").text(tab_mot[0]);                       // affiche la première lettre du mot recherché

    // bouton commencer
    $('.commencer').show();
    $('.affichage').hide();
    partie_commencer=false;

  }
  creer_grille();         // on creer la grille dès le debut, appelle de la fonction

  $(".six").click(function(){                   // si on clique sur 6 lettres on change le dictionnaire, le mot choisi, le nombre de tentative, pareil pour 7,8,9,10
    dico = dico6;
    mot = tirage(dico);
    tentative_max = 4;
	  affichage_jeu(mot);
    tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur
    $(".six").addClass('selection');
    $(".sept").removeClass('selection');
    $(".huit").removeClass('selection');
    $(".neuf").removeClass('selection');
    $(".dix").removeClass('selection');

  });

  $(".sept").click(function(){
    dico = dico7;
    mot = tirage(dico);
    tentative_max = 5;
    affichage_jeu(mot);
    tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur
    $(".sept").addClass('selection');
    $(".six").removeClass('selection');
    $(".huit").removeClass('selection');
    $(".neuf").removeClass('selection');
    $(".dix").removeClass('selection');
  });

  $(".huit").click(function(){
    dico = dico8;
    mot = tirage(dico);
    tentative_max = 6;
	  affichage_jeu(mot);
    tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur

    $(".huit").addClass('selection');
    $(".six").removeClass('selection');
    $(".sept").removeClass('selection');
    $(".neuf").removeClass('selection');
    $(".dix").removeClass('selection');

  });

  $(".neuf").click(function(){
    dico = dico9;
    mot = tirage(dico);
    tentative_max = 7;
	  affichage_jeu(mot);
    tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur
    $(".neuf").addClass('selection');
    $(".six").removeClass('selection');
    $(".sept").removeClass('selection');
    $(".huit").removeClass('selection');
    $(".dix").removeClass('selection');

  });

  $(".dix").click(function(){
    dico = dico10;
    mot = tirage(dico);
    tentative_max = 8;
    affichage_jeu(mot);
    tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur

    $(".dix").addClass('selection');
    $(".six").removeClass('selection');
    $(".sept").removeClass('selection');
    $(".huit").removeClass('selection');
    $(".neuf").removeClass('selection');

  });

  function affichage_jeu(mot){
	for (var i=0; i<mot.length; i++){
		tab_mot[i] = mot.substr(i,1);
	}
	tab_lettres = [];
	$("#resultat").hide();
    $('.changer').show();
    $('.saisie-temps').show();
    partie_commencer=false;
	creer_grille();
	console.log(mot);
	mode_changer = 1;
	temps = 8;
	$('.temps_modifier').empty().append("Le temps est de 8 secondes voulez vous modifier ?");
	}

  $("#envoyer").click(function(){                       // quand l'utilisateur envoie une saisie
    var saisie = $(".controle").val().toUpperCase();    // on stocke la saisie en MAJUSCULE dans la variable saisie


    // le mot entré est trop court
    if(saisie.length < mot.length){
      $("#resultat").text("Saisie trop courte !");
      $("#resultat").show();
      setTimeout(function(){
        $("#resultat").hide();
      },2000);
    }

    // si le bouton est rejouer
    if($("#envoyer").val() == "Rejouer"){
      tentative = 0;  // remise à 0 de tentative
      $('.controle').val("");
      $("#envoyer").val("Valider"); // le bouton redevient Valider
      $('.saisie-temps').show();
      $("#resultat").css("color","red");
      $("#resultat").hide();
      mot = tirage(dico); // on rejoue, donc on tire un nouveau mot
      /* correction */
      tab_lettres = [mot[0],' ',' ',' ',' ',' ',' ']; // tableau affichant les lettres déja trouvé par l'utilisateur
      /* correction */
      console.log(mot);
      for (var i=0; i<mot.length; i++){
        tab_mot[i] = mot.substr(i,1);
      }
      creer_grille();
      timer();

    }


    if(saisie.length == mot.length){                     // on compare si la longueur du mot saisie et le nombre de lettre du recherché correspond
      if(symbole(saisie)){                              // on vérifie si la saisie ne contient pas de caractères spéciaux ou de chiffre
        if(recherche(dico,saisie)){                    // on vérifie si la saisie est bien un mot dans le dictionnaire
          var tab_saisie = [];
          for (var i=0; i<mot.length; i++){
            tab_saisie[i] = saisie.substr(i,1);         // on stocke les lettres du mot saisie dans un tableau
          }

          // vérification lettre contenu dans le mot recherché à la bonne place
          for(var i=0; i<mot.length;i++){               // boucle longueur mot
            if(tab_mot[i] == tab_saisie[i]){            // si la lettre correspond
              tab_jaune[i] = 1;                         // et on met la valeur de tab_jaune à 1
              tab_lettres[i] = tab_mot[i];              // on a trouvé une lettre
              $('.L'+tentative+'C'+i).css('background','red');  // on met le fond rouge pour dire que c'est une lettre à la bonne case
            }
          }

          // vérification lettre contenu dans le mot recherché mais pas à la bonne place
          for(var i=0; i<mot.length; i++){              // boucle longueur mot
            if(tab_jaune[i] != 1){                      // si tab_jaune != 1
              for(var j=0; j<mot.length; j++){          // boucle longueur mot
                if((tab_mot[j] == tab_saisie[i]) && (tab_jaune[j] == 0)){   // si on trouve la même lettre dans le mot recherché que celui saisie et que celui-ci n'est pas à la bonne place
                  $('.L'+tentative+'C'+i).addClass('rounded-circle bg-warning');       // on entoure la lettre en jaune
                  j= mot.length;                                            // on quitte la 2ème boucle
                }
              }
            }
          }

          // affichage saisie joueur
          for(var i=0; i<mot.length; i++){                              // boucle longueur mot
            $('.L'+tentative+'C'+i).text(tab_saisie[i]);                // affichage mot saisie
            $('.L'+tentative+'C'+i).css('color','white');               // affichage en couleur blanc
            tab_jaune[i] = 0;                                           // réinitialise tab_jaune pour une nouvelle saisie
            compteur = temps;

            if(tentative_max-tentative != 0){
              $("#resultat").text("Il vous reste " + (tentative_max-tentative) + " tentative(s).");
              $("#resultat").show();
            }
          }

          // si on a trouvé le mot
          if(saisie == mot && tentative < tentative_max+1){
            $("#resultat").css('color','green');
            $("#resultat").text("Bravo vous avez trouvé le mot !");
            $("#resultat").show();
            $("#envoyer").val("Rejouer"); // on propose de rejouer
            $(".controle").hide();
            $('.controle').val("");       // on reset la saisie
            tentative = tentative_max;
			      trouver_reponse = true;
            tab_lettres = []; // remise à 0 des lettres trouvé
          }

          // on a pas trouvé le mot
          else{
            if((tentative == tentative_max) && (mot != saisie)){
              $("#resultat").text("Dommage, le mot était : " + mot);  // on affiche la bonne réponse
              $(".controle").hide();
              $("#envoyer").val("Rejouer"); // on propose de rejouer
              $('.controle').val("");       // on reset la saisie
              $("#resultat").show();
              tab_lettres = []; // remise à 0 des lettres trouvé
            }
            // on affiche les lettres déjà trouvé par l'utilisateur à la ligne suivante (elle sera remplaçé par le mot saisie par celui-ci)
            for(var i=0; i<mot.length; i++){
              $('.L'+(tentative+1)+'C'+i).text(tab_lettres[i]);
            }
          }
          tentative++;
          $(".controle").focus();
          $(".controle").val("");
        }
        // le mot n'appartient pas au dictionnaire
        else {
          $("#resultat").text("Ce mot n'appartient pas au dictionnaire.");
          $("#resultat").show();
          setTimeout(function(){
            $("#resultat").hide();
          },2000);
        }
      }
      else{
        $("#resultat").text("Contient un caractère spécial ou un chiffre.");
        $("#resultat").show();
        setTimeout(function(){
          $("#resultat").hide();
        },2000);
      }
    }

  });

  var temps = 8;
  var compteur = temps;
  var x;
  var envoyer_click = 0; // Savoir si le bouton envoyer a été cliqué ou non
  var mode_changer = 0; // Savoir si on a changer de mode ou non

  function timer() {
    if(partie_commencer == true){
  		if(trouver_reponse){ // la réponse a été trouvé
  			$('#timer').empty();
  			trouver_reponse = false;
  		}
  		else if(tentative == tentative_max+1) { // On verifie si la grille n'est pas complete
  		  $('#timer').empty();
  		  $("#resultat").text("Dommage, le mot était : " + mot);  // on affiche la bonne réponse
        $('.controle').hide();
  		  $("#envoyer").val("Rejouer"); // on propose de rejouer
        $('.controle').val("");       // on reset la saisie
  		  $("#resultat").show();
  		  tab_lettres = []; // remise à 0 des lettres trouvé
  		}
  		else if(envoyer_click == 1 || mode_changer == 1){ // Si u il y a une modification du mode on recommence le temps
  			clearTimeout(x); // stopper le temps
  			compteur = temps;
  			comteur_diminue();
  			mode_changer = 0;
  			envoyer_click = 0;
  		}
  		else if(compteur>0 && envoyer_click == 0)
  			comteur_diminue();
  		else // Le temps est arrivé a 0 seconde
  		{
  			// Si aucun mot est proposé aprés le temps défini on met les lettres précédentes
  			for(var i=0; i<mot.length; i++){
  				$('.L'+(tentative+1)+'C'+i).text(tab_lettres[i]);
  			}
  			clearTimeout(x);
  			if(tentative_max-tentative == 0){
          $("#resultat").text("Dommage, le mot était : " + mot);  // on affiche la bonne réponse
          $(".controle").hide();
        }
  			else
  				$("#resultat").text("Vous venez de perdre une tentative, il vous en reste " + (tentative_max-tentative) + ".");

  			$("#resultat").show();

  			tentative++; // On augmente la tentative car une réponse n'a pas été donnée dans le temps défini
  			compteur = temps; // Le temps recommence
  			comteur_diminue();
  		}
    }
  }

	// Eviter repetition lorsque le temps diminue
	function comteur_diminue() { // Le temps diminue tant que le bouton envoyer n'est pas clique
		$('#timer').empty().append("Vous avez <strong>" + compteur + "</strong> secondes pour proposer un mot.");
		compteur--;
		x = setTimeout(timer,1000);
	}


	// Modifier le temps
	$('#changer').click(function(){
		temps = $('.modif_temps').val();    // modification valeur temps
		if(temps < 8){
			$('.temps_modifier').empty().append("Veuillez saisir un temps supérieur à 8 secondes, sinon vous n'aurez pas le temps de saisir correctement votre mot.");
			temps = 8;
		}
		else{
			compteur = temps;
			console.log(compteur);
			$('#modif_temps').val("");        // on reset la valeur de l'input modif_temps
			timer(); 					// on lance le timer
			$('.temps_modifier').empty().append('Le temps est de '+compteur+ ' secondes.');
		}
	});

  console.log("La mise en place est finie. En attente d'événements...");
});
