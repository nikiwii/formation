<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des menus.

include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!isset($_GET["menuASupprimer"])) { // on verifie que nous avons bien l'identifiant de notre menu à supprimer.
    ajouterErreur("Merci de choisir le menu à supprimer.");
} else {
    // on a l'identifiant, nous supprimons le menu
    $bdd -> query("DELETE FROM menu WHERE id_menu = " . $_GET["menuASupprimer"]);
    ajouterSuccess("Le menu a été supprimer.");

}

changeDePage(RESTO_URL_SITE . "admin/menu/menu_lister.php");

