<?php

session_start();


$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "formation_newsletter";

//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

