<?php
include "../../config.php";
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.



if(!empty($_GET["menuAAfficher"])) {
    // si j'ai un paramètre d'URL, c'est que je modifie
    // un enregistrement déjà existant.
    $menuAModifier = $bdd -> query("SELECT * from menu where id_menu = " . $_GET["menuAAfficher"]) -> fetch();
} else {
    $menuAModifier = [];
}
?>

    <h1>Gestion des menus</h1>

    <?php
    show_error();
    show_success();
    ?>

    <div class="form">
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="menu_formulaire_reponse.php" method="post">

            <input type="hidden" name="id_menu" value="<?php echoKey($menuAModifier, "id_menu", 0)  ?>">

            <div class="field">
                Nom : <input name="nom" placeholder="Nom" type="text" value="<?php echoKey($menuAModifier, "nom")  ?>">
            </div>

            <div class="field">
                Titre : <input name="titre" placeholder="Titre" type="text" value="<?php echoKey($menuAModifier, "titre")  ?>">
            </div>

            <div class="field">
                Entrée : <input name="entree" placeholder="Entrée" type="text" value="<?php echoKey($menuAModifier, "entree")?>">
            </div>

            <div class="field">
                Plat : <input name="plat" placeholder="Plat" type="text"  value="<?php echoKey($menuAModifier, "plat")?>">
            </div>

            <div class="field">
                Dessert : <input name="dessert" placeholder="Dessert" type="text"  value="<?php echoKey($menuAModifier, "dessert")?>">
            </div>

            <div class="field">
                Ordre : <input name="ordre" placeholder="Ordre" type="number"  value="<?php echoKey($menuAModifier, "ordre")?>">
            </div>


            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

            <div class="image_admin">
            <?php
            if(!empty($_GET["menuAAfficher"])) {
                echo html_image("image/menu/$_GET[menuAAfficher].jpg", "mini_image");
                }
            ?>
            </div>

            <div>
            Image du menu : <input name="imageMenu" type="file"  accept="image/jpeg" />
            </div>

            <input type="submit" value="Envoyer" />
            <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php" class="button">Annuler</a>

        </form>

    </div>

<?php

include "../include/footer.php";