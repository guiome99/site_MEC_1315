<?PHP
$MySQL_Host="localhost";  // Connexion à partir d'un compte Unix sur le poste local
$MySQL_User="H2022";  // Compte MySQL utilisé
$MySQL_Passw="MEC1315";  // Mot de passe du compte MySQL
$db ="TS2_20221";              // Nom de la base de données
$link;                    // Pointeur vers ma BD

function connect(){       // Établie une connexion à MySQL et ma BD
   global $MySQL_Host, $MySQL_User, $MySQL_Passw, $db, $link;

   $linkid=mysqli_connect($MySQL_Host,$MySQL_User,$MySQL_Passw,$db);
   if($linkid->connect_error) {
     die("Database connection failed: " . $dbconnect->connect_error);
   }
   mysqli_query($linkid,"SET character_set_results = ‘utf8’, character_set_client = ‘utf8’,
   character_set_connection = ‘utf8’,  character_set_database = ‘utf8’, character_set_server = ‘utf8’");
   $link = $linkid;
   return $linkid;
}

function send_sql($sql){  // Envoi une requête à ma BD
   global $link;
   $res=mysqli_query($link,$sql)
     or die (mysqli_error($dbconnect));

   return $res;
}
?>
