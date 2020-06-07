<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!empty($_POST)) {
    //
    // on construit la requête
    //

    if($_POST["id_menu"] == 0) {
        // je n'envoie pas d'ID donc je dois ajouter un nouveau menu

        // on aurait pu faire comme ça mais l'écriture est difficile à comprendre et moins sécurisé.
        //$bdd -> query ("INSERT INTO menu (nom, titre, entree, plat, dessert, ordre) VALUES ('$_POST[nom]', '$_POST[titre]' , '$_POST[entree]', '$_POST[plat]', '$_POST[dessert]', '$_POST[ordre]')");

        $query = $bdd -> prepare ("INSERT INTO menu (nom, titre, entree, plat, dessert, ordre) VALUES (:nom, :titre , :entree , :plat , :dessert , :ordre )");
        $query -> execute([
            ":nom" => $_POST["nom"],
            ":titre" =>  $_POST["titre"],
            ":entree" =>  $_POST["entree"],
            ":plat" => $_POST["plat"],
            ":dessert" =>  $_POST["dessert"],
            ":ordre" =>  $_POST["ordre"],
        ]);

        $menuID = $bdd -> lastInsertId(); // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
        ajouterSuccess("Nous avons ajouté un nouveau menu");

    } else {
        // un id est envoyé alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE menu SET 
                                            nom = :nom,
                                            titre = :titre,
                                            entree = :entree, 
                                            plat = :plat, 
                                            dessert = :dessert, 
                                            ordre = :ordre
                                            WHERE id_menu = :idMenu");

        $query -> execute(
            [
                ":nom" => $_POST["nom"],
                ":titre" =>  $_POST["titre"],
                ":entree" =>  $_POST["entree"],
                ":plat" => $_POST["plat"],
                ":dessert" =>  $_POST["dessert"],
                ":ordre" =>  $_POST["ordre"],
                ":idMenu" => $_POST["id_menu"],
            ]
        );

        $menuID = $_POST["id_menu"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
        ajouterSuccess("Nous avons modifié le menu");
    }
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageMenu"],  "image/menu/$menuID.jpg");
}


changeDePage(RESTO_URL_SITE . "admin/menu/menu_lister.php");

