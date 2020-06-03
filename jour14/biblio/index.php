<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
</head>
<body>

<?php

function vd($var) {
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

 $serveur = "localhost";
 $utilisateur = "root";
 $motDePasse = "";
 $nomBaseDeDonnees = "bibliotheque";
 $bdd = new PDO(
   "mysql:host=$serveur;dbname=$nomBaseDeDonnees" ,
   $utilisateur,
   $motDePasse,
   array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
 );


 $rep = $bdd->query("select * from livre");
 $result_livres = $rep -> fetchAll();

  foreach($result_livres as $key => $livre) {
    echo "- Titre : " . $livre["titre"]  . "<br>";
  }


 ?>

</body>
</html>
