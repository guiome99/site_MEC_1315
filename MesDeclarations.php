<?php   // Fichier: MesDeclarations.php
global $UserID;
$ouverture='<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<video id="background-video" autoplay loop muted >
  <source src="https://previews.customer.envatousercontent.com/files/0a892d74-9142-489e-b30f-d52e8a3733aa/video_preview_h264.mp4" type="video/mp4">
</video>
<head>
  <title>Polytechnique gamer zone site de réservations</title>
  <link href="mon_style_E1.css" rel="stylesheet" type="text/css" /> 
</head>';

$entete='<body>
  <div class="entete">
    <h1> <center> Gamer Zone Polytechnique Montréal </center> </h1>
    <h2> <center> Travail synthèse du MEC1315 Ti en ingénierie </center> </h2>
    <div id="menu-top" style = "position:relative; left:10px; top:7px;">
    <a href="index.php?pg=10" title="Accueil du site"><p id="logo"><img src="images/vv.png" alt="Logo" width="130" height="130" /></p></a>
      <a href="index.php?pg=22" title="Activité">Activit&eacute;s</a>
      <a href="index.php?pg=20" title="Afficher les activités disponibilités">Disponibilité</a>
      <a href="index.php?pg=32" title="Effectuer une Réservation">Reservation</a>
      <a href="index.php?pg=50" title="R&egrave;gles de déclaration">Reglements</a>	  
      
    </div>
  <br />
  </div>
  ';

  $accueil='<br /><br /><br /><h3 class=enreg><center> Bienvenue chez Gamer Zone Montréal </center></h1><br />
  <br />
  <br />
  <p>Ce site Web permet aux usagers de faire une Réservation pour différents types d\'activitées et voir les disponibilités
  selon le jour et l\'heure voulue.</p><br /><br />
  
  <h2>Identification requise</h2>
  
  <p class=rougeaccueil> Toutes les personnes  doivent s\'identifier avec leur courriel Polytechnique, 
  ainsi que leur mot de passe, afin de déclarer ou modifier une déclaration.</p> <br /> 
   

<br /> <div class="attention">

<img src="images/poste unique.png" alt="poste unique" height="300" width="445.5"/>
      <img src="images/salle vip.png" alt="poste unique" height="300" width="445.5"/> <br /> <br />
 

 <br /> <p> Pour nous joindre: </p> <br />
 <p>
<table class = "auteurs" >
 <tr>
 <th align ="left" width="250"> Aimée C. Emerimana </th> <td> aimee-christella.emerimana@polymtl.ca</td>
 </tr>
 <tr><th align ="left"> Giselle Garay </th><td> giselle.garay@polymtl.ca </td> </tr>
 <tr><th align ="left"> Guillaume Garnier </th><td> guillaume.garnier@polymtl.ca </td> </tr>
 <tr><th align ="left"> Rached Rihani </th><td> rached.rihani@polymtl.ca </td> </tr>

<iframe  align="right" width="350" height="120" id="gmap_canvas" src="https://maps.google.com/maps?q=polymtl&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> 


 </table>
 </p>
 <br />


 <h3 class=attention> Attention </h3> 
 
<p> Ce site est le fruit d\'un travail de synthèse étudiant dans le cadre du cours <a href=https://moodle.polymtl.ca/course/view.php?id=234 >MEC1315</a>
 à l\'hiver 2022</P>

</div>
 

  ';
$fermeture=' </body>
  </html>';

$regle123='<br /> <br /> <br />

<h3 class=enreg>RÈGLEMENTS</h3><br />
  <br />

  <p class= rouge>Cette section présente les règlements de fonctionnement dans les salles de jeux lors de votre visites.</p><br />
  <dl>
  <dt class= regles>Règles pour l\'usage de ce site : </dt><dd class= regles><ol>
	<li>Seule les usagers inscrites sur le site WEB avec une adresse @polymtl.ca peuvent effectuer des transactions.</li><br />
  
	<li>Les déclarations concernent les professeurs, les maitres d\'enseignement et les chargé de cours seulement.</li><br />
  
	<li>Pour vous inscrire, veuillez utiliser votre email de Polytechnique @polymtl.ca.</li></ol>
  <br /><img src="images/masque gamer.png" alt="poste unique" height="200" width="350" align="right"/>
  
  <dt class= regles>Règles concernant nos locaux :<dt><dd class= regles><ol>
	<li>Le masque doit être porté en tout temps à l’intérieur des salles.</li><br />
	<li>Interdiction de boissons alcolisées, de drogues et d\'autres substances illégales.</li><br />
 
	<li>Si un usager ne se présente pas à une réservation, les frais lui seront réclamés.</li></ol>
</dl>';


  $activites_1='

  <br /><br /><br /><h3 class=enreg><center> Activités disponibles à la réservation </center></h3><br />
  
  <br /><h3 class= regles> POSTE DE JEU </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 20$ pour 3 heures</td> <td  class="reservation1" rowspan ="2"> Ce tarif inclus l\'accès à un poste ainsi que l\'utilisation du matériel à disposition. <br/>
  Vivez une expérience interactive inoubliable avec le meilleur matériel de jeu vidéo disponible sur le marché.</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 30$ pour 3 heures </td> 
  </tr>
  </table> <br/></center>
  <center> <p> <img src="images/poste unique.png" alt="poste unique" height="250" width="400"/> </p> </center></div><br />

  ';

  $activites_2='

  <br /><h3 class= regles> SALLE DE JEUX </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 20$ pour 3 heures</td> <td rowspan ="2" class="reservation1"> Réservation d\'une salle de jeu pouvant accueillir plus de 20 personnes.<br/> Boissons et nourriture sont offerts sur place et la salle permet à 20 
  personnes de jouer en simultané.</td>
  </tr>
  <tr class=reservation>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 30$ pour 3 heures </td> 
  </tr>
  </table> <br/></center>
  <center><img src="images/salle de groupe.png" alt="poste unique" height="250" width="480"/></center><br />
   
    ';
    $activites_3='
  <br /><h3 class= regles> NUIT BLANCHE </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 50$ pour 6 heures</td> <td rowspan ="2" class="reservation1"> Réservation d\'un poste unitaire pour la soirée le café à volonté..</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 70$ pour 6 heures </td> 
  </tr>
  </table> <br/></center>
  <center><img src="images/nuit blanche.png" alt="nuit blanche" height="250" width="400"/></center><br />
    ';
    $activites_4='
  <br /><h3 class= regles> SALLE VIP </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 100$ pour la journée</td> <td rowspan ="2" class="reservation1"> Réservation d\'une salle de fête contenant les meilleurs arcades sur le marché <br />ainsi qu\'un service de traiteur
  inclus pour vaincre les fringales.</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 120$ pour la journée </td> 
  </tr>
  </table> <br/></center>
  <center><img src="images/salle vip.png" alt="vip room" height="250" width="400"/></center><br />
  ';
  $activites_5='
  
  <br /><h3 class= regles> RÉALITÉ VIRTUELLE </h3><br />
 <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 90$ pour 3 heures</td> <td rowspan ="2" class="reservation1"> Laissez-vous imerger dans le monde de la réalité virtuelle!<br/>
  Réservez un poste de réalité virtuelle de haute performance à la fine pointe de la technologie.
  .</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 100$ pour 3 heures </td> 
  </tr>
  </table> <br/></center>
  
  <center><img src="images/virtual reality.png" alt="vr" height="250" width="400"/></center><br />
  ';
  $activites_6='

  <br /><h3 class= regles> COURS DE JEUX VIDÉOS </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 60$ pour 3 heures</td> <td rowspan ="2" class="reservation1">Devenez un meilleur joueur rapidement et sans difficulté avec l\'aide de nos entraineurs plus que qualifiés.!<br/>
  Reservez pour un entrainement en jeux vidéos et utilisation des commandes afin d\'améliorer vos performances.
  </td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 70$ pour 3 heures </td> 
  </tr>
  </table> <br/></center>
  
  <center><img src="images/entraineurs jeu.png" alt="vr" height="250" width="400"/></center><br />
  ';
  $activites_7='

  <br /><h3 class= regles> INITIATIONS AUX JEUX VIDÉOS </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 60$ pour 3 heures</td> <td rowspan ="2" class="reservation1"> Venez découvrir toutes les nouveautés du moment dans un environnement absolument électrique.<br/>
  Réservation d\'un espace pour venir essayer les nouveaux jeux du moment et cela avant la sortie officielle de certains jeux.
	</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 90$ pour 3 heures </td> 
  </tr>
  </table> <br/></center>
 
  <center><img src="images/initiation jeu.png" alt="vr" height="250" width="400"/></center><br />

  ';
  $activites_8='
  
  <br /><h3 class= regles> TOURNOIS </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 100$ pour la journée</td> <td rowspan ="2" class="reservation1"> Venez vous mesurez aux meilleurs joueurs de votre région et remportez des prix de victoires et de participation!<br/>
  Inscription à un tournoi selon différentes catégories de niveaux et d\'expérience pour les meilleurs
  aventures.
  </td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 130$ pour la journée </td> 
  </tr>
  </table> <br/></center>
 
  <center><img src="images/tournoi.png" alt="vr" height="250" width="400"/></center><br />
  ';
  $activites_9='

  <br /><h3 class= regles> ACCÈS ILLIMITÉ JOURNALIER </h3><br />
  <center><table  border="3"> <caption> TARIFS </caption>
  <tr  >
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 150$ pour la journée</td> <td rowspan ="2" class="reservation1"> Jouez sans interruptions et oubliez le monde extérieur pour une journée!<br/>
  Nos chaises de comfort supérieur vous feront oublier le temps qui passe pendant que vous profitez des meilleurs jeux du moment.
 </td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 180$ pour la journée </td> 
  </tr>
  </table> <br/></center>
  
  <center><img src="images/journee complete.png" alt="vr" height="250" width="400"/></center><br />
  ';
  $activites_10='
  <br /><h3 class= regles> OCCASION SPÉCIALE </h3><br />
  <center><table border="3"> <caption> TARIFS </caption>
  <tr>
  <th class=reservation> Périodes </th> 
  <th class=reservation>Prix</th> <th class=reservation> Description</th>
  <tr>
  <th class=reservation> MERCREDI ET JEUDI  </th>
  <td class=reservation> 200$ pour la journée </td> <td  class="reservation1" rowspan ="2"> Venez célébrez quelqu\'un dans le meilleur des environnements avec les meilleurs consoles à disposition. <br/>
  Vivez une expérience inoubliable avec ce forfait incluant les boissons et la nourriture pour toute la journée.</td>
  </tr>
  <tr>
  <th class=reservation> VENDREDI À DIMANCHE  </th>
  <td class=reservation> 300$ pour la journée </td> 
  </tr>
  </table> <br/></center>
  <center> <p> <img src="images/celebration.png" alt="celebration" height="250" width="400"/> </p> </center></div><br />
  '
  ;

?>

  