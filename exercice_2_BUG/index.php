<?php
    require "mesfonctions.php";
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Une si jolie langue !</title>

    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mes_styles.css" type="text/css">
</head>
<body>

<main>

    <h1>Poésie (aléatoire)</h1>

    <div class="intro">
        Le but est d'afficher 2 poésies (très) aléatoires <br/>
        Un vers est composé de 6 mots et ne rimera pas.<br/>
        Et c'est nous qui determinons le nombres de vers par strophe.<br/>
        <em>Une poésie très très subjective !</em>
    </div>

    <div class="poesie">
        <h2>Ma première poésie</h2>
        <?php
        echo str_replace(PHP_EOL, "<br>" . PHP_EOL , maPoesie());
        ?>
    </div>

    <div class="poesie">
        <h2>Encore de la poésie</h2>
        <?php
        echo str_replace(PHP_EOL, "<br>" . PHP_EOL , maPoesie([2,2,3,3,2,2,6]));
        ?>
    </div>

    <div class="auteur">
        Auteur : <span><?php echo unVers(2) ?></span>
    </div>

</main>

<footer>
    Les décodeuses - <? php echo date(Y) ?>
</footer>

<!--

TODO 1 : ++ Débuger le code ! il ne fonctionne pas !!!

TODO 2 :
 - Je ne comprends pas, je veux qu'un vers soit composé de 6 mots et chez moi, il n'y a que 5 mots par vers !
 - d'ailleurs même mon auteur à 5 mots alors que j'en ai demandé 2 !

 TODO 3 :
 - Je voulais afficher la date dans le footer et j'ai l'impression que ça ne fonctionne pas !
 D'ailleurs quand je regarde le codesource, je vois directement du code PHP !!!!

-->


</body>
</html>