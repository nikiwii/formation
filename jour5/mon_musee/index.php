<?php
?><!DOCTYPE html>
<html>
<head>
    <title>Jour 5</title>
    <style>
        body {
            text-align: left;
            padding-left: 20px;
        }

        nav a{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

        h1 {
            background: #ccc;
            padding: 10px;
        }

        h2 {
            border-bottom:1px #ccc dotted;
            border-top:1px #ccc dotted;
            margin-top: 40px;
            padding: 20px 0 5px;
        }

    </style>
</head>

<body>

<h1>Mon (petit) musée</h1>

<div class="intro">
    Je souhaite réaliser le site internet d'un musée. <br>
    Dans un premier temps, il faut réaliser les pages HTML. <strong>Il n'y a aucun code PHP</strong>
    <hr>

    Sur toutes les pages :
    <ul>
        <li>Un bandeau de navigation (logo + navigation)</li>
        <li>un footer avec la navigation + lien "conditions générales" + l'adresse du musée</li>
    </ul>

    Page d'accueil
    <ul>
        <li>une photo du musée et une description</li>
        <li>une oeuvre (qui sera tiré au hasard dans la collection) et sa description</li>
    </ul>

    Page liste des artistes
    <ul>
        <li>
            un moteur de recherche avec le choix du type d'artiste (photographe, peintre, graveur...) cette liste
            pourra évoluer au fil du temps
        </li>
        <li>
            Le résultat de la recherche :
            1 ligne de résultat =
                <ul>
                    <li> Une photo de l'artiste</li>
                    <li>résumé de la biographie  de l'artiste </li>
                </ul>
        </li>
    </ul>

    Page détail d'un artiste
    <ul>
        <li>la biographie complète de l'artiste</li>
        <li>la photo et le titre d'une ou de plusieurs de ses oeuvres</li>
    </ul>





</div>

<hr>
<nav>
    <a href="../index.php">Retour</a>
</nav>


</body>
</html>