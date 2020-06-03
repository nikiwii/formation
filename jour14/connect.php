<?php

$host = "localhost";
$dbname = "formation_bibliotheque";
$username = "root";
$pass = "";

// Sous WAMP (Windows)
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '');

// Sous MAMP (Mac)
// $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');




$rep = $bdd->query('Select * from auteur where id_auteur=1');
$rep = $bdd->query('Select * from auteur');


var_dump($rep);

var_dump($rep -> fetchAll());


while($donnee = $rep->fetch()) {
    echo "<hr>";
    var_dump($donnee);
}

