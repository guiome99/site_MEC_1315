<?php   // Fichier: MesParameters.php
// Valeurs par défaut des variables d'entrées
$pg=10; $id=NULL; $email=NULL; $mdp=NULL; $statut=NULL;



//Récupère les données par la méthode GET
if(isset($_GET['pg']))     $pg    =$_GET['pg'];
if(isset($_GET['id']))     $id    =$_GET['id'];
if(isset($_GET['email']))  $email =$_GET['email'];    
if(isset($_GET['mdp']))    $mdp   =$_GET['mdp'];    
if(isset($_GET['statut'])) $statut=$_GET['statut'];  
if(isset($_GET['nom'])) $nom=$_GET['nom'];   
if(isset($_GET['prenom'])) $prenom=$_GET['prenom']; 
if(isset($_GET['idPersonne'])) $id=$_GET['idPersonne']; 
if(isset($_GET['intitule'])) $idChoix=$_GET['intitule'];
if(isset($_GET['periode'])) $periode=$_GET['periode'];;
if(isset($_GET['choix'])) $idChoix=$_GET['choix'];
if(isset($_GET['nosemaine'])) $nosemaine=$_GET['nosemaine'];
if(isset($_GET['pol'])) $pol=$_GET['pol'];


?>
