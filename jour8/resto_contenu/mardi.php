<?php
include "config.php";
include "contenu.php";
$menu_a_afficher = $contenuSite["menus"]["mardi"];

 // $title_page = $menu_a_afficher["titre"];

include $_dossier_template  . "page_menu_du_jour.php";
