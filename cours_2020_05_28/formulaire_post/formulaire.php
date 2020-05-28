<?php
  session_start();

    require "pays_du_monde.php";

    function addClassErreurChamp($nomChampVide) {
        //
        // Ajoute une class "champ_erreur" si le champ en question est vide.
        // pour que ce soit visible, vérifier que nous avons donné un style à cette class.
        //
        if( !empty($_SESSION["champ_erreur"]) && $_SESSION["champ_erreur"] == $nomChampVide) {
            echo " champ_erreur "; //
            unset($_SESSION["champ_erreur"]);
        }
    }


?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
    <link rel="stylesheet" type="text/css" href="css/mes_styles.css">
</head>
<body>

  <h1>Formulaire POST</h1>


    <?php

    if( isset($_SESSION["err"]) && $_SESSION["err"] == "CHAMP") {
        // Si dans mon url, j'ai un paramètre d'url qui s'appelle err
        // et que ce paramètre vaut "CHAMP"
        // alors j'écris une div avec mon message d'erreur.
        echo "<div class='erreur'>Merci de remplir tous les champs</div>";
        unset($_SESSION["err"]);
    }
    ?>


    <!--
    Une fois validé, mon formulaire va envoyer sous forme de paramètres d'URL
    la valeur des champs au fichier verifier_reponses.php
    -->
    <form method="post" action="verifier_reponses.php">
        <div class="<?php addClassErreurChamp("nom")?>" >
            <label>Nom</label>
            <input type="text" name="nom">
        </div>

        <div class="<?php addClassErreurChamp("prenom")?>" >
            <label>Prénom</label>
            <input type="text" name="prenom">
        </div>

        <div class="<?php addClassErreurChamp("annee")?>" >
            <label>Année de naissance</label>
            <select name="annee">
                <option></option>
                <?php
                for($i=1960; $i <= date("Y") - 16; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>

        <div class="<?php addClassErreurChamp("email")?>" >
            <label>Email</label>
            <input type="text" name="email">
        </div>

        <div class="<?php addClassErreurChamp("pays")?>" >
            <label>Pays</label>
            <select name="pays">
                <?php
                foreach ($pays as $arr_pays) {
                    echo "<option value='" . $arr_pays[3] . "'>" . $arr_pays[3] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="part-valider">
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>
