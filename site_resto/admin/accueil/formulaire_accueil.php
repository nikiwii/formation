<?php
include "../../config.php";
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

    <h1>Modification de la page d'accueil</h1>

<?php
show_error();
show_success();
?>

    <div class="form">
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="formulaire_accueil_reponse.php" method="post">
            <div class="field">
            <input type="text" name="titre" value="<?php echo montrerValeur("TITRE_ACCUEIL")?>" placeholder="Titre de la page" />
            </div>

            <textarea name="texteAccueil"><?php echo montrerValeur("TEXTE_ACCUEIL")?></textarea>

            <!--
            MAX_FILE_SIZE doit précéder le champ input de type file. Il dit la taille maximum du fichier que l'on peut envoyer
            Ce champ n'est pas obligatoire.
             -->
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

            <div class="image_admin">
            <?php echo html_image("image/vrac/accueil.jpg", "mini_image");?>
            </div>

            Image de la page d'accueil : <input name="imageAccueil" type="file"  accept="image/jpeg" />

            <input type="submit" value="Envoyer" />
            <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php" class="button">Annuler</a>
        </form>

    </div>

<?php

include "../include/footer.php";