<?php
include "config.php";
include "contenu.php";
$menu_a_afficher = $contenuSite["menus"]["mercredi"];

include $_dossier_template  . "page_menu_du_jour.php";
