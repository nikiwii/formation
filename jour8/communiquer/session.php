<?php
    include("config.php");
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
    <h2>$_SESSION[]</h2>

    <div class="sep-b-20">
        $_SESSION est une variable Superglobale.<br/>
        Comme toutes les variables Superglobales, elle est toujours disponible (que ce soit dans le script général ou dans une fonction par exemple).<br><br>
        $_SESSION est un tableau associatif qui récupére les valeurs stockées dans la session<hr>

        Une session est un fichier stockée sur le serveur dans lequel il y a des valeurs.<br>
        Il existe une session pour chaque utilisateur.<br>
        La variable existe tant que la session existe, même si l'utilisateur change de page.<br>
        C'est par exemple ce qui nous permet de rester connecter quand on navigue sur facebook (ou twitter, ou instagram, j'arrete là car je n'ai plus d'idée)<br>
    </div>


    <?php

        // Oups ! ça ne fonctionne pas !
        // pourtant j'ai dit qu'elle était toujours disponible !!!
        //
        // pour être utilisé sur une page, il faut informer php de démarer une nouvelle session ou de récupérer une session existante
        // pour cela on utilise ma fonction
        // session_start();
        //
        // on ne peut utiliser qu'une seule fois cette fonction dans un script.
        // il vaut mieux le placer en premier dans notre script.
        // Si notre site utilise des sessions et qu'il a un fichier de config, vous pouvez ouvrir la session dans ce fichier.

        // ajouter une valeur à notre session

       // $_SESSION["nom_de_ma_valeur"] = "Ma valeur";



        // Ajouter des valeurs avec des clés différentes dans ma variable de session

        //

    ?>

    <div class="showme">
        <div class="title">Contenu de la variable $_SESSION</div>
        <div class="content">
            <?php

            var_dump($_SESSION);
            // Tant que nous ne passons pas paramètre d'URL le tableau reste vide.
            ?>
        </div>
    </div>

    <hr>
    <a href="lire_session.php" target="_blank">Fichier qui affiche les valeurs de ma session en cours</a>



</div>

<?php include "nav.php"; ?>

</body>
</html>
