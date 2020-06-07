<?php

include "../config.php";

unset($_SESSION["connected_user"]);

// Je détruits cette variable  car c'est elle que nous testons pour savoir si on est connecté.
// si elle n'existe pas, alors nous ne sommes pas connecté.

changeDePage( RESTO_URL_SITE . "/admin/connexion.php");