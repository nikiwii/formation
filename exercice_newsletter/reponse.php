<?php

include "config.php";

// je fabrique la chaine de caractere qui sera la requête pour ma base de données
// je peux écrire directement $_POST[nomDuChampDuFormulaire] car j'ai mis ma chaine entre double guillemet "
$maRequete = "INSERT INTO inscription(nom, prenom, email) VALUES ('$_POST[fnom]', '$_POST[fprenom]', '$_POST[femail]')";


// $bdd est défini dans mon fichier config.php
$bdd->query($maRequete);
$messageErreurBDD = $bdd -> errorInfo(); // je recupere l'eventuelle message d'erreur de ma base de donnée.



if(!empty($messageErreurBDD[1])) { // si j'ai une erreur, dans le tableau des erreurs, la seconde case à un chiffre qui indique l'erreur. Si il n'y a pas d'erreur, ce champs est vide
    $_SESSION["erreur"] = TRUE; // je crée une variable visible partout pour indiquer qu'il y a une erreur
} else {
    $_SESSION["success"] = TRUE; // je crée une variable qui indique que l'enregistrement s'est passé correctement.
}



header("location:formulaire.php");

