<?php
#include "config_database.php";

if (!empty($_POST["ma_requete"])) {
    $requeteUtilisateur = $bdd->query($_POST["ma_requete"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 14</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>

<body>
<h1>Les requêtes</h1>

<div class="p txt-left">
    Installer la base de donnée :
    <ul>
        <li> 1 - Créer via PhpMyAdmin une base de données "formation_bibliotheque"</li>
        <li> 2 - Importer les données qui sont dans sql/bibliotheque.sql</li>
        <li> 3 - décommenter la ligne 2, modifier le fichier config_database comme il se doit et effacer la ligne 30.
        </li>
    </ul>
</div>

<?php exit; ?>


<div class="txt-center p">
    <h2>Schéma de la base de données.</h2>
    <img src="img/shema.jpg">
</div>



<a id="goHere"></a>
<div class="row ">

    <div class="col-4">
        livres
        <?php showTable("livre") ?>
    </div>

    <div class="col-4">
        auteur

        <?php showTable("auteur") ?>
    </div>

    <div class="col-4">
        categorie
        <?php showTable("categorie") ?>
    </div>

    <div class="col-4">
        auteur_livre
        <?php showTable("auteur_livre") ?>
    </div>
</div>



<?php if(!empty($_POST["ma_requete"])) {
    echo "<div class='resultat'>";

    echo "<div class='showQuery'><h3>La requête envoyé</h3>" . $_POST["ma_requete"] . "</div>";

    if(!is_bool($requeteUtilisateur)) {
        $result = $requeteUtilisateur->fetchAll(PDO::FETCH_ASSOC);
        showInTable($result);
    } else {
        if(isset($bdd -> errorInfo()[2])) {
            echo "<div class='error'>";
            echo $bdd->errorInfo()[2];
            echo "</div>";
        }
    }
    echo "</div>";
}?>



<div class="formulaire">
    <form action="index.php#goHere" method="post">
        <div>
            <textarea name="ma_requete"><?php
              echo !empty($_POST["ma_requete"]) ? $_POST["ma_requete"] : "" ;
            ?></textarea>
        </div>
        <div>
            <button type="submit">Exécuter la requête !</button>
        </div>
    </form>
</div>




<div class="liste_requetes">

    <?php
       $resRequete = $bdd -> query("select * from requete order by id_requete");
       showInTable($resRequete -> fetchAll(PDO::FETCH_ASSOC), ["id_requete"]);



    ?>



</div>


</body>
</html>
