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
    <h2>$_GET[]</h2>

    <div>
        $_GET est une variable Superglobale.<br/>
        Comme toutes les variables Superglobales, elle est toujours disponible (que ce soit dans le script général ou dans une fonction par exemple).<br><br>
        $_GET est un tableau associatif qui récupére les paramètres d'URL.<br><br>
        Un paramètre d'URL est une valeur que nous passons à notre script grâce à l'URL de notre page<br><br>
    </div>

    <a id="form1"></a>
    <div class="showme">
        <div class="title">Contenu de la variable $_GET</div>
        <div class="content">
            <?php
            var_dump($_GET);
            // Tant que nous ne passons pas paramètre d'URL le tableau reste vide.
            ?>
        </div>
    </div>


    <div>
        <ul class="lh-30">
            <li><a href="get.php">Charger la page sans paramètre d'URL</a></li>
            <li><a href="get.php?nom_parametre=Ceci est la valeur de mon url">Charger la page avec un paramètre d'URL</a></li>
            <li><a href="get.php?Parametre1=ValeurParametre1&Parametre2=ValeurParametre2">Charger la page avec 2 paramètres d'URL</a></li>
        </ul>
    </div>

    <?php

        echo "<hr>";

        tableDeMultiplication(3);

        echo "<hr>";

        # EXERCICE 1: Faire un lien qui va me permettre d'afficher la table de multiplication de 7




        # EXERCICE 2 : Faire 10 liens qui vont nous permettre d'afficher la table de multiplication de 1 à 10



        ?>

        <hr>

    <h3>Formulaire 1</h3>
        Nous pouvons passer les valeurs directement dans le lien grâce à la construction de l'URL mais aussi grâce à
        un formulaire


        <form method="get" action="get.php#form1"> <!-- Attention : dans la construction d'une URL, ne pas confondre les paramètres d'URL qui sont séparé par ? et & avec les ancres qui sont à la fin de l'URL séparé par # -->
            <input name="nomChamp" type="text">
            <button type="submit">Valider</button>
        </form>

        <?php
        # EXERCICE  :   créer un formulaire qui va nous permettre d'afficher la table de multiplication de la
        #               valeur que nous avons choisi dans un champ du formulaire.
        ?>



    <h3>Formulaire 2</h3>
    <a id="form2"></a>
    <form method="get" action="get.php#form2">
        Nous allons écrire à l'écran la valeur du champ suivant
        <br>
        <textarea name="text_libre_script" cols="70" rows="5"></textarea>
        <br>
        <button type="submit">Valider</button>
    </form>

    <div class="showme">
        <div class="title">Résultat du formulaire précédent</div>
        <div class="content">
            <?php
            if(empty($_GET["text_libre_script"]))
            {
                echo "Aucune valeur n'a été entrée.";
            } else {
                echo $_GET["text_libre_script"];
            }
            ?>
        </div>
    </div>



    <div class="sep-20">
        <strong>Essayer le formulaire précédent avec : </strong>
        <br>
        <ul>
            <li>Une seule ligne</li>
            <li>Plusieurs ligne</li>
        </ul>
        <br>
        Que constatons-nous ?
    </div>


    <div class="sep-20">
        <strong>Nous allons maintenant entrer dans le formulaire le code suivant</strong>
        <div class="code">
            &lt;script&gt;
                alert("toto");
            &lt;/script&gt;
        </div>
    </div>

    <?php
        # Exercice 1 : Empêcher que l'on puisse entrer du script dans notre formulaire



        # Exercice 2 : Faire une fonction qui va nous permettre d'afficher les sauts de ligne quand on affiche notre paramètre à l'écran.




    ?>


</div>

<?php include "nav.php"; ?>

</body>
</html>
