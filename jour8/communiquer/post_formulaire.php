<?php
    include "pays_du_monde.php";
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 8</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>

<body>

<div class="main">

    <h1>Jour 8</h1>

    <h1>Formualaire POST</h1>

    <a href="post_formulaire.php">Réinitialiser la page</a>


    <form method="post" action="#result">
        <div>
            <label for="nom">Entrer votre prénom</label>
            <input type="text" name="prenom" placeholder="prénom">
        </div>

        <div class="sep-20">
            <label for="PHP">Choisir si vous apprenez le PHP</label>
            <input type="checkbox" name="PHP" id="PHP" value="J'apprends le PHP">
        </div>

        <div class="sep-20">
            + Choisir un fruit <br>
            + puis faire un essai avec plusieurs fruits<br><br>

            Banane<input type="checkbox" name="fruits" value="Banane"> <br>
            Kiwi<input type="checkbox" name="fruits" value="Kiwi"> <br>
            Ananas<input type="checkbox" name="fruits" value="Ananas"> <br>
            Fraise<input type="checkbox" name="fruits" value="Fraise"> <br>
        </div>

        <div class="sep-20">
            Quelle année sommes nous ?
            <select name="annee">
                <option></option>
                <?php for($i=1980; $i<=date("Y") + 10; $i++) {
                    echo "<option value='$i'>$i</option>" . PHP_EOL;
                }
                ?>
            </select>
        </div>

        <div class="sep-20">
            Choisir 1 ou plusieurs pays (maitenir touche CTRL pour pouvoir en choisir plusieurs)
            <br/>
            <select name="choix_pays" multiple class="multiselect">
                <?php
                foreach ($pays as $un_pays) {
                    echo "<option value='$un_pays[3]' >$un_pays[3]</option>" . PHP_EOL;
                }
                ?>
            </select>
        </div>

        <div class="sep-20">
            Choisir ce qu'il y a de pire en PHP <br><br>
            <input type="radio" name="pire_php" value="Includes"> Les INCLUDE <br>
            <input type="radio" name="pire_php" value="fonctions"> Les Fonctions <br>
            <input type="radio" name="pire_php" value="boucles"> Les boucles <br>
            <input type="radio" name="pire_php" value="get"> $_GET[]<br>
            <input type="radio" name="pire_php" value="gymnastique"> La gymnastique<br>
        </div>

        <div class="sep-20">
            Texte sur plusieurs lignes <br><br>
            <textarea name="texte_plusieurs_lignes" cols="60" rows="5"></textarea>
        </div>

        <input type="hidden" name="champ_cache" value="4598">


        <div class="sep-20">
            <button>Valider</button>
        </div>



    </form>

    <a id="result"></a>
    <div class="showme">
        <div class="title">Contenu de la variable $_GET</div>
        <div class="content">
            <?php
            var_dump($_POST);
            // Tant que nous ne passons pas paramètre d'URL le tableau reste vide.
            ?>
        </div>
    </div>


</div>


<?php include "nav.php"; ?>


</body>
</html>
