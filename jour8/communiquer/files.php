<?php
include "mesfonctions.php";
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



    <h1>Communiquer avec le serveur</h1>
    <h2>$_FILES[]</h2>
    <div class="sep-b-20">
        $_FILES est une variable Superglobale.<br/>

        C'est un tableau associatif qui récupére les valeurs téléchargées d'un formulaire s'il utilise la methode POST.<br><br>

        <a href="https://www.php.net/manual/fr/features.file-upload.post-method.php" target="_blank">La documentation sur le site de PHP</a>

    </div>

    <a href="files.php">Réinitialiser le formulaire</a>

    <br><br>

    <div class="showme">
        <div class="title">Contenu de la variable $_POST</div>
        <div class="content">
            <?php
            var_dump($_POST);
            ?>
        </div>
    </div>

    <div class="showme">
        <div class="title">Contenu de la variable $_FILES</div>
        <div class="content">
            <?php
            var_dump($_FILES);
            // Tant que nous n'envoyons pas de fichiers via un formulaire avec une methode POST, le tableau reste vide
            ?>
        </div>
    </div>


    <h3>Formulaire</h3>
        Pour envoyer un fichier via le formulaire, nous devons construire le formualaire avec un encodage
        particulier : <em>enctype="multipart/form-data"</em>

        <a id="form1"></a>
        <form method="post" action="files.php#form1" enctype="multipart/form-data">


            Champ de type texte :
            <input name="nomChamp" type="text">

            <hr>

            Fichier à envoyer : <input name="mon_fichier" type="file" />

            <hr>

            <button type="submit">Envoyer</button>
        </form>


    <?php
        //
        // Si j'ai envoyé un fichier à mon serveur, je vais le placer dans le repertoire /fichier_envoye
        //

        if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
            // = Si j'ai envoyé un fichier et que ce fichier n'a pas d'erreur

            // Je fabrique le chemin de destination de mon fichier
             # $dossier_destination = __DIR__ .  "/mes_fichiers_envoyes";
             # $chemin_fichier_destination = $dossier_destination . "/" . $_FILES["mon_fichier"]["name"];

            // Je bouge mon fichier du repertoire temporaire jusque dans mon répertoire de destination
            // et je modifie son nom
             # move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);

            // Je construits le lien vers le fichier que je viens d'envoyer sur le serveur
             # echo "<a href='mes_fichiers_envoyes/" . $_FILES["mon_fichier"]["name"] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante</a>";
        }

        echo "<hr>";



    if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
        // = Si j'ai envoyé un fichier et que ce fichier n'a pas d'erreur

        // Je choisis le nom du dossier dans lequel je veux placer le fichier envoyé
        # $nom_dossier_destination = "mon_dossier";

        // Je fabrique le chemin de destination de mon nouveau fichier
        # $chemin_dossier_destination = __DIR__ .  "/" . $nom_dossier_destination;
        # $chemin_fichier_destination = $chemin_dossier_destination . "/" . $_FILES["mon_fichier"]["name"];

        echo "<hr>";

        // Je bouge mon fichier du repertoire temporaire jusque dans mon répertoire de destination
        // et je modifie son nom
        # move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);

        // Je construits le lien vers le fichier que je viens d'envoyer sur le serveur
        # echo "<a href='" . $nom_dossier_destination . "/" . $_FILES['mon_fichier']['name'] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante</a>";
    }

    ?>



</div>

<?php include "nav.php"; ?>

</body>
</html>
