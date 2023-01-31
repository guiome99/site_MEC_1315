<?PHP   
session_start();                     
//error_reporting(0);				 // Décommentez pour ne plus afficher les messages d'erreurs
								 // Fichier: index.php
include("MaBD.php");             // Accès à la BD PROF
include("MesParametres.php");    // Paramètres
include("MesDeclarations.php");  // Déclarations
include("MesFonctions.php");  	 // Fonctions

$linkid = connect();             // Établir la connexion (USE PROF;)
echo $ouverture;                 // Début du XHTML
bouton_session();            
echo $entete;
if    ($pg==10) echo $accueil;   // Accueil
elseif($pg==20) disponibilité();  // Sélection de l'usager
elseif($pg==21) affiche_choix(); // Affiche la sélection $id
elseif($pg==22) echo 	$activites_1,affiche_dispo('Poste de jeux'),
						$activites_2, affiche_dispo('Salle de jeux'),
						$activites_3,affiche_dispo('Nuit blanche'),
						$activites_4,affiche_dispo('Salle VIP'),
						$activites_5,affiche_dispo('R&eacute;alit&eacute; virtuelle'),
						$activites_6,affiche_dispo('Cours de jeux vid&eacute;os'),
						$activites_7,affiche_dispo('Initiation aux jeux vid&eacute;os'),
						$activites_8,affiche_dispo('Tournoi'),
						$activites_9,affiche_dispo('Acces illimit&eacute; journali&egrave;re'),
						$activites_10,affiche_dispo('Occasion sp&eacute;ciale') ;// Affiche les activités 
elseif($pg==23) disponibilité1();// Récupereles disponibilités
elseif($pg==24) disponibilité2();// Affiche les activitéd
elseif($pg==40) nouvel_usager(NULL); // Formulaire du nouvel usager
elseif($pg==41) valide_usager(); // Validation du nouvel usager
elseif($pg==50) echo $regle123;  // Règles de fonctionnement
elseif($pg==30) Connection(NULL);
elseif($pg==32)	reservation();// permet de faire une reservation
elseif($pg==33) selectionperiode();//choix de periode et de semaine
elseif($pg==34) finaliser();//Envoie de la reservation dans la base de données
elseif($pg==35) Recuperation_mdp_oublié();// recuperation du mot de passe
elseif($pg==36) recuperation_mdp_envoye();//envoie confirmation et le mot de pase
elseif($pg==100) test_login(); // fonctin connexion
elseif($pg==101) logout();		// fonction deconnexion
echo $fermeture;                 // Fin du XHTML
?>


