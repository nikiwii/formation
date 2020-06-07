<?php
include "../config.php";
include "include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

<h1>Bienvenue dans votre espace administration</h1>

<?php
show_error();
show_success();
?>

<div class="intro">
    Ici vous allez pouvoir modifier le contenu de votre site internet.<br/>

    <div class="menu_accueil">
        <a href="<?php echo RESTO_URL_SITE ?>" target="_blank">Voir le site</a>
        <a href="<?php echo RESTO_URL_SITE ?>admin/accueil/formulaire_accueil.php">Modifier ma page d'accueil</a>
        <a href="<?php echo RESTO_URL_SITE ?>admin/menu/menu_lister.php">Ajouter, modifier ou supprimer un menu</a>
        <a href="#">Ajouter, modifier ou supprimer un utilisateur</a>
        <a href="<?php echo RESTO_URL_SITE ?>admin/se_deconnecter.php">Se déconnecter</a>
    </div>



</div>

<?php

include "include/footer.php";