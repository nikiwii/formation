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
    <h2>$_POST[]</h2>
    <div>
        $_POST est une variable Superglobale.<br/>
        Comme toutes les variables Superglobales, elle est toujours disponible (que ce soit dans le script général ou dans une fonction par exemple).<br><br>
        $_POST est un tableau associatif qui récupére les paramètres d'un formulaire s'il utilise la methode POST.<br><br>
    </div>

    <a href="post.php">Réinitialiser les formulaires</a>

    <br><br>

    <div class="showme">
        <div class="title">Contenu de la variable $_POST</div>
        <div class="content">
            <?php
            var_dump($_POST);
            // Tant que nous n'envoyons pas de valeur via un formulaire avec la methode POST, le tableau reste vide
            ?>
        </div>
    </div>


    <h3>Formulaire 1</h3>
        Les valeurs POST sont envoyées au serveur grâce à un formulaire.

        <a id="form1"></a>
        <form method="post" action="post.php">
            <input name="nomChamp" type="text">
            <button type="submit">Valider</button>
        </form>

        <?php
        # EXERCICE  :   créer un formulaire qui va nous permettre d'afficher la table de multiplication de la
        #               valeur que nous avons choisi dans un champ du formulaire.


        #
        # après avoir validé un formulaire, re-charger à nouveau la page avec le bouton "recharger" du navigateur et constater.
        #
        ?>



    <h3>Formulaire 2</h3>
    <a id="form2"></a>
    <form method="post" action="post.php#form2">
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
            if(empty($_POST["text_libre_script"]))
            {
                echo "Aucune valeur n'a été entrée.";
            } else {
                echo $_POST["text_libre_script"];
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
