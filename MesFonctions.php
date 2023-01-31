<?php   // Fichier: MesFonctions.php

// Page 20 : Choix d'un usager par son email -> id
function disponibilité(){

   global $db, $link,$idChoix,$nosemaine,$intitule;
   $sql1 = "SELECT * FROM Choix WHERE ref_tsxxx=207";
   $table = send_sql($sql1);      // Envoi la requête à cogito  
   $n = mysqli_num_rows($table);  // Récupère le nombre de lignes de la réponse
   echo"
   <br />
   <br />
   <br />
   <h3 class=enreg> Disponibilités </h3>   <br />
   
   <center><h3>Veuillez choisir une activité</h3><br/></center>   
   <form action=\"index.php\" method=\"GET\">
   <input type=\"hidden\" name=\"pg\" value=\"23\"/>
   <center><select name=\"intitule\"> </form>";   
   for($i=1;$i<=$n;$i++)
     {
     $r = mysqli_fetch_object($table);
     $idChoix=$r->idChoix;                
     $intitule=$r->intitule;           
     echo "<option value=\"$idChoix\">$intitule</option><br />
          ";
     }
   echo '</select>';
  echo"
  <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"23\">Voir Disponibilités</button>"
  ;
  ;
   }
   
// Page 21 : Récupère et affiche le email de l'usager id
function affiche_choix(){
   global $db, $link;
   $email=$_SESSION['email'];
   $prenom=$_SESSION['prenom'];
   $nom=$_SESSION['nom'];
   $mdp=$_SESSION['mdp'];
   $id=$_SESSION['idPersonne'];
   
   $sql = "SELECT * FROM Personnes, Reservations, Choix WHERE idChoix=ref_Choix  AND idPersonne=ref_Personne AND idPersonne=".$id." AND tsxxx=207 ORDER BY noSemaine";
   $table = send_sql($sql);      // Envoi la requête à cogito
   $n = mysqli_num_rows($table);  // Récupère le nombre de lignes de la réponse
   echo "<br /><h3 class=enreg>Mes réservations</h3><br />";

    if($n==0)
	  {
		  echo'
        <form action="index.php" method=\"GET\">
        <h3>Vous n\'avez aucune reservations </h3>
        <br/>
        <button type="submit" name="pg" class="boite-input" value="32">Faire une réservation </button>
        </form>';

     }
     else  
	  {
      echo"<center><h1 class=bonjour> Voici vos reservations </h1></center></br></br>
      <center>
      <table class=reservation>
      <tr><th class=reservation>Activité</th><th class=reservation>Semaine</th><th class=reservation>Jour</th></tr>";
      $jours = array(
          1 => "mercredi",
          2 => "jeudi",
          3 => "vendredi",
          4 => "samedi",
          5 => "dimanche");
       $heure = array(
          0 => "6:00",
          1 => "9:00",
          2 => "12:00",
          3 => "15:00",
          4 => "18:00",
          5 => "21:00",
          6 => "24:00");
      for($i=1;$i<=$n;$i++)
       {
         $r = mysqli_fetch_object($table); // On récupère une ligne
         $intitule=$r->intitule;           // On récupère la description
         $noSemaine=$r->noSemaine;
         $noperiode=$r->noperiode;
         $j=(string)$noperiode;
         $j=$j[0];
         $h=(string)$noperiode;
         $h=$h[1];
         echo "<tr><td class=reservation>$intitule</td><td class=reservation>$noSemaine</td><td class=reservation>  le $jours[$j] à $heure[$h]   </td></tr>";
       }
    echo'</table></center>';	
      }
}
   
//page 23 : Montre les plages disponibles à l'usager
 function disponibilité1() {
	global $db,$link, $nosemaine,$idChoix,$intitule ;
   echo'
   <br />
   <br />
   <br />
   <h3 class=enreg> Disponibilités </h3> <br />';


   echo'<form action="" method=\"GET\">
   <input type=\'hidden\' name=\'intitule\' value='.$idChoix.' />
   <input type="hidden" name="pg" value="24"/> ';

   semaine ();

   echo'
   <button type=\'submit\'   class=\'boite-input\'>Voir Disponibilités</button>
   <button type=\'submit\' name=\'pg\' class=\'boite-input\' value=\'20\'>Autre activité</button> ';

	echo"
   <center>
	<table class=reservation>
	<caption>Voici les disponibilités de la semaine 1 </caption></br></br>
	<tr><td class=reservation></td><th class=reservation>Mercredi</th><th class=reservation>Jeudi</th><th class=reservation>Vendredi</th><th class=reservation>Samedi</th><th class=reservation>Dimanche</th></tr>";
	$he = 6;
   for ($j=-1;$j<=5; $j++) {
      echo "<tr><td class=reservation>$he:00</td>";
      $he=$he+3;
      $p=10+$j;
         for ($i=$p;$i<=58;$i+=10){
            $k = ($i+1);
           ;
		
				$sql= "SELECT * FROM Personnes, Reservations, Choix WHERE tsxxx=\"207\" AND idPersonne = ref_Personne AND idChoix = ref_Choix AND noperiode='$k' AND noSemaine=1 AND idChoix='$idChoix'" ;
				$table = send_sql($sql);
				$n = mysqli_num_rows($table);
				if ($n!=0){
				
					echo "<td class=reservation  bgcolor=#8b0000>réservé</td>";//mettre une classe pour changer la couleur en rouge
				}
				else
				{
				echo "<td class=reservation  '>disponible</td>";
				}	
     
			}
		echo "</tr>";
		}
		echo "</tr></table></form>";
   }

  //page24 
   function disponibilité2() {
      global $db,$link, $nosemaine, $idChoix;
      echo"
      </br></br></br><h3 class=enreg >Disponibilités</h3>";
      echo'
      <form action="index.php?" method="GET">
      <input type=\'hidden\' name=\'intitule\' value='.$idChoix.'   />
      ';
      semaine ();
      echo "
      <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"24\">Autre semaine</button> 
      <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"20\">Autre activité</button> </br></br>

      <center>  
      <table class=reservation>
      <caption>Voici les disponibilités de la semaine $nosemaine  </caption></br>
      <tr><td class=reservation></td><th class=reservation>Mercredi</th><th class=reservation>Jeudi</th><th class=reservation>Vendredi</th><th class=reservation>Samedi</th><th class=reservation>Dimanche</th></tr>";
      $he = 6;
      for ($j=-1;$j<=5; $j++) {
         echo "<tr><td class=reservation>$he:00</td>";
         $he=$he+3;
         $p=10+$j;
            for ($i=$p;$i<=58;$i+=10){
               $k = ($i+1);
                  
               $sql= "SELECT * FROM Personnes, Reservations, Choix WHERE tsxxx=\"207\" AND idPersonne = ref_Personne AND idChoix = ref_Choix AND noperiode='$k' AND noSemaine=$nosemaine AND idChoix='$idChoix'" ;
               $table = send_sql($sql);
               $n = mysqli_num_rows($table);
               if ($n!=0){
                  echo "<td class=reservation bgcolor=#8b0000>Reservé </td>";}// changer la couleur en rouge
                  
               else{
                  
                  echo "<td class=reservation>Disponible</td>";}
            
               }
            echo "</tr>";}      
      echo "</table> </center>
      </form>
         
         ";     }  
   
//page 32: Permet de faire une reservation et l'enregistrer
function reservation() {
   if(isset($_SESSION['email'])){ 
	global $db, $link, $sql, $table,$idChoix,$nosemaine;
   $email=$_SESSION['email'];
   $prenom=$_SESSION['prenom'];
   $nom=$_SESSION['nom'];
   $mdp=$_SESSION['mdp'];
   $id=$_SESSION['idPersonne'];
	echo "			
   <br />
   <br />
   <br />
   <h3 class=enreg> Réservation </h3>
   <br />
   <center><br/><h1 class=bonjour>Bienvenue $prenom !</h1><br /><br /></center>
		";

	$sql = "SELECT * FROM Choix WHERE ref_tsxxx=207";
	$table = send_sql($sql);
	$n = mysqli_num_rows($table);
	echo"
   <center><h3>Veuillez choisir une activité</h3><br/></center>   
   <form action=\"index.php\" method=\"GET\">
	<center><select  name=\"intitule\">";   
	for($i=1;$i<=$n;$i++)
	  {
	  $r = mysqli_fetch_object($table);
	  $idChoix=$r->idChoix;                
	  $intitule=$r->intitule;           
	  echo "<option value=\"$idChoix\">$intitule</option><br /> ";
	  }
     echo "</select name=\"nosemaine\">";

     echo'
     <input type="hidden" name="pg" value="33"/>
     <select size="1" name=nosemaine >
     <option value="1">Semaine 1</option>
     <option value="2">Semaine 2</option>
     <option value="3">Semaine 3</option>
     <option value="4">Semaine 4</option>
     <option value="5">Semaine 5</option>
     <option value="6">Semaine 6</option>
     <option value="7">Semaine 7</option>
     <option value="8">Semaine 8</option>
     <option value="9">Semaine 9</option>
     <option value="10">Semaine 10</option>
     <option value="11">Semaine 11</option>
     <option value="12">Semaine 12</option>
     <option value="13">Semaine 13</option>
     <option value="14">Semaine 14</option>
     <option value="15">Semaine 15</option> </select></center><br/ >
  ';
  echo"
     <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"33\" >Faire une réservation </button>
     <button type=\"submit\" name=\"pg\" class=\"boite-input \" value=\"21\">Afficher mes réservations</button>
     <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"10\">Retourner à la page d'accueil</button>
     <br/><br/>
     <br/><br/>
 </form>
   ";}

   else { header("Location: index.php?pg=100");}

//Récupère les réservations pour la même période et semaine que celle voulue par l'usager

}


//Page 33 : Table intitule numero de periode à choisir et semaine
function selectionperiode(){
	global $db, $link, $nosemaine, $idChoix;
   $email=$_SESSION['email'];
   $prenom=$_SESSION['prenom'];
   $nom=$_SESSION['nom'];
   $mdp=$_SESSION['mdp'];
   $id=$_SESSION['idPersonne'];

   echo"
   <br /><br /><br />
   <h3 class='enreg'>Réservation</h3><br />";
   echo'
	<form action="index.php?" method="GET">
   <input type="hidden" name="pg" value="34"/>
   <input type=\'hidden\' name=\'intitule\' value='.$idChoix.'   />
   <input type=\'hidden\' name=\'nosemaine\' value='.$nosemaine.'   />'; 
   echo "<h3 class='bonjour'>Choisir la période de ta visite</h3><br/> <br/><br/>
   ";	
   echo '
   <center><table class=reservation > <tr>
   <th class=reservation > Mercredi </th> 
   <th class=reservation > Jeudi </th> 
   <th class=reservation > Vendredi </th>
   <th class=reservation> Samedi </th>
   <th class=reservation> Dimanche </th> </tr>';
   //On construit un tableau avec les choix d'horaires

	for ($j=0;$j<=6;$j++) {		//Variation des heures
      echo '<tr class=reservation>';
	   $p = 10 + $j;
	   for ($i=$p;$i<=59;$i+=10) //On ajoute les jours de la semaine, $i est la période
			{
				$h = ($j*3) + 6; //Heure affichée sur la plage de disponibilité			
			   global $db, $link;
			   $sql = 'SELECT * FROM Reservations,Choix WHERE Reservations.noperiode="'.$i.'" AND Reservations.noSemaine="'.$nosemaine.'" AND Reservations.ref_Choix=Choix.idChoix AND idChoix="'.$idChoix.'"  AND Choix.ref_Tsxxx=207';
			   $table = send_sql($sql);      // Envoi la requête à cogito
			   $n = mysqli_num_rows($table);
				if ($n) { //si le tableau n'est pas vide, la période est déjà réservée
					echo "<td class=reservation bgcolor=#8b0000  > Réservé</td>";}
				else {
					echo "<td class=reservation> <input type=\"radio\" name=\"periode\" align-text= \"center\"required value=\"$i\"> $h:00 </td>";}
			}
		echo '</tr>';}
	echo '</table></center>';
	echo"
   <br/>
   <br/>
   <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"34\">Faire une réservation</button>
   <button type=\"submit\" name=\"pg\" class=\"boite-input\" onclick = \"history.back()\">Retourner à la page précèdente</button>
  </form>";  

   return ;
      }


//Page 34 ENVOI LA REQUETE A SQL ET DEMANDE POUR UNE NOUVELLE ENREGISTREMENT
function finaliser() {
	global $db, $link, $nosemaine, $idChoix,$periode;
   $email=$_SESSION['email'];
   $prenom=$_SESSION['prenom'];
   $nom=$_SESSION['nom'];
   $mdp=$_SESSION['mdp'];
   $id=$_SESSION['idPersonne'];
   if (nondispo($nosemaine,$periode,$idChoix)) #si la periode et la semaine choisie sont déjà reservées
	{echo 
	'
   <center>
      <br />
      <br />
   <br/> <h3> Cette période est déjà réservée. </h3> <br />
   </center>
	';}
	else {
      $sql ='INSERT INTO Reservations VALUES(NULL,"'.$id.'","'.$idChoix.'" ,1,"'.$periode.'","'.$nosemaine.'", NULL, NULL , NULL,NULL)  ';
		$table = send_sql($sql); 
      echo "   
      <br />
      <br />
      <br />
      <center>
      <h3>Réservation confirmée pour ".$prenom." ".$nom."</h3>
      <form action =\"index.php\" >
    <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"10\">Acceuil</button> 
    <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"32\">Faire une autre réservation</button> 
    </form>
    </center>"  ;     
	}
}


//page 35
function Recuperation_mdp_oublié(){ //recuperation du mot de passe
   
   $email = "Votre courriel";
	echo "
   </br>
   </br>
   <br />
    <h1 class=recupmdp> Récupération de votre mot de passe</h1>
    </br>
   <p><form method=\"GET\" action=\"index.php\">
   <input type=\"hidden\" name=\"pg\" value=\"36\"/>
   <input type=\"email\" name=\"email\" class= \"boite-input\"placeholder=\"Courriel@polymtl.ca\"  />
	<input type=\"text\" name=\"prenom\" placeholder=\"Votre prénom\" class= \"boite-input\" />
	<input type=\"text\" name=\"nom\" placeholder=\"Votre nom\" class= \"boite-input\" />
   
   <input type=\"hidden\" name=\"pg\" value=\"36\"/>  
	<input type=\"submit\" class=boite-input value=\" Envoyer\" />
   </form>
   <p><form method=\"GET\" action=\"index.php\">
   <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"10\">Annuler</button> 
   </form>
   ";	
}


//page 36
function recuperation_mdp_envoye(){	#envoie confirmation et le mot de pase
	global $db, $link,$email,$nom,$prenom, $mdp;
   $sql = 'SELECT * FROM Personnes WHERE courriel ="'.$email.'" AND prenom="'.$prenom.'" AND nom="'.$nom.'"';
   $table = send_sql($sql);
	$r = mysqli_fetch_object($table);
   $n = mysqli_num_rows($table);
   if ($n==0) {echo '</br>
      </br>
      <br />
       <h1 class=recupmdp> Récuperation de votre mot de passe</h1>
       </br>
       <center>
      <h3>Les informations fournies sont incorrectes</h3>
      <br /><br />
      <h3 class=lien > <a href="index.php?pg=35">Retour</a></h3></center>	
      ';}
      else {
   $mdp = $r->mdp;
	$header1 = 'From: "TS2_H2021 sur cogito "<TS2_H2021.cogito@polymtl.ca>'."\n"; 
	$header2 = 'Content-Type: text/html; charset="utf-8"'."\n"; 
	$header3 = 'Content-Transfer-Encoding: 8bit'; 
	$headers = $header1.$header2.$header3;
	$sujet   = '[MEC1315]: Mot de passe vide';
   $message = "Le mot de passe  associé à votre compte est ".$mdp."";    
   if($e=mail($email,$sujet,$message,$headers))     
   echo '</br>
   </br>
   <br />
    <h1 class=recupmdp> Récuperation de votre mot de passe</h1>
    </br>
    <center>
   <h3>Le mot de passe a été envoyé à votre courriel '.$email.'</h3>
   <br /><br /></center>';
}}


//page 36: Envoi un courriel de confirmation au nouvel usager
// Retourne : TRUE (réussi) ou FALSE (pas de courriel)
function envoi_email($email,$mdp,$statut) {
   global $db, $link;
   
   $header1 = 'From: "TS2_H2021 sur cogito "<TS2_H2021.cogito@polymtl.ca>'."\n"; 
   $header2 = 'Content-Type: text/html; charset="utf-8"'."\n"; 
   $header3 = 'Content-Transfer-Encoding: 8bit'; 
   $headers = $header1.$header2.$header3;
   $sujet   = '[MEC1315]: Confirmation d\'un nouveau compte usager';
   
   $message = "Votre nouveau compte usager ".$email." a été créé avec succès sur le site web
   http://cogito.meca.polymtl.ca/~TS2_20211 avec le mot de passe ".$mdp." et le statut ".$statut.".<br />
   <br />
   L'équipe TI du site web TS2_H2021.";
   
   if($e=mail($email,$sujet,$message,$headers))     
      echo "<p>Un courriel de confirmation a été envoyé à cette adresse.<br /><br />";

   return $e;
}


//Page 40 : Formulaire d'information d'un nouvel usager
function nouvel_usager($message){
   global $db, $link, $email, $mdp, $P, $M, $C, $D, $A;
   
   if($email==NULL) $email = "nouveau@polymtl.ca";   //Si vide alors propose nouveau@polymtl.ca
   if($mdp==NULL) $mdp = random_password(8);         //Si vide alors propose un mdp de 8 caractères
   
   if($message!=NULL) echo '<br />
   <h3>'.$message.'</h3>';
   echo "<br />

    <form method=\"GET\" action=\"index.php\">
    <input type=\"hidden\" name=\"pg\" value=\"41\"/>
    <br />
    <br />
    <h3 class=enreg> Créer un nouveau compte </h3>
    <br />
    <br />
   <input type=\"email\" name=\"email\" class= \"boite-input\" value=\"$email\" />
   <input type=\"text\" name=\"mdp\" class=\"boite-input\"   value=\"$mdp\" />
	<input type=\"text\" name=\"prenom\" placeholder=\"Votre prénom\" class= \"boite-input\" />
	<input type=\"text\" name=\"nom\" placeholder=\"Votre nom\" class= \"boite-input\" />
   <input type=\"submit\" value=\"Envoyer\" class=\"boite-input\"/>
   ";  
   echo'
   <br />
   <h3 class= enregistrer> Déja un compte?<h3 class= lien><a href="index.php?pg=100">Cliquez ici</a></h3></h2>';
   return ;
}


//Page 41 : Valider les champs et enregistrer l'usager
function valide_usager(){
   global $db, $link, $email, $mdp, $statut,$nom, $prenom;
   //Lignes 76 servants comme moyen de dépannage de code, à enlever quand votre
   //site est publié officiellement
   if($email==NULL || $mdp==NULL || $prenom==NULL || $nom==NULL)  //Un champs est encore NULL
	  nouvel_usager("ERREUR: Les 4 champs sont obligatoires.");     
   else
      {
	  if(!valide_email($email))   //Adresse non Poly
		 nouvel_usager("ERREUR: Adresse courriel imPoly!");
	  else
         {
		 if(exist_usager($email))   //Adresse déjà utilisée
			nouvel_usager("ERREUR: Cette adresse courriel existe déjà!");
         else
		    {
			$sql = 'INSERT INTO Personnes VALUES(NULL,"'.$prenom.'","'.$nom.'" ,"'.$email.'",207,"'.$mdp.'")';
            $table = send_sql($sql);      // Envoi la requête à cogito
			echo "<br /><h1>S'ENREGISTRER</h1><br />
            <h3>Compte usager $email a été créé avec succès!!!</h3><br />";
			envoi_email($email,$mdp,$statut);  //Envoi un courriel de confirmation
            echo "<form method=\"GET\" action=\"index.php\">
            <input type=\"hidden\" name=\"pg\" value=\"10\"/> 
            <button type=\"submit\" name=\"pg\" class=\"boite-input\" value=\"10\" >OK </button>
            </p>";
	        }
	     }
      }
   return ; 
}

//Valide que l'usager n'existe pas dans la BD
function exist_usager($email){
   global $db, $link;
   $sql = 'SELECT * FROM Personnes WHERE courriel="'.$email.'" AND tsxxx="207"';
   $table = send_sql($sql);      // Envoi la requête à cogito
   $n = mysqli_num_rows($table);  // Récupère le nombre de lignes de la réponse

   return $n;
}

// Valide que $email est @polymtl.ca
function valide_email($email){ 
   $poly="@polymtl.ca"; // Chaine de référence
   $m=strlen($poly); // Nombre de catactères
   $email=strtolower($email); // Convertir $email en minuscule
   $n=strlen($email); // Nombre de caractères
   $valide=0; // Par défaut, c'est non valide!
   if($n>$m) // $email doit être plus long que $poly
      {
      $valide=1; // Possiblement valide
      while($valide && $m>=0) // Tant que valide et qu'il reste des caractères
         if($poly[$m--]!=$email[$n--]) $valide=0; // Si pas égale alors non valide
      }
 return $valide;
 }

// page 100: test si un utilisatuer est connécté et envoie la page de connecion le cas échéant
function test_login(){
   if(isset($_SESSION['use'])){ header("Location: index.php?pg=32");}
   else {login();}
   if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $mdp = $_POST['mdp'];
      $sql = 'SELECT * FROM Personnes WHERE courriel="'.$email.'" AND tsxxx="207" ';
      $table = send_sql($sql);
      $n = mysqli_num_rows($table);
      $r = mysqli_fetch_object($table);
    	if ($n==0)
    		echo "<h3 class='attention'>Entrez une adresse valide ou creez un compte </h3>";
    	elseif ($r->mdp!=$mdp)
         echo "<h3 class='attention'>Entrez un mot de passe valide</h3> ";
      else { 
         $_SESSION['email']=$email;
         $_SESSION['prenom']=$r->prenom;
         $_SESSION['nom']=$r->nom;
         $_SESSION['mdp']=$r->mdp;
         $_SESSION['idPersonne']=$r->idPersonne;
         header("Location: index.php?pg=32");
      }
  }
}


// page 101 :deconnecte l'usager de sa session
function logout() {
   session_start();
   session_destroy();   
   header("Location: index.php?pg=10");
}


//imprime la page de connexion
function login(){
   echo '
   <form  action="" method="post">
   <br />
   <br />
   <br />
	<h3 class= enreg > Veuillez vous connecter  </h3>
   <br />
   <br />
	   <input type="email" class="boite-input" name="email" placeholder="courriel@polymtl.ca" />
	   <input type="password" class="boite-input"  name="mdp" placeholder="Mot de passe"/>
      <input type="submit" class= "boite-input" name="submit" value="Connexion" /><br />
	<h3 class=lien > <a href="index.php?pg=35">Mot de passe oublié?</a></h3>	
	<br />
   <h3 class= lien><a href="index.php?pg=40">Créer un compte</a></h3>';
}


// Retourne un mot de passe aléatoire de $length caractères
function random_password($length) {
   $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $password = substr(str_shuffle($chars),0,$length );

   return $password;
}


// affiche les bouton de connection et deconnexion en haut de la page
function bouton_session() {
   if(isset($_SESSION['email'])){ 
      echo '<a id="login" href="index.php?pg=101" title="Créer un compte usager">Déconnexion</a>'
      ;}
   else { echo'
      <a id="login" href="index.php?pg=40" title="Créer un compte usager">S\'enregister</a>
      <a id="login" href="index.php?pg=100" title="Connexion">Connexion</a>
      ';}
}


//verifie si une plage est disponible
function nondispo($nosemaine,$periode,$idChoix){
   global $db, $link,$periode,$nosemaine,$idChoix;
   $sql = 'SELECT * FROM Reservations,Choix WHERE Reservations.noperiode="'.$periode.'" AND Reservations.noSemaine="'.$nosemaine.'" AND Reservations.ref_Choix=Choix.idChoix AND idChoix="'.$idChoix.'" AND Choix.ref_Tsxxx=207';
   $table = send_sql($sql);      // Envoi la requête à cogito
   $n = mysqli_num_rows($table);
   return $n;
}

// Cree les semaines
function semaine(){
   echo'
   </br><center><h3 >Veuillez selectionner la semaine voulu afin de voir ses disponibilités</h3></center></br>
   <center><select size="1" name=nosemaine >
   <option value="1">Semaine 1</option>
   <option value="2">Semaine 2</option>
   <option value="3">Semaine 3</option>
   <option value="4">Semaine 4</option>
   <option value="5">Semaine 5</option>
   <option value="6">Semaine 6</option>
   <option value="7">Semaine 7</option>
   <option value="8">Semaine 8</option>
   <option value="9">Semaine 9</option>
   <option value="10">Semaine 10</option>
   <option value="11">Semaine 11</option>
   <option value="12">Semaine 12</option>
   <option value="13">Semaine 13</option>
   <option value="14">Semaine 14</option>
   <option value="15">Semaine 15</option> </select></center>';
}

// affiche les boutons qui redirigent vers les disponibilités dans la page Activité
function affiche_dispo($intitule) {
   global $db, $link;
   $sql1 = 'SELECT * FROM Choix WHERE ref_tsxxx=207 AND intitule="'.$intitule.'" ';
   $table = send_sql($sql1);      // Envoi la requête à cogito  
   $r = mysqli_fetch_object($table);               
   $idChoix=$r->idChoix;        
   echo'   
   <form action="index.php" method="GET">
   <input type="hidden" name="intitule" value="'.$idChoix.'"/>
   <center> <button type="submit" name="pg" class="boite-input" value="23" >Voir les disponibilités</button>
   </form>
   ';}

?>
