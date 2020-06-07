<?php
include "fonctions_utiles.php";
include "fonctions_contenu_front.php";

session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "formation_restaurant";


//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("RESTO_URL_SITE", "http://localhost/formation/site_resto/");
define("RESTO_PATH_SITE", __DIR__ . "/");

define("URL_TEMPLATE", RESTO_URL_SITE . "template/site2020/");
define("PATH_TEMPLATE", RESTO_PATH_SITE . "template/site2020/");

define("NOM_DU_RESTO", "La super bohème");