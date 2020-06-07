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

    <div class="menu">
        <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a>
        <a href="<?php echo RESTO_URL_SITE ?>admin/menu/menu_formulaire.php">Ajouter un menu</a>
    </div>

    <div class="list">
        <?php
            $results = $bdd -> query("SELECT * FROM menu order by ordre") -> fetchAll();

            if(count($results) == 0) {
                echo "Aucun menu";
            } else {
                echo "<ul>";

                foreach($results as $result) {
                    $lienModifier = html_a("Modifier", RESTO_URL_SITE . "admin/menu/menu_formulaire.php?menuAAfficher=$result[id_menu]");
                    $lienSupprimer = html_a("Supprimer", RESTO_URL_SITE . "admin/menu/menu_supprimer.php?menuASupprimer=$result[id_menu]", "alert", "Voulez-vous effacer ce menu ?");

                    echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";

                }

                echo "</ul>";
            }


        ?>

    </div>

<?php

include "../include/footer.php";